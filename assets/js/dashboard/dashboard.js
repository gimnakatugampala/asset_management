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

  var user_id = "";

  // Send an AJAX request to the server to get the user ID
  $.ajax({
    type: "GET",
    url: "../pages/auth/get_user_id.php", // Replace with the actual path to your PHP script
    dataType: "json",
    success: function (response) {
      if (response.user_id !== null) {
        // User is authenticated, and user_id is available in response
        user_id = response.user_id;
      } else {
        // User is not authenticated or user_id is not available
        console.log("User is not authenticated.");
      }
    },
    error: function (xhr, status, error) {
      // Handle errors here
      console.error("Error:", error);
    },
  });
});


// Wait for the DOM content to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
  // Create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();

  // Configure it as a GET request to a PHP file
  xhr.open('GET', '../pages/user/getusername.php', true);

  // Set up the callback function to handle the response
  xhr.onload = function () {
      if (xhr.status >= 200 && xhr.status < 300) {
          // Parse the response text as JSON
          var response = JSON.parse(xhr.responseText);

          // Access the 'firstname' property from the JSON response
          document.getElementById('userName').innerHTML = response.firstname +" "+ response.lastname;
      } else {
          // If there was an error with the request, display an error message
          document.getElementById('userName').innerHTML = 'Error fetching user name';
      }
  };

  // Send the request
  xhr.send();
});

