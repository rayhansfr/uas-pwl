// AJAX request
function approveData(id) {
  $.ajax({
    type: "POST",
    url: "controller/approve.php",
    data: {
      id: id,
      action: "approve",
    },
    success: function (response) {
      // Handle the response
      console.log(response);

      // Check if the response indicates success
      if (response.includes("Data approved and inserted successfully.")) {
        // Reload the page to refresh the data
        location.reload(true); // Pass true to force a reload from the server, bypassing the cache
      }
    },
  });
}

function deleteData(id, table) {
  if (confirm("Are you sure you want to delete this data?")) {
    $.ajax({
      type: "POST",
      url: "controller/delete.php", // Replace with your PHP script for deleting
      data: {
        id: id,
        table: table,
        action: "delete",
      },
      success: function (response) {
        // Handle the response
        console.log(response);

        // Check if the response indicates success
        if (response.includes("Data deleted successfully.")) {
          // Reload the page to refresh the data
          location.reload(true);
        }
      },
    });
  }
}

function fetchData() {
  $.ajax({
    type: "GET",
    url: "controller/fetch.php", // Replace with your PHP script to fetch data
    dataType: "json",
    success: function (data) {
      updateTable(data);
    },
    error: function (xhr, status, error) {
      console.error("Error fetching data:", error);
    },
  });
}
