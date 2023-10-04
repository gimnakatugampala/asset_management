$(document).ready(function () {
  $("#supSave").click(function () {
    var supname = $("#supname").val();
    var cperson = $("#cperson").val();
    var supaddress = $("#supaddress").val();
    var supemail = $("#supemail").val();
    var supphone = $("#supphone").val();

    if (supname === "") {
      $("#add-supplier-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Supplier Name",
      });
    } else if (cperson === "") {
      $("#add-supplier-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Contact Person",
      });
    } else if (supaddress === "") {
      $("#add-supplier-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Address",
      });
    } else if (supemail === "") {
      $("#add-supplier-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Email",
      });
    } else if (supphone === "") {
      $("#add-supplier-modal").modal("toggle");
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please Enter Phone no",
      });
    } else {
      $.ajax({
        type: "POST",
        url: "../pages/supplier/addsupplier.php",
        data: {
          supname: supname,
          cperson: cperson,
          supaddress: supaddress,
          supemail: supemail,
          supphone: supphone,
        },
        success: function (response) {
          $("#add-supplier-modal").modal("toggle");
          if (response === "success") {
            Swal.fire({
              icon: "success",
              title: "Success",
              text: "Supplier added successfully",
            });
            $("#supname").val("");
            $("#cperson").val("");
            $("#supaddress").val("");
            $("#supemail").val("");
            $("#supphone").val("");
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

  $(".editsup").click(function () {
    var userId = $(this).data("id");

    $.ajax({
      url: "../pages/supplier/get_sup_data.php",
      method: "POST",
      data: { user_id: userId },
      dataType: "json",
      success: function (data) {
        if (data) {
          $("#editsupname").val(data.name);
          $("#editcperson").val(data.contactperson);
          $("#editsupaddress").val(data.address);
          $("#editsupemail").val(data.email);
          $("#editsupphone").val(data.phone);
        } else {
          $("#editsupname").val("");
          $("#editcperson").val("");
          $("#editsupaddress").val("");
          $("#editsupemail").val("");
          $("#editsupphone").val("");
        }
      },
      error: function () {
        alert("Error fetching data.");
      },
    });

    $("#editbtnsup").click(function () {
      var editsupname = $("#editsupname").val();
      var editcperson = $("#editcperson").val();
      var editsupaddress = $("#editsupaddress").val();
      var editsupemail = $("#editsupemail").val();
      var editsupphone = $("#editsupphone").val();

      if (editsupname === "") {
        $("#edit-supplier-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Supplier Name",
        });
      } else if (editcperson === "") {
        $("#edit-supplier-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Contact Person",
        });
      } else if (editsupaddress === "") {
        $("#edit-supplier-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Address",
        });
      } else if (editsupemail === "") {
        $("#edit-supplier-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Email",
        });
      } else if (editsupphone === "") {
        $("#edit-supplier-modal").modal("toggle");
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Please Enter Phone",
        });
      } else {
        $.ajax({
          type: "POST",
          url: "../pages/supplier/editsupplier.php",
          data: {
            editsupname: editsupname,
            editcperson: editcperson,
            editsupaddress: editsupaddress,
            editsupemail: editsupemail,
            editsupphone: editsupphone,
            userId: userId
          },
          success: function (response) {
            $("#edit-supplier-modal").modal("toggle");
            if (response === "success") {
              Swal.fire({
                icon: "success",
                title: "Success",
                text: "Supplier edited successfully",
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

  $(".deletesup").click(function () {
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
          url: "../pages/supplier/deletesupplier.php",
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
