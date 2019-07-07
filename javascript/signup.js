// Hide the span elements
$(".error_form").show();

// Setting error variables to false
var fname_error = false;
var lname_error = false;
var email_error = false;
var password_error = false;
var rpassword_error = false;

// initialize values
function initValues(){
    fname_error = false;
    lname_error = false;
    email_error = false;
    password_error = false;
    rpassword_error = false;  
} 

// Implementing the focus out method
$("#Firstname").focusout(function(){ checkFname(); });

$("#Lastname").focusout(function () { checkLname(); });

$("#Email").focusout(function () { checkEmail(); });

$("#Password").focusout(function () { checkPassword(); });

$("#Rpassword").focusout(function () { checkRPassword(); });

// Validating functions
function checkFname() {
    var Firstname = $("#Firstname").val();

    if (Firstname !== ""){
        $("#fname_error").hide();
    }else {
        $("#fname_error").html("First name is requied.");
        $("#fname_error").show();
        fname_error = true;
    }
}

function checkLname() {
    var Lastname = $("#Lastname").val();

    if (Lastname !== "") {
        $("#lname_error").hide();
    } else {
        $("#lname_error").html("Last name is requied.");
        $("#lname_error").show();
        fname_error = true;
    }
}

function checkEmail() {
    var pattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var Email = $("#Email").val();

    if (pattern.test(Email) && Email !== "") {
        $("#email_error").hide();
    }else {
        $("#email_error").html("Invalid Email address");
        $("#email_error").show();
        email_error = true;
    }
}

function checkPassword() {
    var Password = $("#Password").val();
    var password_length = $("#Password").val().length;

    if (Password !== "" && password_length >= 8) {
        $("#password_error").hide();
    }else {
        $("#password_error").html("Password should have atleast 8 characters");
        $("#password_error").show();
        password_error = true;
    }
}

function checkRPassword() {
    var Password = $("#Password").val();
    var R_Password = $("#Rpassword").val();

    if (Password === R_Password) {
        $("#rpassword_error").hide();
    } else {
        $("#rpassword_error").html("Passwords don't match");
        $("#rpassword_error").show();
        password_error = true;
    }
}

$("#signupform").submit(function(){
    initValues();
    checkFname(); 
    checkLname();
    checkEmail();
    checkPassword();
    checkRPassword();

    if (fname_error === false && lname_error === false && password_error === false &&  email_error === false && rpassword_error === false){
        alert("Sign Up Successful");
        return true;
    }else {
        alert("SignUp failed");
        return false;
    }
});

