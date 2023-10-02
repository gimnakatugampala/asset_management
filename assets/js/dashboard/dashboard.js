var xhr = new XMLHttpRequest();
xhr.open("GET", "../pages/dashboard/getTotalEmployees.php", true);
xhr.onreadystatechange = function () {
  if (xhr.readyState == 4 && xhr.status == 200) {
    // Parse the JSON response
    var response = JSON.parse(xhr.responseText);

    document.getElementById("total-count1").textContent =
      response.totalCountTable1;
    document.getElementById("total-count2").textContent =
      response.totalCountTable2;
    document.getElementById("total-count3").textContent =
      response.totalCountTable3;
    document.getElementById("total-count4").textContent =
      response.totalCountTable4;
  }
};
xhr.send();

$(document).ready(function () {
  // Function to populate the table with data
  function populateTable(data) {
    var tableBody = $("#bodyemp");

    data.forEach(function (brand) {
      var row = $("<tr>");
      row.append("<td>" + brand.employeecode + "</td>");
      row.append("<td>" + brand.firstname + "" + brand.lastname + "</td>");
      row.append("<td>" + brand.email + "</td>");
      row.append("<td>" + brand.phone + "</td>");
      tableBody.append(row);
    });
  }
  $.getJSON("../pages/dashboard/getdataemployee", function (data) {
    populateTable(data);
  });


  function populateTable2(data) {
    var tableBody = $("#bodysup");

    data.forEach(function (brand) {
      var row = $("<tr>");
      row.append("<td>" + brand.code + "</td>");
      row.append("<td>" + brand.supname + "</td>");
      row.append("<td>" + brand.email + "</td>");
      row.append("<td>" + brand.phone + "</td>");
      tableBody.append(row);
    });
  }
  $.getJSON("../pages/list/suplist", function (data) {
    populateTable2(data);
  });
});
