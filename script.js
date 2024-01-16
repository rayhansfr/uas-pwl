//Contact Form in PHP
const form = document.querySelector("form"),
    statusTxt = form.querySelector(".button-area span");
form.onsubmit = (e) => {
    e.preventDefault();
    statusTxt.style.color = "#0D6EFD";
    statusTxt.style.display = "block";
    statusTxt.innerText = "Sending your message...";
    form.classList.add("disabled");

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "message.php", true);
    xhr.onload = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            let response = xhr.response;
            if (response.indexOf("required") != -1 || response.indexOf("valid") != -1 || response.indexOf("failed") != -1) {
                statusTxt.style.color = "red";
            } else {
                form.reset();
                setTimeout(() => {
                    statusTxt.style.display = "none";
                }, 3000);
            }
            statusTxt.innerText = response;
            form.classList.remove("disabled");
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
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

