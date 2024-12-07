
function validateForm() {
    let isValid = true;

    // Clear previous error messages
    document.getElementById("name-error").innerHTML = "";
    document.getElementById("email-error").innerHTML = "";
    document.getElementById("password-error").innerHTML = "";
    document.getElementById("contact-error").innerHTML = "";
    document.getElementById("address-error").innerHTML = "";

    // Validate Full Name
    const name = document.forms["RegForm"]["Name"].value;
    if (name == "" || !/^[a-zA-Z\s]+$/.test(name)) {
        document.getElementById("name-error").innerHTML = "Please enter a valid name.";
        isValid = false;
    }

    // Validate Email
    const email = document.forms["RegForm"]["EMail"].value;
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (email == "" || !emailPattern.test(email)) {
        document.getElementById("email-error").innerHTML = "Please enter a valid email address.";
        isValid = false;
    }

    // Validate Password
    const password = document.forms["RegForm"]["Password"].value;
    if (password == "" || password.length < 6) {
        document.getElementById("password-error").innerHTML = "Password must be at least 6 characters.";
        isValid = false;
    }

    // Validate Contact Number
    const contact = document.forms["RegForm"]["contact"].value;
    if (contact == "" || !/^\d{10}$/.test(contact)) {
        document.getElementById("contact-error").innerHTML = "Please enter a valid 10-digit contact number.";
        isValid = false;
    }

    // Validate Address
    const address = document.forms["RegForm"]["Address"].value;
    if (address == "") {
        document.getElementById("address-error").innerHTML = "Please enter your address.";
        isValid = false;
    }

    return isValid;
}
