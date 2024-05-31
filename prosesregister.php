<?php
// include database connection file
include_once("koneksi.php");

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    // Make sure the database connection is established
    if ($mysqli) {
        $namas = mysqli_real_escape_string($mysqli, $_POST['nama']);
        $usernames = mysqli_real_escape_string($mysqli, $_POST['username']);
        $passwords = mysqli_real_escape_string($mysqli, $_POST['password']);
        $emails = mysqli_real_escape_string($mysqli, $_POST['email']);

        // Insert user data into table
        $sql = "INSERT INTO user(nama, username, password, email) VALUES ('$namas', '$usernames', '$passwords', '$emails')";
        $result = mysqli_query($mysqli, $sql);

        // Check if the insertion was successful
        if ($result) {
            $sql = "SELECT * FROM user WHERE username='$usernames' AND nama='$namas'";
            $result = mysqli_query($mysqli, $sql);

            // Redirect to login page
            header('location:index.php?Your account is saved!');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    } else {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
}
?>
