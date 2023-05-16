function paymentformcheck() {
    var name = document.getElementById("name").value;
    var bkash = document.getElementById("bkash").value;
    
    var otp = document.getElementById("otp").value;
    

    if (name.length < 4) {
        document.getElementById("message").innerHTML = "Name is too small. Please enter full name";
        return false;
    }
    if (bkash.length < 11) {
        document.getElementById("message").innerHTML = "Please enter 11 digit Bkash number";
        return false;
    }
    
    if (otp.length < 3) {
        document.getElementById("message").innerHTML = "3 digit OTP is required";
        return false;
    }
    
    
}