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
    const phoneError = document.getElementById("phoneerror");
    phoneError.innerHTML = "Phone number should be of 10 digits only.";
    phoneError.style.border = "1px solid red";
    return false;
  }
  const hotelType = document.getElementById("HotelType").value;
  if (hotelType == "none") {
    const typeError = document.getElementById("typeerror");
    typeError.innerHTML = "Choose a hotel type";
    typeError.style.border = "1px solid red";
    return false;
  }
  const patternemail =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  const emailinput = document.getElementById("email").value;

  return false;
}
