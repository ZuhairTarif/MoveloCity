function transporterformcheck() {
    var name = document.getElementById("name").value;
    var nid = document.getElementById("nid").value;
    var model = document.getElementById("model").value;
    var tnumber = document.getElementById("tnumber").value;
    var lid = document.getElementById("lid").value;
    var led = document.getElementById("led").value;
    var uname = document.getElementById("uname").value;
    var pass = document.getElementById("pass").value;

    if (name.length < 4) {
        document.getElementById("message").innerHTML = "Name is too small. Please enter full name";
        return false;
    }
    if (nid.length < 10) {
        document.getElementById("message").innerHTML = "Please enter 10 digit NID number";
        return false;
    }
    if (model == "") {
        document.getElementById("message").innerHTML = "Please enter your transports model";
        return false;
    }
    if (tnumber == "") {
        document.getElementById("message").innerHTML = "Please enter your transports number properly";
        return false;
    }
    if (lid == "") {
        document.getElementById("message").innerHTML = "Please enter your license issue date";
        return false;
    }
    if (led == "") {
        document.getElementById("message").innerHTML = "Please enter your license expire date";
        return false;
    }
    if (uname.length < 4) {
        document.getElementById("message").innerHTML = "Please enter atleast 4 characters username";
        return false;
    }
    if (pass.length < 4) {
        document.getElementById("message").innerHTML = "Please enter atleast 4 characters password";
        return false;
    }
    if (document.getElementById("2years").checked == false && document.getElementById("3-5years").checked == false && document.getElementById(">5years").checked == false) {
        document.getElementById("message").innerHTML = "Please select a radio button";
        return false;
    }
    if (document.getElementById("availability").checked == false) {
        document.getElementById("message").innerHTML = "Please select a check box";
        return false;
    }
}