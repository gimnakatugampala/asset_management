$(document).ready(function () {
  const cmbDepartment = document.getElementById("cmbDepartment");
  const editcmbDepartment = document.getElementById("editcmbDepartment");

  $("#addsubDepartment").click(function () {
    const did = cmbDepartment.value;
    var subdepname = $("#subdepname").val();
    var subdepdescription = $("#subdepdescription").val();

    if (subdepname === "") {
      $("#add-subdepartment-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Sub Department Name",
      });
    } else if(did === "0") {
      $("#add-subdepartment-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Select Department",
      });
    } 
    else {
      $.ajax({
        type: "POST",
        url: "../pages/employee/subdepartment/addsubdepartment.php",
        data: {
          subdepname: subdepname,
          subdepdescription: subdepdescription,
          did:did
        },
        success: function (response) {
          $("#add-subdepartment-modal").modal("toggle");
          if (response === "success") {
            Swal.fire({
              icon: "success",
              title: "Success",
              text: "Sub Department added successfully",
            });
            $("#subdepname").val("");
            $("#subdepdescription").val("");
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

  $(".subdepedit").click(function () {
    var userId = $(this).data("id");
    var depId = ""

    $.ajax({
        url: '../pages/employee/subdepartment/get_sub_department_data.php',
        method: 'POST',
        data: { user_id: userId },
        dataType: 'json',
        success: function(data) {
            if (data) {
                $("#editsubdepname").val(data.subdepname);
                $("#editsubdepdescription").val(data.description);
            } else {
                $("#editsubdepname").val("");
              $("#editsubdepdescription").val("");
            }
        },
        error: function() {
            alert('Error fetching data.');
        }
    });

    $("#editsubDepartmentbtn").click(function () {
      var editsubdepname = $("#editsubdepname").val();
      var editsubdepdescription = $("#editsubdepdescription").val();
      const did = editcmbDepartment.value;

      if (subdepname === "") {
        $("#edit-subdepartment-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Sub Department Name",
        });
      }else if(did === "0") {
        $("#add-subdepartment-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Select Department",
        });
      }  
      else {
        $.ajax({
          type: "POST",
          url: "../pages/employee/subdepartment/editsubdepartment.php",
          data: {
            editsubdepname: editsubdepname,
            editsubdepdescription: editsubdepdescription,
            did:did,
            userId: userId,
          },
          success: function (response) {
            $("#edit-subdepartment-modal").modal("toggle");
            if (response === "success") {
              Swal.fire({
                icon: "success",
                title: "Success",
                text: "Sub Department edited successfully",
              });
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

  $(".deletesubdepartment").click(function () {
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
          url: "../pages/employee/subdepartment/deletesubdepartment.php",
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
