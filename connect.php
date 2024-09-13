<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-image: url('images/back2.jpg'); /* Replace with the path to your image */
    background-size: cover; /* Ensures the background image covers the entire page */
    background-position: center; /* Centers the background image */
    background-repeat: no-repeat; /* Prevents the background image from repeating */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    text-align: center;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        img {
            max-width: 100px;
            margin-bottom: 20px;
        }

        h3 {
            color: #28a745;
            margin-bottom: 20px;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="https://img.icons8.com/emoji/100/000000/thumbs-up.png" alt="Success Icon">
    <?php
    // Database connection details
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "myportfolio";

    // Create connection
    $conn = mysqli_connect($host, $user, $password, $db_name);

    // Checking the connection
    if (!$conn) {  
        die("Failed to connect with MySQL: " . mysqli_connect_error());  
    }  

    // Taking all 5 values from the form data (input)
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
    $email = $_GET['email'];
    $cnumber = $_GET['cnumber'];
    $message = $_GET['message'];

    // Insert query with the correct table name and column names
    $sql = "INSERT INTO contact (fname, lname, email, cnumber, message) VALUES ('$fname', '$lname', '$email', '$cnumber', '$message')";

    // Run the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "<h3>Your Record has been Inserted Successfully!</h3>";
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>

    <!-- Back Button -->
    <a href="javascript:void(0);" onclick="goBack()" class="back-button">Back to Website</a>

</div>

<script>
function goBack() {
    window.history.back();
}
</script>

</body>
</html>
