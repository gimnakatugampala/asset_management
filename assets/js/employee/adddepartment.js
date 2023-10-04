$(document).ready(function () {
  $("#addDepartment").click(function () {
    var depname = $("#depname").val();
    var depdescription = $("#depdescription").val();

    if (depname === "") {
      $("#edit-department-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Department Name",
      });
    } else {
      $.ajax({
        type: "POST",
        url: "../pages/employee/adddepartment.php",
        data: {
          depname: depname,
          depdescription: depdescription,
        },
        success: function (response) {
          $("#add-department-modal").modal("toggle");
          if (response === "success") {
            Swal.fire({
              icon: "success",
              title: "Success",
              text: "Department added successfully",
            });
            $("#depname").val("");
            $("#depdescription").val("");
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

  $(".editdepartment").click(function () {
    var userId = $(this).data("id");

    $.ajax({
        url: '../pages/employee/get_department_data.php',
        method: 'POST',
        data: { user_id: userId },
        dataType: 'json',
        success: function(data) {
            if (data) {
                $("#editdepname").val(data.depname);
                $("#editdepdescription").val(data.description);
            } else {
                $("#editdepname").val("");
              $("#editdepdescription").val("");
            }
        },
        error: function() {
            alert('Error fetching data.');
        }
    });

    $("#editDepartmentbtn").click(function () {
      var depname = $("#editdepname").val();
      var depdescription = $("#editdepdescription").val();

      if (depname === "") {
        $("#edit-department-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Department Name",
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../pages/employee/editdepartment.php",
          data: {
            depname: depname,
            depdescription: depdescription,
            userId: userId,
          },
          success: function (response) {
            $("#edit-department-modal").modal("toggle");
            if (response === "success") {
              Swal.fire({
                icon: "success",
                title: "Success",
                text: "Department edited successfully",
              });
              $("#editdepname").val("");
              $("#editdepdescription").val("");
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

  $(".deletedepartment").click(function () {
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
          url: "../pages/employee/deletedepartment.php",
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
