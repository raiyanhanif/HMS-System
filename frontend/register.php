<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit Form</title>
  <style>
    /* Base styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f8f9fa; /* Light background color */
    }

    .popup {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #ffffff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .popup.show {
      display: block;
      opacity: 1;
    }

    .popup-content {
      display: flex;
      align-items: center;
    }

    .icon {
      font-size: 40px;
      color: #28a745; /* Green color for success */
      margin-right: 20px;
    }

    .message {
      font-size: 20px;
      color: #333333;
    }

    #submitButton {
      background-color: #007bff;
      color: #ffffff;
      border: none;
      padding: 15px 30px;
      border-radius: 10px;
      cursor: pointer;
      font-size: 18px;
      transition: background-color 0.3s ease;
    }

    #submitButton:hover {
      background-color: #0056b3; /* Darker shade on hover */
    }
  </style>
</head>
<body>

  <form id="myForm">
    <!-- Your form inputs here -->
    <button type="submit" id="submitButton">Submit</button>
  </form>

  <!-- Popup box -->
  <div class="popup" id="successPopup">
    <div class="popup-content">
      <span class="icon">&#10004;</span>
      <span class="message">Successfully Submitted!</span>
    </div>
  </div>

  <script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent default form submission

      // Display success popup
      var popup = document.getElementById("successPopup");
      popup.classList.add("show");

      // Hide popup after 3 seconds
      setTimeout(function() {
        popup.classList.remove("show");
      }, 3000);
    });
  </script>
</body>
</html>
