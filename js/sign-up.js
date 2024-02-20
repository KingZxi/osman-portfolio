//This file is used for processing the sign-up

//Storing information from the input fields
const firstName = document.getElementById("first-name");
const lastName = document.getElementById("last-name");
const email = document.getElementById("email");
const phoneNumber = document.getElementById("phone-number");
const message = document.getElementById("message");
const form = document.getElementById("contact");
const submitButton = document.querySelector("#submit");

//Creating a ul to store the errors array
let ul = document.createElement("ul");
const errorDiv = document.getElementById("error");

//Regexes used for validation
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
let phoneRegex = /^(\+44|0)7\d{9}$/;

//Errors array for storing error messages
let errors = [];

//This event is processed when the button is clicked
submitButton.addEventListener("click", (e) => {
  ul.innerHTML = "";
  errors.length = 0;

  //Validation
  if (firstName.value === "" || firstName.value == null) {
    errors.push("First name is required");
  }

  if (lastName.value === "" || lastName.value == null) {
    errors.push("First name is required");
  }

  if (!emailRegex.test(email)) {
    errors.push("Invalid email address");
  }

  if (!phoneRegex.test(phoneNumber)) {
    errors.push("Invalid phone number");
  }

  if (message.value === "" || message.value == null) {
    errors.push("Message is required");
  }

  if (message.length < 20) {
    errors.push("Message is too short");
  }

  //If errors exist, prevent default behaviour, list errors in ul element
  if (errors.length > 0) {
    e.preventDefault;

    errors.forEach((error) => {
      let li = document.createElement("li");
      li.innerText = error;
      ul.appendChild(li);
    });

    errorDiv.appendChild(ul);
  }

  console.log(errors);
  form.submit();
});
