// AJAX request
function approveData(id) {
  if (confirm("Apakah anda yakin ingin menerima pendaftar ini?")) {
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
}

function deleteData(id, table) {
  if (confirm("Apakah anda yakin ingin menghapus siswa ini?")) {
    $.ajax({
      type: "POST",
      url: "controller/delete.php",
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
