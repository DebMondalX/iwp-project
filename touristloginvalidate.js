function validate() {
    var user = document.getElementById("email").value;
    var password = document.getElementById("pswd").value;
    if (user != null && password != null) return true;
  }