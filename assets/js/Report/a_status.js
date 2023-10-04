document.addEventListener("DOMContentLoaded", function () {
  const submitButton = document.querySelector("#suubmit");
  submitButton.addEventListener("click", function () {
    const startDate = document.querySelector('input[name="start-date"]').value;
    const endDate = document.querySelector('input[name="end-date"]').value;

    // Make an asynchronous request to the PHP script
    fetch(
      `../pages/report/a_status.php?start_date=${startDate}&end_date=${endDate}`
    )
      .then((response) => response.json())
      .then((data) => {

        var table = $("#table-body-range");
        table.empty();

        for (var i = 0; i < data.length; i++) {
          var row = $("<tr>");
          row.append($("<td>").text(data[i].code));
          row.append($("<td>").text(data[i].sname));
        //   row.append($("<td>").text(data[i].modal));
        //   row.append($("<td>").text(data[i].purchaseDate));
        //   row.append($("<td>").text(data[i].modifydate));
          table.append(row);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
});
