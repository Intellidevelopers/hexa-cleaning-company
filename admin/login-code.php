<?php
require '../config/dbconn.php'; // Include the file containing database connection details

session_start();

if(isset($_POST['loginBtn'])){
    // Function to validate user input
function validate($inputData){
    global $conn;
    $validatedData = mysqli_real_escape_string($conn, $inputData);
    return trim($validatedData);
}


    $emailInput = validate($_POST['email']);
    $passwordInput = validate($_POST['password']);

    // Sanitize user inputs
    $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
    $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

    // Validate email and password
    if($email != '' && $password != ''){
        // Prepare and execute SQL query to fetch user details based on email
        $query = "SELECT * FROM customers WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $query);

        // Check if query execution was successful
        if($result && mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);

            // Verify the provided password with the hashed password stored in the database
            if(password_verify($password, $row['password'])){
                // Passwords match, set session variables and redirect to appropriate page
                $_SESSION['auth'] = true;
                $_SESSION['loggedInUser'] = [
                    'name' => $row['name'],
                    'email' => $row['email']
                ];

                if($row['role'] == 'admin'){
                    $_SESSION['loggedInUserRole'] = 'admin';
                    redirect('admin/index.php', 'Logged In Successfully');
                }else{
                    redirect('index.php', 'Logged In Successfully');
                }
            }else{
                redirect('login.php', 'Invalid Email or Password');
            }
        }else{
            // Function to redirect the user to another page
function redirect($url, $status){
    $_SESSION['status'] = $status;
    header('location: '.$url);
    exit(0);
}

            redirect('index.php', 'Logged In Successfully');
        }
    }else{
        redirect('login.php', 'Please provide email and password');
    }
}