const form = document.getElementById("appointmentForm");

if (form) {
    form.addEventListener("submit", function(event) {
        const consent = document.getElementById("consent");

        if (!consent.checked) {
            event.preventDefault();
            alert("Please accept the consent checkbox before submitting.");
        }
    });
}