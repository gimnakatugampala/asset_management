var user_id = "";

var finishLink = document.querySelector('a[href="#finish"]');

// Add a click event listener
finishLink.addEventListener("click", function (event) {
  const selectAS = document.getElementById("cmbStatus");
  const selectCat = document.getElementById("cmbCat");
  const selectSC = document.getElementById("cmbsubCat");
  const selectSup = document.getElementById("cmdsup");
  const selectDep = document.getElementById("cmbDepartment");
  const selectSD = document.getElementById("cmbSubdep");

  var modelno = $("#modelno").val();
  var aname = $("#aname").val();
  var adescription = $("#adescription").val();
  var unitprice = $("#unitprice").val();
  var dateofpurchase = $("#dateofpurchase").val();
  const asid = selectAS.value;
  const catid = selectCat.value;
  const scid = selectSC.value;
  const supid = selectSup.value;
  const depid = selectDep.value;
  const sdid = selectSD.value;
  var location = $("#location").val();
  var remark = $("#remark").val();

  if (modelno === "") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Enter Model Name",
    });
  } else if (aname === "") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Enter Name",
    });
  } else if (unitprice === "") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Enter Unit Price",
    });
  } else if (dateofpurchase === "") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Select Date Of Purchase",
    });
  } else if (asid === "0") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Select Asset Status",
    });
  } else if (catid === "0") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please select Category",
    });
  } else if (scid === "0") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Select Sub Category",
    });
  } else if (supid === "0") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Select Supplier",
    });
  } else if (depid === "0") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Select Department",
    });
  } else if (sdid === "0") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Select Sub Department",
    });
  } else if (location === "") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Enter Location",
    });
  } else if (remark === "") {
    $("#add-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Enter Remark",
    });
  } else {
    $.ajax({
      type: "POST",
      url: "../pages/Assets/addassest.php",
      data: {
        aname: aname,
        modelno: modelno,
        adescription: adescription,
        unitprice: unitprice,
        dateofpurchase: dateofpurchase,
        asid: asid,
        catid: catid,
        scid: scid,
        supid: supid,
        depid: depid,
        sdid: sdid,
        location: location,
        remark: remark,
      },
      success: function (response) {
        $("#add-asset-modal").modal("toggle");
        if (response === "true\r\n\r\n\r\n\r\n\r\n") {
          Swal.fire({
            icon: "success",
            title: "Success",
            text: "Asset added successfully",
          });
          $("#aname").val("");
          $("#modelno").val("");
          $("#adescription").val("");
          $("#unitprice").val("");
          $("#dateofpurchase").val("");
          $("#asid").val("0");
          $("#catid").val("0");
          $("#scid").val("0");
          $("#supid").val("0");
          $("#depid").val("0");
          $("#sdid").val("0");
          $("#location").val("");
          $("#remark").val("");
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
  event.preventDefault();
});

$(".viewdetails").click(function () {
  var clickedButton;
  user_id = $(this).data("id");

  $.ajax({
    type: "POST",
    url: "../pages/Assets/assest_data.php",
    data: {
      user_id: user_id,
    },
    success: function (response) {
      $.ajax({
        type: "POST",
        url: "../pages/Assets/assest_comment_list.php",
        data: {
          user_id: user_id,
        },
        success: function (response) {
          var data = JSON.parse(response);
          var table = $("#commentbodyviewdetails");
          table.empty();

          for (var i = 0; i < data.length; i++) {
            var row = $("<tr>");
            row.append($("<td>").text(data[i].comment));
            row.append($("<td>").text(data[i].firstname));
            row.append($("<td>").text(data[i].commentcreatedate));
            row.append(
              "<td><button type='button' class='btn btn-icon btn-danger deletecommentitem' data-id='" +
                data[i].commentcode +
                "'><i class='fe fe-trash'></i></button></td>"
            );
            table.append(row);
          }

          $(".deletecommentitem").click(function () {
            $("#asset-details-modal").modal("toggle");
            clickedButton = $(this); // Store the clicked button reference
            user_id = clickedButton.data("id");

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
                  url: "../pages/Assets/deletecommentlist.php",
                  method: "POST",
                  data: { user_id: user_id },
                  success: function (response) {
                    if (response === "success") {
                      clickedButton.closest("tr").remove(); // Use the stored reference to remove the closest <tr> element
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
        },
        error: function (xhr, status, error) {
          console.error("Error:", error);
        },
      });

      var data = JSON.parse(response);
      var tableBody = document.getElementById("table-body");

      // Generate the table HTML dynamically
      var tableHTML = "";
      for (var i = 0; i < data.length; i++) {
        tableHTML += "<tr>";
        tableHTML += "<th>Asset Model No</th>";
        tableHTML += "<th>" + data[i].modal + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Name</th>";
        tableHTML += "<th>" + data[i].name + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Description</th>";
        tableHTML += "<th>" + data[i].description + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Unit Price</th>";
        tableHTML += "<th>" + data[i].unitprice + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Date Of Purchase</th>";
        tableHTML += "<th>" + data[i].purchaseDate + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Asset Status</th>";
        tableHTML += "<th>" + data[i].sname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Category</th>";
        tableHTML += "<th>" + data[i].asscatname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Sub Category</th>";
        tableHTML += "<th>" + data[i].subcatname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Supplier</th>";
        tableHTML += "<th>" + data[i].supname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Department</th>";
        tableHTML += "<th>" + data[i].depname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Sub Department</th>";
        tableHTML += "<th>" + data[i].subdepname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Location</th>";
        tableHTML += "<th>" + data[i].location + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>Remark</th>";
        tableHTML += "<th>" + data[i].remark + "</th>";
        tableHTML += "</tr>";
      }
      tableBody.innerHTML = tableHTML;
    },
    error: function (xhr, status, error) {
      console.error("Error:", error);
    },
  });

  $.ajax({
    type: "POST",
    url: "../pages/Assets/assineDetails.php",
    data: {
      user_id: user_id,
    },
    success: function (response) {
      var data = JSON.parse(response);
      var table = $("#assindbody1");
      table.empty();

      for (var i = 0; i < data.length; i++) {
        var row = $("<tr>");
        row.append($("<td>").text(data[i].code));
        row.append($("<td>").text(data[i].name));
        row.append($("<td>").text(data[i].modal));
        row.append($("<td>").text(data[i].purchaseDate));
        row.append($("<td>").text(data[i].modifydate));
        table.append(row);
      }
    },
    error: function (xhr, status, error) {
      console.error("Error:", error);
    },
  });
});

$(".alocatedetails").click(function () {
  var clickedButton; // Declare a variable to store the clicked button reference
  user_id = $(this).data("id");
  $.ajax({
    type: "POST",
    url: "../pages/Assets/assest_comment_list.php",
    data: {
      user_id: user_id,
    },
    success: function (response) {
      var data = JSON.parse(response);
      var table = $("#commentbodyallocate");
      table.empty();

      // Iterate over the data array and create a table row for each item
      for (var i = 0; i < data.length; i++) {
        var row = $("<tr>");
        row.append($("<td>").text(data[i].comment));
        row.append($("<td>").text(data[i].firstname));
        row.append($("<td>").text(data[i].commentcreatedate));
        row.append(
          "<td><button type='button' class='btn btn-icon btn-danger deletecommentitem' data-id='" +
            data[i].commentcode +
            "'><i class='fe fe-trash'></i></button></td>"
        );
        table.append(row);
      }

      $(".deletecommentitem").click(function () {
        $("#asset-details-modal").modal("toggle");
        clickedButton = $(this); // Store the clicked button reference
        user_id = clickedButton.data("id");

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
              url: "../pages/Assets/deletecommentlist.php",
              method: "POST",
              data: { user_id: user_id },
              success: function (response) {
                if (response === "success") {
                  clickedButton.closest("tr").remove(); // Use the stored reference to remove the closest <tr> element
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
    },
    error: function (xhr, status, error) {
      console.error("Error:", error);
    },
  });
});

$(".editassestlist").click(function () {
  var clickedButton; // Declare a variable to store the clicked button reference
  user_id = $(this).data("id");

        // Make an AJAX request to fetch data from the server
        $.ajax({
            type: "POST", // Use POST method to send data
            url: "../pages/Assets/assest_data.php", // Replace with the actual path to your server-side script
            data: {
                user_id: user_id // Pass the user ID to the server
            },
            success: function(response) {
              var data = JSON.parse(response);

              $("#qr-code-input").val(userData.qrCode);
              $("#model-no-input").val(userData.modelNo);
               $("#qr-code-input").val(userData.qrCode);
              $("#model-no-input").val(userData.modelNo); 
              $("#qr-code-input").val(userData.qrCode);
              $("#model-no-input").val(userData.modelNo); 
              $("#qr-code-input").val(userData.qrCode);
              $("#model-no-input").val(userData.modelNo);
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(error);
            }
        });
});

$(".deleteassestlist").click(function () {
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
        url: "../pages/Assets/deleteasset.php",
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

$(".empassigndetail").click(function () {
  user_id = $(this).data("id");
});

$("#addcomment1").click(function () {
  var commentarea = $("#commentarea1").val();

  if (commentarea === "") {
    $("#allocate-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Enter Comment Name",
    });
  } else {
    $.ajax({
      type: "POST",
      url: "../pages/Assets/addcomment.php",
      data: {
        user_id: user_id,
        commentarea: commentarea,
      },
      success: function (response) {
        $("#allocate-modal").modal("toggle");
        if (response === "success") {
          Swal.fire({
            icon: "success",
            title: "Success",
            text: "Comment added successfully",
          });
          $("#commentarea").val("");
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

$("#addcomment2").click(function () {
  var commentarea = $("#commentarea2").val();

  if (commentarea === "") {
    $("#asset-details-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Enter Comment Name",
    });
  } else {
    $.ajax({
      type: "POST",
      url: "../pages/Assets/addcomment.php",
      data: {
        user_id: user_id,
        commentarea: commentarea,
      },
      success: function (response) {
        $("#asset-details-modal").modal("toggle");
        if (response === "success") {
          Swal.fire({
            icon: "success",
            title: "Success",
            text: "Comment added successfully",
          });
          $("#commentarea").val("");
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

$("#addcomment3").click(function () {
  var commentarea = $("#commentarea3").val();

  if (commentarea === "") {
    $("#edit-asset-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Enter Comment Name",
    });
  } else {
    $.ajax({
      type: "POST",
      url: "../pages/Assets/addcomment.php",
      data: {
        user_id: user_id,
        commentarea: commentarea,
      },
      success: function (response) {
        $("#edit-asset-modal").modal("toggle");
        if (response === "success") {
          Swal.fire({
            icon: "success",
            title: "Success",
            text: "Comment added successfully",
          });
          $("#commentarea").val("");
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

$("#saveassignuser").click(function () {
  const selectemp = document.getElementById("assignemp");
  const empid = selectemp.value;

  if (empid === "0") {
    $("#allocate-modal").modal("toggle");
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please Select Employee",
    });
  } else {
    $.ajax({
      type: "POST",
      url: "../pages/Assets/assignEmp.php",
      data: {
        user_id: user_id,
        empid: empid,
      },
      success: function (response) {
        $("#allocate-modal").modal("toggle");
        if (response === "success") {
          Swal.fire({
            icon: "success",
            title: "Success",
            text: "Employee Assigned",
          });
          $("#assignemp").val("0");
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

$(".empassigndetail").click(function () {
  var clickedButton;
  user_id = $(this).data("id");

  $.ajax({
    type: "POST",
    url: "../pages/Assets/assest_emp_data.php",
    data: {
      user_id: user_id,
    },
    success: function (response) {
      var data = JSON.parse(response);
      var tableBody = document.getElementById("table-body-emp-details");

      // Generate the table HTML dynamically
      var tableHTML = "";
      for (var i = 0; i < data.length; i++) {
        tableHTML += "<tr>";
        tableHTML += "<th>EMPLOYEE ID</th>";
        tableHTML += "<th>" + data[i].employeecode + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>FIRST NAME</th>";
        tableHTML += "<th>" + data[i].firstname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>LAST NAME</th>";
        tableHTML += "<th>" + data[i].lastname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>DATE OF BIRTH</th>";
        tableHTML += "<th>" + data[i].dob + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>DESIGNATION</th>";
        tableHTML += "<th>" + data[i].desname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>DEPARTMENT</th>";
        tableHTML += "<th>" + data[i].depname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>SUB DEPARTMENT</th>";
        tableHTML += "<th>" + data[i].subdepname + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>JOINING DATE</th>";
        tableHTML += "<th>" + data[i].joingdate + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>LEAVING DATE</th>";
        tableHTML += "<th>" + data[i].leavedate + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>PHONE</th>";
        tableHTML += "<th>" + data[i].phone + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>EMAIL</th>";
        tableHTML += "<th>" + data[i].email + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>ADDRESS</th>";
        tableHTML += "<th>" + data[i].address + "</th>";
        tableHTML += "</tr>";

        tableHTML += "<tr>";
        tableHTML += "<th>CREATED DATE</th>";
        tableHTML += "<th>" + data[i].modifieddate + "</th>";
        tableHTML += "</tr>";
      }
      tableBody.innerHTML = tableHTML;
    },
    error: function (xhr, status, error) {
      console.error("Error:", error);
    },
  });

  $.ajax({
    type: "POST",
    url: "../pages/Assets/assineDetails.php",
    data: {
      user_id: user_id,
    },
    success: function (response) {
      var data = JSON.parse(response);
      var table = $("#assindbody2");
      table.empty();

      for (var i = 0; i < data.length; i++) {
        var row = $("<tr>");
        row.append($("<td>").text(data[i].code));
        row.append($("<td>").text(data[i].name));
        row.append($("<td>").text(data[i].modal));
        row.append($("<td>").text(data[i].purchaseDate));
        row.append($("<td>").text(data[i].modifydate));
        table.append(row);
      }
    },
    error: function (xhr, status, error) {
      console.error("Error:", error);
    },
  });
});

$(".qrbtn").click(function () {
  var clickedButton;
  user_id = $(this).data("id");

  window.location.href =
    "asset-qr-code.php?code=" +
    encodeURIComponent(user_id);
});

$(".detailsbtn").click(function () {});
