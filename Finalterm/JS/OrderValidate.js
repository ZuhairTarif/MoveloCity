function orderformcheck() {
    var name = document.getElementById("name").value;
    var nid = document.getElementById("nid").value;
    
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
    
    if (uname.length < 4) {
        document.getElementById("message").innerHTML = "Please enter atleast 4 characters username";
        return false;
    }
    if (pass.length < 4) {
        document.getElementById("message").innerHTML = "Please enter atleast 4 characters password";
        return false;
    }
    
}