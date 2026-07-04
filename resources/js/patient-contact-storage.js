const STORAGE_KEY = 'nano_patient_contact';

export function loadPatientContact() {
    try {
        const raw = localStorage.getItem(STORAGE_KEY);
        if (!raw) {
            return { name: '', mobile: '' };
        }

        const data = JSON.parse(raw);
        return {
            name: String(data?.name || '').trim(),
            mobile: String(data?.mobile || '').replace(/\D/g, '').slice(0, 10),
        };
    } catch {
        return { name: '', mobile: '' };
    }
}

export function savePatientContact({ name, mobile }) {
    try {
        const data = {
            name: String(name || '').trim(),
            mobile: String(mobile || '').replace(/\D/g, '').slice(0, 10),
        };

        if (!data.name && !data.mobile) {
            return;
        }

        localStorage.setItem(STORAGE_KEY, JSON.stringify(data));
    } catch {
        // Ignore storage errors (private mode, quota, etc.)
    }
}

export function applyPatientContactToInputs(nameEl, mobileEl, { overwrite = false } = {}) {
    const saved = loadPatientContact();

    if (nameEl && saved.name && (overwrite || !nameEl.value.trim())) {
        nameEl.value = saved.name;
    }

    if (mobileEl && saved.mobile && (overwrite || !mobileEl.value.trim())) {
        mobileEl.value = saved.mobile;
    }
}

export function bindPatientContactPersistence(nameEl, mobileEl) {
    if (!nameEl && !mobileEl) {
        return function () {};
    }

    let saveTimer;

    function persistFromInputs() {
        savePatientContact({
            name: nameEl ? nameEl.value : '',
            mobile: mobileEl ? mobileEl.value : '',
        });
    }

    function scheduleSave() {
        clearTimeout(saveTimer);
        saveTimer = setTimeout(persistFromInputs, 400);
    }

    [nameEl, mobileEl].forEach(function (el) {
        if (!el) return;
        el.addEventListener('input', scheduleSave);
        el.addEventListener('blur', persistFromInputs);
    });

    return persistFromInputs;
}

window.NanoPatientContact = {
    load: loadPatientContact,
    save: savePatientContact,
    apply: applyPatientContactToInputs,
    bind: bindPatientContactPersistence,
};
