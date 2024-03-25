if ($result) {
    if ($result->num_rows == 1) {
        // Successful login
        $_SESSION['username'] = $username;
        header("location: gdopticalclinic.php");
        exit(); 
    } else {
        // Invalid login attempt
        $showWarning = true;
    }
}
