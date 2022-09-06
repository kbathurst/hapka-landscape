"use strict";
$(document).ready( () => {


    //handler for click event of submit button
    $("#contact_form").submit( event => {
        let isValid = true;

        //validate name entry
        const name = $("#name").val().trim();
        if (name == "") {
            $("#name").next().text("This field is required");
            isValid = false;
        } else {
            $("#name").next().text("");
        }
        $("#name").val(name);


        //validate the email entry with regular expression
        const emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,7}\b/;
        const email = $("#email").val().trim();
        if (email == "") {
            $("#email").next().text("This field is required.");
            isValid = false;
        } else if ( !emailPattern.test(email) ) {
            $("#email").next().text("Must be a valid email address.");
            isValid = false;
        } else {
            $("#email").next().text("");
        }
        $("#email").val(email);

        //validate phone number with regular expression
        const phonePattern = /^\d{3}-\d{3}-\d{4}$/;
        const phone = $("#phone").val().trim();
        if (phone == "") {
            $("#phone").next().text("This field is required");
            isValid = false;
        } else if ( !phonePattern.test(phone) ) {
            $("#phone").next().text("Use 999-999-9999 format.");
            isValid = false;
        } else {
            $("#phone").next().text("");
        }
        $("#phone").val(phone);

        //validate message entry
        if ( !$("#message").attr("disabled")) {
            const message = $("#message").val().trim();
            if (message == "") {
                $("#message").next().text("This field is required.");
                isValid = false;
            } else {
                $("#message").next().text("");
            }
            $("#message").val(message);
        }

        // prevent the submission of the form if any entries are invalid
        if (isValid == false) {
            event.preventDefault();
        }
    });
});