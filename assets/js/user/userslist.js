$(document).ready(function () {
  function populateTable(data) {
    var tableBody = $("table.ulist #userslist");

    data.forEach(function (userlist) {
      var row = $("<tr>");
      row.append("<td>" + userlist.usercode + "</td>");
      row.append("<td>" + userlist.firstname + "</td>");
      row.append("<td>" + userlist.lastname + "</td>");
      row.append("<td>" + userlist.phoneno + "</td>");
      row.append("<td>" + userlist.email + "</td>");
      row.append("<td>" + userlist.createddate + "</td>");
      tableBody.append(row);
    });
  }

  // Fetch data from the server
  $.getJSON("../pages/user/userlist.php", function (data) {
    populateTable(data);
  });
});
