$(document).ready(function () {
  $("#insertForm").validate({
    rules: {
      name: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      phno: {
        required: true,
        digits: true,
        minlength: 10,
      },
      password: {
        required: true,
        minlength: 6,
      },
      dob: {
        required: true,
      },
      gender: {
        required: true,
      },
      time: {
        required: true,
      },
      age: {
        required: true,
        digits: true,
      },
      lang: {
        required: true,
      },
      description: {
        required: true,
      },
      "Hobbies[]": {
        required: true,
        minlength: 1,
      },
      image: {
        required: true,
      },
    },
    messages: {
      name: {
        required: "Please enter your name",
      },
      email: {
        required: "Please enter your email",
        email: "Please enter a valid email address",
      },
      phno: {
        required: "Please enter your phone number",
        digits: "Please enter only digits",
        minlength: "Please enter correct phone number. it contains(10 digit)",
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 6 characters long",
      },
      dob: {
        required: "Please enter your date of birth",
      },
      gender: {
        required: "Please select your gender",
      },
      time: {
        required: "Please select a preferred time",
      },
      age: {
        required: "Please enter your age",
        digits: "Please enter only digits",
      },
      lang: {
        required: "Please enter a language",
      },
      description: {
        required: "Please enter a description",
      },
      Hobbies: {
        required: "Please enter your hobbies",
      },
      image: {
        required: "Please upload a file",
      },
    },
    errorPlacement: function (error, element) {
      if (
        element.attr("type") == "radio" ||
        element.attr("type") == "checkbox"
      ) {
        error.insertBefore(element.first());
      } else {
        error.insertAfter(element);
      }
    },
  });
});

$("#test").click(function () {
  if ($("#insertForm").valid()) {
    $("#insertForm").submit();
  }
});
