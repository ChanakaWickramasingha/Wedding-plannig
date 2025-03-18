function checkpass() {
    //alert("ok");
    var pass1 = document.getElementById('password').value;
    var pass2 = document.getElementById('confirmPassword').value;

    if (pass1 != pass2) {
        document.getElementById('span1').innerHTML = "please enter correct password!!";
    }

}
