const firstName = document.getElementById("first-name");
const lastName = document.getElementById("last-name");
const email = document.getElementById("email");
const phoneNumber = document.getElementById("phone-number");
const message = document.getElementById("message");
const form = document.getElementById("contact");
const submitButton = document.querySelector("#submit");
let ul = document.createElement("ul");

const errorDiv = document.getElementById("error");
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
let phoneRegex = /^(\+44|0)7\d{9}$/;

submitButton.addEventListener("click", (e) => {
  let errors = [];

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

  if (errors.length > 0) {
    e.preventDefault;

    errors.forEach((error) => {
      let li = document.createElement("li");
      li.innerText = error;
      ul.appendChild(li);
    });

    errorDiv.appendChild(ul);
  }

  form.submit();
});
