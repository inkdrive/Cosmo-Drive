<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create an array to store the user profile
    $profile = array(
        "username" => $username,
        "password" => $password // Note: In a real-world application, you should hash passwords before storing them.
    );

    // Save the profile data to a JSON file
    $file = fopen('profiles.json', 'w');
    fwrite($file, json_encode($profile));
    fclose($file);

    // Redirect to the profile page
    header("Location: profile.html");
    exit();
}
?>
