
document.addEventListener("DOMContentLoaded", () => {
    // Initialize datepicker
    const dateInput = document.querySelector(".o7-get-the-quote__input-date");
    if (dateInput) {
        flatpickr(dateInput, {
            dateFormat: "Y-m-d",
        });
    }
});
