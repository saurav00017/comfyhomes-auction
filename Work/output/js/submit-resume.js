document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".job-manager-resume-form");
    const submitter = document.querySelector("#submit_application_button");
    // const formHandlerUrl = `${window.location.origin}/parsers/form-resume-handler.php`;
    const formHandlerUrl = "../../../parsers/form-resume-handler.php";

    form && form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form's default submission

        // Gather and validate form data
        const formData = new FormData(form);
        const errors = [];

        // Required fields
        const requiredFields = [
            "resume",
        ];

        // Loop through required fields to validate
        requiredFields.forEach(field => {
            const input = form.querySelector(`#${field}`);
            if (!input || !input.value || (input.type === "file" && input.files.length === 0)) {
                errors.push(`${field.replace(/-/g, ' ')} is required.`);
            }
        });

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
        submitter.value = "Submitting...";
        fetch(formHandlerUrl, {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => { 
                if (data.alert === 'success') { 
                    alert("Resume submitted successfully!");
                    form.reset(); 
                } else {
                    alert("Failed to submit application: " + data.message);
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