$(document).ready(function () {
  $("#addempbtn").click(function () {
    const selectdep = document.getElementById("cmbDepartment");
    const selectdesignation = document.getElementById("cmbDes");
    const selectsubdep = document.getElementById("cmbSubdep");

    var firstname = $("#firstname").val();
    const depid = selectdep.value;
    const desid = selectdesignation.value;
    var phone = $("#phone").val();
    var joingdate = $("#joingdate").val();
    var address = $("#address").val();
    var lastname = $("#lastname").val();
    var dob = $("#dob").val();
    const subdepid = selectsubdep.value;
    var email = $("#email").val();
    var leavingdate = $("#leavingdate").val();

    // const image = document.getElementById("image");

    // Input validation
    if (firstname === "") {
      $("#add-employee-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter First Name",
      });
    } else if (depid === "0") {
      $("#add-employee-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Select Department",
      });
    } else if (desid === "0") {
      $("#add-employee-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Select Designation",
      });
    } else if (phone === "") {
      $("#add-employee-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Phone no",
      });
    } else if (joingdate === "") {
      $("#add-employee-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Select Joing Date",
      });
    } else if (dob === "") {
      $("#add-employee-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please select Date of Birth",
      });
    } else if (subdepid === "0") {
      $("#add-employee-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Select Sub Department",
      });
    } else if (email === "") {
      $("#add-employee-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Email",
      });
    } else if (leavingdate === "") {
      $("#add-employee-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Select Leaving Date",
      });
    } else {
      $.ajax({
        type: "POST",
        url: "../pages/employee/addemp.php",
        data: {
            firstname:firstname,
            depid:depid,
            desid:desid,
            phone:phone,
            joingdate:joingdate,
            address:address,
            lastname:lastname,
            dob:dob,
            subdepid:subdepid,
            email:email,
            leavingdate:leavingdate
        },
        success: function (response) {
          $("#add-employee-modal").modal("toggle");
          if (response === "true\r\n\r\n") {
            Swal.fire({
              icon: "success",
              title: "Success",
              text: "Employee added successfully",
            });

            $("#firstname").val("");
            $("#depid").val("0");
            $("#desid").val("0");
            $("#phone").val("");
            $("#joingdate").val("");
            $("#address").val("");
            $("#lastname").val("");
            $("#dob").val("");
            $("#subdepid").val("0");
            $("#email").val("");
            $("#leavingdate").val("");
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

  

  $("#editemp").click(function () {
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

  $("#deleteemp").click(function () {
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
