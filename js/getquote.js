"use strict";
$(document).ready( () => {

    

    //handler for click event of submit button
    $("#quote_form").submit( event => {
        let isValid = true;

        //validate first name entry
        const firstname = $("#firstname").val().trim();
        if (firstname == "") {
            $("$firstname").next().text("This field is required");
            isValid = false;
        } else {
            $("#firstname").next().text("");
        }
        $("#firstname").val(firstname);

        //validate last name entry
        const lastname = $("#lastname").val().trim();
        if (lastname == "") {
            $("$lastname").next().text("This field is required");
            isValid = false;
        } else {
            $("#lastname").next().text("");
        }
        $("#lastname").val(lastname);

        

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

        //validate the phone number entry with regular expression
        const phonePattern = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
        const phone = $("#phone").val().trim();
        if (phone == "") {
            $("#phone").next().text("This field is required.");
            isValid = false;
        } else if ( !phonePattern.test(phone) ) {
            $("#phone").next().text("Must be a valid phone number.");
            isValid = false;
        } else {
            $("#phone").next().text("");
        }
        $("#phone").val(phone);

        //validate the zip code entry with regular expression
        const zipPattern = /^\d{5}(-\d{4})?$/;
        const zip = $("#zip").val().trim();
        if (zip == "") {
            $("#zip").next().text("This field is required.");
            isValid = false;
        } else if ( !zipPattern.test(zip) ) {
            $("#zip").next().text("Must be a valid zip code.");
            isValid = false;
        } else {
            $("#zip").next().text("");
        }
        $("#zip").val(zip);


        //validate subject entry
        if ( !$("#subject").attr("disabled")) {
            const subject = $("#subject").val().trim();
            if (subject == "") {
                $("#subject").next().text("This field is required.");
                isValid = false;
            } else {
                $("#subject").next().text("");
            }
            $("#subject").val(subject);
        }

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