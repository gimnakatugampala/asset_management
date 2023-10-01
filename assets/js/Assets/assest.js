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

$("#viewdetails").click(function () {
  var userId = $(this).data("id");

  $.ajax({
    url: "../pages/Assets/assest_data.php.php",
    method: "POST",
    data: { user_id: userId },
    dataType: "json",
    success: function (response) {
      if (response.success) {
        var userData = response.data;
       
      } else {
        alert("111");
      }
    },
    error: function (error) {
      alert(error);
    },
  });
});
