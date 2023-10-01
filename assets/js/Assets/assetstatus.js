
$(document).ready(function () {
    $("#addassests").click(function () {
      var name = $("#name").val();
      var description = $("#description").val();
  
      if (name === "") {
        $("#add-asset-status-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Asset Name",
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../pages/Assets/addassetstatus.php",
          data: {
            name: name,
            description: description,
          },
          success: function (response) {
            $("#add-asset-status-modal").modal("toggle");
            if (response === "success") {
              Swal.fire({
                icon: "success",
                title: "Success",
                text: "Asset Status added successfully",
              });
              $("#name").val("");
              $("#description").val("");
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
  
    $("#editassest").click(function () {
      var userId = $(this).data("id");
  
      $.ajax({
          url: '../pages/Assets/get_assets_data.php',
          method: 'POST',
          data: { user_id: userId },
          dataType: 'json',
          success: function(data) {
              if (data) {
                  $("#editname").val(data.name);
                  $("#editdescription").val(data.description);
              } else {
                  $("#editeditname").val("");
                $("#editdescription").val("");
              }
          },
          error: function() {
              alert('Error fetching data.');
          }
      });
  
      $("#editassestbtn").click(function () {
        var editname = $("#editname").val();
        var editdescription = $("#editdescription").val();
  
        if (editname === "") {
          $("#edit-asset-status-modal").modal("toggle");
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Please Enter Assest Name",
          });
        } else {
          $.ajax({
            type: "POST",
            url: "../pages/Assets/editassest.php",
            data: {
              editname: editname,
              editdescription: editdescription,
              userId: userId
            },
            success: function (response) {
              $("#edit-asset-status-modal").modal("toggle");
              if (response === "success") {
                Swal.fire({
                  icon: "success",
                  title: "Success",
                  text: "Assest edited successfully",
                });
                $("#editeditname").val("");
                $("#editdescription").val("");
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
  
    $("#deleteassest").click(function () {
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
            url: "../pages/Assets/deleteassest.php",
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
  