var form = document.querySelector("form");
var errorContainer = document.querySelector(".contact__error");

form.addEventListener("submit", function (e) {
  e.preventDefault();

  var formData = new FormData(form);

  fetch("php/form-submission.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      //Clear the error container
      errorContainer.innerHTML = "";

      //Error displaying
      if (data.errors) {
        data.errors.forEach(function (error) {
          var errorMessage = document.createElement("div");
          errorMessage.classList.add("contact__error__message");
          errorMessage.innerHTML = "<p>" + error + "</p>";
          errorContainer.appendChild(errorMessage);
        });
      } else {
        var successMessage = document.createElement("div");
        successMessage.classList.add("contact__success__message");
        successMessage.innerHTML = "<p>" + data.success + "</p>";
        errorContainer.appendChild(successMessage);
      }
    });
});
