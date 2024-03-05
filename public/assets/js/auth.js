function closeAllModals(){
    $('.modal').modal('hide');
}
$(document).on("click", ".signUpBtn", function () {
    closeAllModals();
    $(".signUpModal").modal('show');
});

$(document).on("click", ".loginBtn", function () {
    closeAllModals();
    $(".loginModal").modal('show');
});

$(document).on("click", ".changePasswordBtn", function () {
    closeAllModals();
    $(".changePasswordModal").modal('show');
});

$(document).on("submit", ".createAccountForm", async function (e) {
    e.preventDefault();
    const formData = $(".createAccountForm").serialize();
    $(this).find(':submit').attr('disabled', true);

    if (validateRegisterForm()) {
        try {
            const response = await createAccount(formData);
            if (response.status) {
                window.location.href = `${baseUrl}/customer/dashboard`;
            } else {
                $(this).find(':submit').attr('disabled', false);
                displayErrors('signUp', response);
            }
            console.log(response);
        } catch (error) {
            $(this).find(':submit').attr('disabled', false);
            if (error.responseJSON) {
                displayErrors('signUp', error.responseJSON);
            } else {
                console.error(error);
            }
        }
    }
});

$(document).on("submit", ".loginForm", async function (e) {
    e.preventDefault();
    const formData = $(".loginForm").serialize();
    $(this).find(':submit').attr('disabled', true);

    if (validateLoginForm()) {
        try {
            const response = await login(formData);
            if (response.status) {
                window.location.href = `${baseUrl}/customer/dashboard`;
            } else {
                $(this).find(':submit').attr('disabled', false);
                displayErrors('login', response);
            }
            console.log(response);
        } catch (error) {
            $(this).find(':submit').attr('disabled', false);
            if (error.responseJSON) {
                displayErrors('login', error.responseJSON);
            } else {
                console.error(error);
            }
        }
    }
});

$(document).on("submit", ".changePasswordForm", async function (e) {
    e.preventDefault();
    const formData = $(".changePasswordForm").serialize();
    $(this).find(':submit').attr('disabled', true);

    if (validateChangePasswordForm()) {
        try {
            const response = await login(formData);
            if (response.status) {
                window.location.href = `${baseUrl}/customer/dashboard`;
            } else {
                $(this).find(':submit').attr('disabled', false);
                displayErrors('login', response);
            }
            console.log(response);
        } catch (error) {
            $(this).find(':submit').attr('disabled', false);
            if (error.responseJSON) {
                displayErrors('login', error.responseJSON);
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

function validateLoginForm() {
    let isValid = true;

    // Reset error messages
    $(".invalid-feedback").text("");

    // Validate email
    const email = $("#loginEmail").val();
    if (!isValidEmail(email)) {
        $("#loginEmail-error").text("Enter a valid email address").show();
        isValid = false;
    }

    // Validate password
    const password = $("#loginPassword").val();
    if (password.length < 8) {
        $("#loginPassword-error").text("Password must be at least 8 characters").show();
        isValid = false;
    }

    return isValid;
}

function validateChangePasswordForm() {
    let isValid = true;

    // Reset error messages
    $(".invalid-feedback").text("");


    // Validate password
    const password = $("#password").val();
    if (password.length < 8) {
        $("#password-error").text("Password must be at least 8 characters").show();
        isValid = false;
    }

    // Validate password
    const new_password = $("#new_password").val();
    if (password.length < 8) {
        $("#new_password-error").text("New password must be at least 8 characters").show();
        isValid = false;
    }

    // Validate password
    const confirm_password = $("#confirm_password").val();
    if (password.length < 8) {
        $("#confirm_password-error").text("Confirm password must be at least 8 characters").show();
        isValid = false;
    }

    if (new_password != confirm_password) {
        $("#new_password-error").text("The password did not match").show();
        $("#confirm_password-error").text("The password did not match").show();
        isValid = false;
    }

    return isValid;
}

function displayErrors(module, response) {
    const errorContainer = $(`#${module}-errorContainer`);
    const errorList = $(`#${module}-errorList`);

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

function login(formData) {
    return Promise.resolve($.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "POST",
        url: baseUrl + "/login",
        data: formData,
    }));
}