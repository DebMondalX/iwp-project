function validation() {
  const pass = document.getElementById("password").value;
  const pattern = /(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8,}/;
  if (!pass.match(pattern)) {
    const passError = document.getElementById("nameerror");
    passError.innerHTML =
      "<ul> <li>at least one uppercase letter </li><li>at least one lowercase letter</li> <li> at least one digit </li><li>at least one special character</li><li> Password length: 8 characters minimum </li></ul>.";
    return false;
  }
  return true;
}
