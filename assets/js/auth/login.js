$(document).ready(function () {
  $("#loginBtn").click(function () {
    var email = $("#email").val();
    var password = $("#password").val();

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter a Valid Email Address",
      });
      return;
    }

    if (password === "") {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter your Password",
      });
      return;
    }

    $.ajax({
      type: "POST",
      url: "../pages/auth/login.php",
      data: {
        email: email,
        password: password,
      },
      success: function (response) {
        if (response === "success") {
          window.location.href = "../dashboard";
        } else {
          Swal.fire({
            icon: "error",
            title: "Login failed",
            text: "Please check your credentials.",
          });
        }
      },
      error: function (xhr, status, error) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "An error occurred while processing your request. Please try again later.",
        });
      }
    });
  });
});
