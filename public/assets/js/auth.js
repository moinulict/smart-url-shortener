$(document).on("click", ".signUpBtn", function () {
    $(".signUpModal").modal('show');
});

$(document).on("submit", ".createAccountForm", async function (e) {
    e.preventDefault();
    const formData = $(".createAccountForm").serialize();
    if (validateRegisterForm()) {
        try {
            const response = await createAccount(formData);
            if (response.status) {

            } else {
                displayErrors(response);
            }
            console.log(response);
        } catch (error) {
            if (error.responseJSON) {
                displayErrors(error.responseJSON);
            } else {
                console.error(error);
            }
        }
    }
});

function isValidEmail(email) {
    // Regular expression for a valid email address
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validateRegisterForm() {
    let isValid = true;

    // Reset error messages
    $(".invalid-feedback").text("");

    // Validate name
    const name = $("#name").val();
    if (name.length < 3) {
        $("#name-error").text("Name must be at least 3 characters").show();
        isValid = false;
    }

    // Validate email
    const email = $("#exampleInputEmail1").val();
    if (!isValidEmail(email)) {
        $("#email-error").text("Enter a valid email address").show();
        isValid = false;
    }

    // Validate password
    const password = $("#exampleInputPassword1").val();
    if (password.length < 8) {
        $("#password-error").text("Password must be at least 8 characters").show();
        isValid = false;
    }

    return isValid;
}

function displayErrors(response) {
    const errorContainer = $("#error-container");
    const errorList = $("#error-list");

    // Clear previous errors
    errorList.empty();

    // Display the error container
    errorContainer.show();
    if (response.errors) {
        // If there are validation errors, display them
        $.each(response.errors, function (field, messages) {
            $.each(messages, function (index, message) {
                errorList.append('<li>' + message + '</li>');
            });
        });
    } else if (!response.status && response.message) {
        // If there's a general error, display the custom message
        errorList.append('<li>' + response.message + '</li>');
    }
}

function createAccount(formData) {
    return Promise.resolve($.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "POST",
        url: baseUrl + "/registerAccount",
        data: formData,
    }));
}