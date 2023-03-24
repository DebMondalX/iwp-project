function validate() {
    // Get form inputs
    var email = document.getElementsByName("email")[0].value;
    var fname = document.getElementsByName("fname")[0].value;
    var lname = document.getElementsByName("lname")[0].value;
    var psw = document.getElementsByName("psw")[0].value;
    var confirmPsw = document.getElementsByName("psw")[1].value;
  
    // Regular expressions for validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var nameRegex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    var passwordRegex = /(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,}/;
  
    // Validate inputs
    if (!emailRegex.test(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    if (!nameRegex.test(fname)) {
      alert("Please enter a valid first name.");
      return false;
    }
  
    if (!nameRegex.test(lname)) {
      alert("Please enter a valid last name.");
      return false;
    }
  
    if (!passwordRegex.test(psw)) {
      alert("Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one numberand one special character.");
      return false;
    }
  
    if (psw != confirmPsw) {
      alert("Passwords do not match.");
      return false;
    }
  
    return true;
  }
  