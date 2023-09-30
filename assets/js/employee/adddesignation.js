$(document).ready(function () {
    $("#adddesignation").click(function () {
      var desname = $("#desname").val();
      var desdiscription = $("#desdiscription").val();
  
      if (desname === "") {
        $("#add-designation-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Department Name",
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../pages/employee/adddesignation.php",
          data: {
            desname: desname,
            desdiscription: desdiscription
          },
          success: function (response) {
            $("#add-designation-modal").modal("toggle");
            if (response === "success") {
              Swal.fire({
                icon: "success",
                title: "Success",
                text: "Designation added successfully",
              });
              $("#desname").val("");
              $("#desdiscription").val("");
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


    $("#editdesignation").click(function () {
        var userId = $(this).data("id");
    
        $.ajax({
            url: '../pages/employee/get_designation_data.php',
            method: 'POST',
            data: { user_id: userId },
            dataType: 'json',
            success: function(data) {
                if (data) {
                    $("#editdesname").val(data.desname);
                    $("#editdesdiscription").val(data.description);
                } else {
                    $("#editdesname").val("");
                  $("#editdesdiscription").val("");
                }
            },
            error: function() {
                alert('Error fetching data.');
            }
        });
    
        $("#editDesbtn").click(function () {
          var editdesname = $("#editdesname").val();
          var editdesdiscription = $("#editdesdiscription").val();
    
          if (editdesname === "") {
            $("#edit-designation-modal").modal("toggle");
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "Please Enter Department Name",
            });
          } else {
            $.ajax({
              type: "POST",
              url: "../pages/employee/editdesignation.php",
              data: {
                editdesname: editdesname,
                editdesdiscription: editdesdiscription,
                userId: userId,
              },
              success: function (response) {
                $("#edit-designation-modal").modal("toggle");
                if (response === "success") {
                  Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: "Department edited successfully",
                  });
                  $("#editdesname").val("");
                  $("#editdesdiscription").val("");
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
    


    $("#deletedesignation").click(function () {
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
              url: "../pages/employee/deletedesignation.php",
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
  