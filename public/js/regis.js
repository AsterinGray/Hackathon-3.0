const changeFile = (e) => {
  var fileName = e.files[0].name;
  $('label[for="' + e.id + '"]').html(fileName);
  if(!fileName.includes(".jpg") && !fileName.includes(".png")){
    $(e).next("p").text("File type must be jpg or png");
    $(e)[0].setCustomValidity("Invalid File type");
  }else{
    $(e).next("p").text("");
    $(e)[0].setCustomValidity("");
  }
}

const validateName = (e) => {
  const len = $(e).val().length;
  if (len < 5 || len > 12) {
    $(e)[0].setCustomValidity("Group name lenght must be between 5 and 12");
    $(e).next("p").text("Group name lenght must be between 5 and 12");
  } else {
    $(e)[0].setCustomValidity("");
    $(e).next("p").text("");
  }
};

const validateConfirmPass = () => {
  if ($("#password").val() === $("#confirm-password").val()) {
    $("#confirm-password")[0].setCustomValidity("");
    $("#confirm-password").next(".invalid-feedback").text("");
  } else {
    $("#confirm-password")[0].setCustomValidity("Passowrd must match");
    $("#confirm-feedback").text("Password doesn't match");
  }
};

const validatePass = () => {
  const regex = new RegExp(
    "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*d)[a-zA-Z0-9d]{8,}$"
  );
  if (!$("#password").val().match(regex)) {
    $("#password")[0].setCustomValidity(
      "Password must contain at least 8 characters, including uppercase, lowercase and number"
    );
    $("#pass-feedback").text(
      "Password must contain at least 8 characters, including uppercase, lowercase and number"
    );
  } else {
    $("#password")[0].setCustomValidity("");
    $("#pass-feedback").text("");
  }
};

const validateEmail = (email) => {
  const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (email.value.match(regex)) {
    $(email)[0].setCustomValidity("");
    $(email).next("p").text("");
  } else {
    $(email)[0].setCustomValidity("Invalid Email");
    $(email).next("p").text("Invalid Email");
  }
};

const validatePhone = (e) => {
  const len = $(e).val().length;
  if (len < 10) {
    $(e)[0].setCustomValidity("Invalid Phone Number");
    $(e).next("p").text("Invalid Phone Number");
  } else {
    $(e)[0].setCustomValidity("");
    $(e).next("p").text("");
  }
};