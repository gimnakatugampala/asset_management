document.addEventListener("DOMContentLoaded", function () {
    const countrySelect = document.getElementById("cmbDepartment");

    // Function to load categories using AJAX
    function loadCountrylist() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "../pages/list/departmentlist.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const categories = JSON.parse(xhr.responseText);
                populatecountrySelect(categories);
            }
        };
        xhr.send();
    }

    // Function to populate the select tab
    function populatecountrySelect(categories) {

        categories.forEach(function (category) {
            const option = document.createElement("option");
            option.value = category.id;
            option.textContent = category.name;
            countrySelect.appendChild(option);
        });
    }

    const editcmbDepartment = document.getElementById("editcmbDepartment");

    // Function to load categories using AJAX
    function loadCountrylist2() {
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "../pages/list/departmentlist.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const categories = JSON.parse(xhr.responseText);
                populatecountrySelect2(categories);
            }
        };
        xhr.send();
    }

    // Function to populate the select tab
    function populatecountrySelect2(categories) {

        categories.forEach(function (category) {
            const option = document.createElement("option");
            option.value = category.id;
            option.textContent = category.name;
            editcmbDepartment.appendChild(option);
        });
    }

    loadCountrylist2();
    loadCountrylist();
});