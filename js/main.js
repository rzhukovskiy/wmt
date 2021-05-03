function validateForm(e) {
    email = document.feedback.email;
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(email.value.match(mailformat)) {
        message = document.feedback.message;
        if (message.value == "") {
            alert("Empty messages are not allowed!");
            message.focus();
            e.preventDefault();
            return false;
        }
        return true;
    } else {
        alert("You have entered an invalid email address!");
        email.focus();
        e.preventDefault();
        return false;
    }
}
