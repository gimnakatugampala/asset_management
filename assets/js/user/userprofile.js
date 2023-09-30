$(document).ready(function () {
  var userId = "";
  $.ajax({
    type: "GET",
    url: "../pages/auth/get_user_id.php",
    dataType: "json",
    success: function (response) {
      if (response.user_id !== null) {
        userId = response.user_id;
      } else {
        console.log("User is not authenticated.");
      }
    },
    error: function (xhr, status, error) {
      console.error("Error:", error);
    },
  });

  $("#edituserprofile").click(function () {
    $.ajax({
      url: "../pages/user/get_userprofiledata.php",
      method: "POST",
      data: { user_id: userId },
      dataType: "json",
      success: function (data) {
        if (data) {
          $("#code").val(data.usercode);
          $("#firstname").val(data.firstname);
          $("#lastname").val(data.lastname);
          $("#phoneno").val(data.phoneno);
          $("#email").val(data.email);
          $("#address").val(data.address);
          $("#password").val(data.password);
          $("#confirmpassword").val(data.password);
        } else {
          $("#firstname").val("");
          $("#editcperson").val("");
          $("#lastname").val("");
          $("#phoneno").val("");
          $("#email").val("");
          $("#code").val("");
          $("#address").val("");
          $("#password").val("");
          $("#confirmpassword").val("");
        }
      },
      error: function () {
        alert("Error fetching data.");
      },
    });

    $("#editbtnsup").click(function () {
      const countrySelect = document.getElementById("countrySelect");
      const countryid = countrySelect.value;
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      var phoneno = $("#phoneno").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var confirmpassword = $("#confirmpassword").val();
      var address = $("#address").val();
      var code = $("#code").val();

      if (firstname === "") {
        $("#edit-user-profile-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter First Name",
        });
      } else if (lastname === "") {
        $("#edit-user-profile-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Select Category",
        });
      } else if (phoneno === "") {
        $("#edit-user-profile-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Phone No",
        });
      } else if (email === "") {
        $("#edit-user-profile-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter email",
        });
      } else if (password === "") {
        $("#edit-user-profile-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Password",
        });
      } else if (confirmpassword === "") {
        $("#edit-user-profile-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Confirm Password",
        });
      } else if (password !== confirmpassword) {
        $("#edit-user-profile-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Password Mismatch",
        });
      } else if (address === "") {
        $("#edit-user-profile-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Address",
        });
      } else if (countryid === "0") {
        $("#edit-user-profile-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Select Country",
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../pages/user/userprofileupdate.php",
          data: {
            firstname: firstname,
            lastname: lastname,
            phoneno: phoneno,
            email: email,
            password: password,
            address: address,
            countryid: countryid,
            code: code,
          },
          success: function (response) {
            $("#edit-user-profile-modal").modal("toggle");
            if (response === "success") {
              Swal.fire({
                icon: "success",
                title: "Success",
                text: "User Profile Updated successfully",
              });

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
  });

  $("#updateuserpwsup").click(function () {
    $("#pwsUpdate").click(function () {
      var pws = $("#pws").val();
      var conpws = $("#conpws").val();

      if (pws === "") {
        $("#reset-password-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Password",
        });
      } else if (conpws === "") {
        $("#reset-password-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Confirm Password",
        });
      } else if (pws !== conpws) {
        $("#reset-password-modal").modal("toggle");
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
            $("#reset-password-modal").modal("toggle");
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
});
