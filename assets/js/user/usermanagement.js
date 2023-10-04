$(document).ready(function () {
  var user_id = "";

  // Send an AJAX request to the server to get the user ID
  $.ajax({
    type: "GET",
    url: "../pages/auth/get_user_id.php", // Replace with the actual path to your PHP script
    dataType: "json",
    success: function (response) {
      if (response.user_id !== null) {
        // User is authenticated, and user_id is available in response
        user_id = response.user_id;
      } else {
        // User is not authenticated or user_id is not available
        console.log("User is not authenticated.");
      }
    },
    error: function (xhr, status, error) {
      // Handle errors here
      console.error("Error:", error);
    },
  });

  $("#btnSave").click(function () {
    const countrySelect = document.getElementById("countrySelect");
    const countryid = countrySelect.value;
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var phoneno = $("#phoneno").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var confirmpassword = $("#confirmpassword").val();
    var address = $("#address").val();

    // const image = document.getElementById("image");

    // Input validation
    if (firstname === "") {
      $("#add-user-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter First Name",
      });
    } else if (lastname === "") {
      $("#add-user-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Select Category",
      });
    } else if (phoneno === "") {
      $("#add-user-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Phone No",
      });
    } else if (email === "") {
      $("#add-user-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter email",
      });
    } else if (password === "") {
      $("#add-user-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Password",
      });
    } else if (confirmpassword === "") {
      $("#add-user-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Confirm Password",
      });
    } else if (password !== confirmpassword) {
      $("#add-user-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Password Mismatch",
      });
    } else if (address === "") {
      $("#add-user-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Address",
      });
    } else if (countryid === "0") {
      $("#add-user-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Select Country",
      });
    }
    else {
      $.ajax({
        type: "POST",
        url: "../pages/user/usermanagement.php",
        data: {
          firstname: firstname,
          lastname: lastname,
          phoneno: phoneno,
          email: email,
          password: password,
          address: address,
          countryid: countryid,
          user_id: user_id,
        },
        success: function (response) {
          $("#add-user-modal").modal("toggle");
          if (response === "success") {
            Swal.fire({
              icon: "success",
              title: "Success",
              text: "User added successfully",
            });

            // Clear form fields after successful submission
            $("#firstname").val("");
            $("#lastname").val("");
            $("#phoneno").val("");
            $("#email").val("");
            $("#password").val("");
            $("#confirmpassword").val("");
            $("#address").val("");
            $("#image").val(""); // Reset the file input
            $("#countrySelect").val("0"); // Reset the country select
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "An error occurred while saving the data.",
            });
          }
        },
        error: function (xhr, status, error) {
          // Handle errors here
          console.error("Error:", error);
        },
      });
    }
  });

  $(".updateuserpws").click(function () {
    var userId = $(this).data("id");
    $("#pwsUpdate").click(function () {
      var pws = $("#pws").val();
      var conpws = $("#conpws").val();

      if (pws === "") {
        $("#pass-reset-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Password",
        });
      } else if (conpws === "") {
        $("#pass-reset-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Confirm Password",
        });
      } else if (pws !== conpws) {
        $("#pass-reset-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Password Mismatch",
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../pages/user/resetpassword.php",
          data: {
            pws: pws,
            userId: userId,
          },
          success: function (response) {
            $("#pass-reset-modal").modal("toggle");
            if (response === "success") {
              Swal.fire({
                icon: "success",
                title: "Success",
                text: "successfully updated",
              });
              $("#pws").val("");
              $("#conpws").val("");
            } else {
              Swal.fire({
                icon: "error",
                title: "Error",
                text: "An error occurred while saving the data.",
              });
            }
          },
          error: function (xhr, status, error) {
            // Handle errors here
            console.error("Error:", error);
          },
        });
      }
    });
  });

  $(".deleteuser").click(function () {
    var userId = $(this).data("id");

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!",
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: "../pages/user/deleteuser.php",
          method: "POST",
          data: { userId: userId },
          success: function (response) {
            if (response === "success") {
              $(this).closest("tr").remove();
              window.location.reload();
            } else {
              alert("Failed to delete the Category.");
            }
          },
          error: function () {
            alert("Error occurred while deleting the Category.");
          },
        });
      }
    });
  });
});
