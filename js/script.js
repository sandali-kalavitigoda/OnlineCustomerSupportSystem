function submit() {
    alert("Your sign up request is pending");
}

function checkValidations() {

    if (document.form.firstname.value == "") {
        alert("Please provide your First Name!");
        document.form.firstname.focus();
        return false;
    }

    if (document.form.lastname.value == "") {
        alert("Please provide your Last Name!");
        document.form.lastname.focus();
        return false;
    }

    if (document.form.emailAddress.value == "") {
        alert("Please provide your Email!");
        document.form.emailAddress.focus();
        return false;
    }

    if (document.form.username.value == "") {
        alert("Please provide your User Name!");
        document.form.username.focus();
        return false;
    }

    if (document.form.address.value == "") {
        alert("Please provide your Address!");
        document.form.address.focus();
        return false;
    }

    if (document.form.password.value !== document.form.rpassword.value) {
        alert("Provided password does not match");
        document.form.rpassword.focus();
        return false;
    }

    if (!document.getElementById("agreement").checked) {
        alert("Please sign the agreement");
        document.form.agreement.focus();
        return false;
    }

    this.submit();
    return (true);
}

function submitSupport() {
    
    if (document.supportForm.message.value == "") {
        alert("Please provide your Message");
        document.form.message.focus();
        return false;
    }

    if (document.supportForm.email.value == "") {
        alert("Please provide your Email");
        document.form.email.focus();
        return false;
    }

    if (document.supportForm.contact.value == "") {
        alert("Please provide your contact number");
        document.form.contact.focus();
        return false;
    }

    alert("Your message submitted for review");

    return (true);
}
