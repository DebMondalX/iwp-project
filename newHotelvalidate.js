function validation() {
  const name = document.getElementById("name").value;
  var namePattern = /[A-Z][a-z]*/;
  if (!name.match(namePattern)) {
    const nameError = document.getElementById("nameerror");
    nameError.innerHTML = "Name should start with a capital letter.";
    nameError.style.border = "1px solid red";
    return false;
  }
  const phone = document.getElementById("phone").value;
  var phonePattern = /[0-9]{10}$/;
  if (!phone.match(phonePattern)) {
    const phoneError = document.getElementById("nameerror");
    phoneError.innerHTML = "Phone number should be of 10 digits .";
    phoneError.style.border = "1px solid red";
    return false;
  }
  const hotelType = document.getElementById("HotelType").value;
  if (hotelType == "none") {
    const typeError = document.getElementById("nameerror");
    typeError.innerHTML = "Choose a hotel type";
    typeError.style.border = "1px solid red";
    return false;
  }

  //include email validation or not?
  // const patternemail =
  //   /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  // const email = document.getElementById("email").value;
  // if (!email.match(patternemail)) {
  //   typeError.innerHTML = "input a valid email.";
  //   typeError.style.border = "1 px solid red";
  //   return false;
  // }
  const pass = document.getElementById("passwordfirst").value;
  const pattern = /(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).{8}/;
  if (!pass.match(pattern)) {
    const passError = document.getElementById("nameerror");
    passError.innerHTML =
      "<ul> <li>at least one uppercase letter </li><li>at least one lowercase letter</li> <li> at least one digit </li><li>at least one special character</li><li> Password length: 8 characters </li></ul>.";
    return false;
  }
  const confpass = document.getElementById("password").value;
  if (confpass != pass) {
    const matchError = document.getElementById("nameerror");
    matchError.innerHTML = "Passwords do not match.";
    return false;
  }
  alert("all correct!");
  return true;
}
