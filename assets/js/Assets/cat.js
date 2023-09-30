$(document).ready(function () {
  $("#addcat").click(function () {
    var catname = $("#catname").val();
    var catdescription = $("#catdescription").val();

    if (catname === "") {
      $("#add-asset-cat-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Category Name",
      });
    } else {
      $.ajax({
        type: "POST",
        url: "../pages/Assets/addcat.php",
        data: {
          catname: catname,
          catdescription: catdescription,
        },
        success: function (response) {
          $("#add-asset-cat-modal").modal("toggle");
          if (response === "success") {
            Swal.fire({
              icon: "success",
              title: "Success",
              text: "Category added successfully",
            });
            $("#catname").val("");
            $("#catdescription").val("");
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

  $("#editcat").click(function () {
    var userId = $(this).data("id");

    $.ajax({
      url: "../pages/Assets/get_cat_data.php",
      method: "POST",
      data: { user_id: userId },
      dataType: "json",
      success: function (data) {
        if (data) {
          $("#editcatname").val(data.name);
          $("#editcatdescription").val(data.description);
        } else {
          $("#editcatname").val("");
          $("#editcatdescription").val("");
        }
      },
      error: function () {
        alert("Error fetching data.");
      },
    });

    $("#editcatbtn").click(function () {
      var editcatname = $("#editcatname").val();
      var editcatdescription = $("#editcatdescription").val();

      if (editcatname === "") {
        $("#edit-asset-cat-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Assest Name",
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../pages/Assets/editcat.php",
          data: {
            editcatname: editcatname,
            editcatdescription: editcatdescription,
            userId: userId,
          },
          success: function (response) {
            $("#edit-asset-cat-modal").modal("toggle");
            if (response === "success") {
              Swal.fire({
                icon: "success",
                title: "Success",
                text: "Category edited successfully",
              });
              $("#editcatname").val("");
              $("#editcatdescription").val("");
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

  $("#deletecat").click(function () {
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
          url: "../pages/Assets/deletecat.php",
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
