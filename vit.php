<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
?>

<?php
use Vit\SpecializationTable;
use Vit\DoctorsTable;
use Vit\AdmissionTypeTable;
use Vit\AddressTable;
?>

<div class="container">
    <h2 class="mb-4">Запись на прием к врачу</h2>

    <form id="appointment-form">
        <!-- 1. Специализация -->
        <div class="mb-3">
            <label for="specialization" class="form-label">Специализация</label>
            <select class="form-select" id="specialization" name="specialization">
                <option value="">Выберите</option>
            </select>
        </div>

        <!-- 2. Врач -->
        <div class="mb-3">
            <label for="doctor" class="form-label">Врач</label>
            <select class="form-select" id="doctor" name="doctor">
                <option value="">Выберите</option>
            </select>
        </div>

        <!-- 3. Тип приема -->
        <div class="mb-3">
            <label for="appointment_type" class="form-label">Тип приема</label>
            <select class="form-select" id="appointment_type" name="appointment_type">
                <option value="">Выберите</option>
            </select>
        </div>

        <!-- 4. Адрес приема -->
        <div class="mb-3">
            <label for="address" class="form-label">Адрес приема</label>
            <select class="form-select" id="address" name="address">
                <option value="">Выберите</option>
            </select>
        </div>

        <!-- 5. Дата приема -->
        <div class="mb-3">
            <label for="appointment_date" class="form-label">Дата приема</label>
            <input type="date" class="form-control" id="appointment_date" name="appointment_date" disabled>
        </div>

        <!-- 6. Время приема -->
        <div class="mb-3">
            <label for="appointment_time" class="form-label">Время приема</label>
            <select class="form-select" id="appointment_time" name="appointment_time" disabled>
                <option value="">Выберите</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Записаться</button>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', async () => {

        const specializationSelect = document.getElementById('specialization');
        const doctorSelect = document.getElementById('doctor');
        const typeSelect = document.getElementById('appointment_type');
        const addressSelect = document.getElementById('address');
        const dateInput = document.getElementById('appointment_date');
        const timeSelect = document.getElementById('appointment_time');

        let doctorCalendar = [];

        // --- 1. Подгружаем специализации ---
        const specsResp = await fetch('/api/specializations.php');
        const specializations = await specsResp.json();
        specializations.forEach(spec => {
            const opt = document.createElement('option');
            opt.value = spec.id;
            opt.textContent = spec.name;
            specializationSelect.appendChild(opt);
        });

        // --- 2. При смене специализации подгружаем врачей ---
        specializationSelect.addEventListener('change', async () => {
            const specId = specializationSelect.value;
            doctorSelect.innerHTML = '<option value="">Выберите</option>';
            dateInput.value = '';
            dateInput.disabled = true;
            timeSelect.innerHTML = '<option value="">Выберите</option>';
            timeSelect.disabled = true;

            if (!specId) return;

            const resp = await fetch(`/api/doctors.php?specialization=${specId}`);
            const doctors = await resp.json();

            doctors.forEach(doc => {
                const opt = document.createElement('option');
                opt.value = doc.id;
                opt.textContent = doc.name;
                doctorSelect.appendChild(opt);
            });
        });

        // --- 3. При выборе врача подгружаем типы приема, адреса, календарь ---
        doctorSelect.addEventListener('change', async () => {
            const doctorId = doctorSelect.value;
            typeSelect.innerHTML = '<option value="">Выберите</option>';
            addressSelect.innerHTML = '<option value="">Выберите</option>';
            dateInput.value = '';
            dateInput.disabled = true;
            timeSelect.innerHTML = '<option value="">Выберите</option>';
            timeSelect.disabled = true;

            if (!doctorId) return;

            // 3.1 Подгружаем типы приема
            const respType = await fetch(`/api/doctor_types.php?doctor=${doctorId}`);
            const types = await respType.json();
            types.forEach(t => {
                const opt = document.createElement('option');
                opt.value = t.id;
                opt.textContent = t.name;
                typeSelect.appendChild(opt);
            });

            // 3.2 Подгружаем адреса
            const respAddr = await fetch(`/api/doctor_addresses.php?doctor=${doctorId}`);
            const addresses = await respAddr.json();
            addresses.forEach(a => {
                const opt = document.createElement('option');
                opt.value = a.id;
                opt.textContent = a.name;
                addressSelect.appendChild(opt);
            });

            // 3.3 Подгружаем календарь врача
            const respCal = await fetch(`/api/doctor-calendar.php?doctor=${doctorId}`);
            doctorCalendar = await respCal.json();

            if (doctorCalendar.length > 0) {
                dateInput.disabled = false;
            }
        });

        // --- 4. При выборе даты подгружаем доступные слоты ---
        dateInput.addEventListener('change', () => {
            const selectedDate = dateInput.value;
            timeSelect.innerHTML = '<option value="">Выберите</option>';

            if (!selectedDate) return;

            const daySlots = doctorCalendar.find(d => d.date === selectedDate);
            if (daySlots && daySlots.times.length > 0) {
                daySlots.times.forEach(t => {
                    const opt = document.createElement('option');
                    opt.value = t;
                    opt.textContent = t;
                    timeSelect.appendChild(opt);
                });
                timeSelect.disabled = false;
            } else {
                const opt = document.createElement('option');
                opt.textContent = 'Нет свободных слотов';
                opt.disabled = true;
                timeSelect.appendChild(opt);
                timeSelect.disabled = true;
            }
        });

        // --- 5. Отправка формы ---
        document.getElementById('appointment-form').addEventListener('submit', async e => {
            e.preventDefault();

            const formData = new FormData(e.target);
            const data = Object.fromEntries(formData.entries());

            try {
                const resp = await fetch('/api/book.php', {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(data)
                });
                const result = await resp.json();
                alert(result.success ? 'Запись создана!' : 'Ошибка при записи');
            } catch(err) {
                console.error(err);
                alert('Ошибка при записи');
            }
        });

    });
</script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
