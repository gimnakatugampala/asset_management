$(document).ready(function () {
    const cmbCat = document.getElementById("cmbCat");
    const editcmbCat = document.getElementById("editcmbCat");
  
    $("#addsubcat").click(function () {
      const did = cmbCat.value;
      var subcatname = $("#subcatname").val();
      var subcatdescription = $("#subcatdescription").val();
  
      if (subcatname === "") {
        $("#add-asset-sub-cat-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Sub Category Name",
        });
      } else if(did === "0") {
        $("#add-asset-sub-cat-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Select Category",
        });
      } 
      else {
        $.ajax({
          type: "POST",
          url: "../pages/Assets/addsubcat.php",
          data: {
            subcatname: subcatname,
            subcatdescription: subcatdescription,
            did:did
          },
          success: function (response) {
            $("#add-asset-sub-cat-modal").modal("toggle");
            if (response === "success") {
              Swal.fire({
                icon: "success",
                title: "Success",
                text: "Sub Category added successfully",
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
  
    $(".subcatedit").click(function () {
      var userId = $(this).data("id");
      var depId = ""
  
      $.ajax({
          url: '../pages/Assets/get_subcat_data.php',
          method: 'POST',
          data: { user_id: userId },
          dataType: 'json',
          success: function(data) {
              if (data) {
                  $("#editsubcatname").val(data.subcatname);
              } else {
                  $("#editsubcatname").val("");
                $("#editsubcatdescription").val("");
              }
          },
          error: function() {
              alert('Error fetching data.');
          }
      });
  
      $("#editsubcatbtn").click(function () {
        var editsubcatname = $("#editsubcatname").val();
        const did = editcmbCat.value;
  
        if (editsubcatname === "") {
          $("#edit-asset-sub-cat-modal").modal("toggle");
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Please Enter Sub Category Name",
          });
        }else if(did === "0") {
          $("#edit-asset-sub-cat-modal").modal("toggle");
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Please Select Category",
          });
        }  
        else {
          $.ajax({
            type: "POST",
            url: "../pages/Assets/editsubcat.php",
            data: {
              editsubcatname: editsubcatname,
              did:did,
              userId: userId,
            },
            success: function (response) {
              $("#edit-asset-sub-cat-modal").modal("toggle");
              if (response === "success") {
                Swal.fire({
                  icon: "success",
                  title: "Success",
                  text: "Sub Category edited successfully",
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
  
    $(".deletesubcat").click(function () {
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
            url: "../pages/Assets/deletesubcat.php",
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
  