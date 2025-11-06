document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("enquiry-form");
    if (!form) return;

    const resultBox = document.querySelector(".result-message");

    function showFieldError(fieldName, message) {
        const field = form.querySelector(`[name="${fieldName}"]`);
        if (field) {
            field.classList.add("input-error");
            const errorEl = field.parentElement.querySelector(".error");
            if (errorEl) errorEl.textContent = message;
        }
    }

    function clearFieldError(field) {
        field.classList.remove("input-error");
        const errorEl = field.parentElement.querySelector(".error");
        if (errorEl) errorEl.textContent = "";
    }

    function validateForm() {
        let valid = true;

        // Base required fields 
        const requiredFields = {
            name: "Please enter your full name",
            email: "Please enter a valid email",
            phone: "Please enter your phone number",
            location: "Please enter your location",
            query_type: "Please enter query type",
            message: "Please enter your message",
            terms: "You must agree to the terms."
        };

        // Check required text fields
        Object.keys(requiredFields).forEach(key => {
            const field = form.querySelector(`[name="${key}"]`);
            if (!field || field.value.trim() === "") {
                showFieldError(key, requiredFields[key]);
                valid = false;
            } else {
                clearFieldError(field);
            }
        });

        // ✅ Email validation
        const emailField = form.querySelector("[name='email']");
        if (emailField && emailField.value.trim() !== "" && !/^\S+@\S+\.\S+$/.test(emailField.value)) {
            showFieldError("email", "Invalid email format");
            valid = false;
        }

        // ✅ Phone validation
        const phoneField = form.querySelector("[name='phone']");
        if (phoneField && phoneField.value.trim() !== "") {
            if (!/^[0-9+\s()-]{6,15}$/.test(phoneField.value.trim())) {
                showFieldError("phone", "Enter a valid phone number");
                valid = false;
            } else {
                clearFieldError(phoneField);
            }
        } else {
            showFieldError("phone", "Please enter your phone number");
            valid = false;
        }

        // ✅ Terms checkbox validation
        const termsField = form.querySelector("[name='terms']");
        if (termsField && !termsField.checked) {
            const errorEl = termsField.parentElement.querySelector(".error");
            if (errorEl) errorEl.textContent = "You must agree to the terms.";
            valid = false;
        } else if (termsField) {
            const errorEl = termsField.parentElement.querySelector(".error");
            if (errorEl) errorEl.textContent = "";
        }

        return valid;
    }

    // 🔥 Live inline error clearing (input + textarea + checkbox)
    form.querySelectorAll("input, textarea, select").forEach(field => {
        field.addEventListener("input", function () {
            clearFieldError(this);
        });
        field.addEventListener("change", function () {
            clearFieldError(this);
        });
    });

    // ✅ AJAX submission
    form.addEventListener("submit", function (e) {
        e.preventDefault();

        if (!validateForm()) return;

        const formData = new FormData(form);
        formData.append('action', 'submit_enquiry');

        fetch(enquiry_ajax.url, {
            method: "POST",
            body: formData
        })
            .then(res => res.json())
            .then(data => {
                if (resultBox) {
                    resultBox.style.display = "block";
                    resultBox.textContent = data.success
                        ? "Thank you! Your enquiry has been submitted."
                        : data.data || "Something went wrong. Please try again.";
                    resultBox.style.color = data.success ? "#28a745" : "#dc3545";
                }

                if (data.success) form.reset();
            })
            .catch(() => {
                if (resultBox) {
                    resultBox.style.display = "block";
                    resultBox.textContent = "Error submitting form. Try again.";
                    resultBox.style.color = "#dc3545";
                }
            });

    });
});
