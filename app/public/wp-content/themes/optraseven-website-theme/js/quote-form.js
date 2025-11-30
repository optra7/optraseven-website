
document.addEventListener("DOMContentLoaded", () => {

    document.getElementById('website-url').addEventListener('blur', function () {
        let v = this.value.trim();
        if (!v) return;

        // If it has no protocol, assume https
        if (!/^https?:\/\//i.test(v)) {
            this.value = 'https://' + v;
        }
    });

    // Initialize datepicker
    const dateInput = document.querySelector(".o7-get-the-quote__input-date");
    if (dateInput) {
        flatpickr(dateInput, {
            dateFormat: "Y-m-d",
        });
    }
});
