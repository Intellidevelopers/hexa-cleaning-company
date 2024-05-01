<?php 
require '../config/function.php';

// Create User
if(isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $username = validate($_POST['username']);
    $location = validate($_POST['location']);
    $published_date = validate($_POST['published_date']);
    $role = validate($_POST['role']);

    if($name != '' || $email != '' || $phone != '' || $password != '' || $username != '' || $location != '' || $published_date != '' || $role != '') {
        $query = "INSERT INTO users (name,username,email,location,phone,passwod,role) 
                    VALUE ('$name','$email','$phone','$username','$location','$password','$role')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('users.php','Customer/Admin Added Successfully');
        }else{
            redirect('create-user.php','Something Went Wrong');
        }
    }
    else{
       redirect('create-user.php','Please fill all the inputs fields');
    }
}

// Update User details
if(isset($_POST['updateUser'])){
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $username = validate($_POST['username']);
    $location = validate($_POST['location']);
    $role = validate($_POST['role']);

    $userId = validate($_POST['userId']);

    $user = getById('users',$userId);
    if($user['status'] != 200){
        redirect('user-edit.php?id='.$userId,'No Such Id Found');
    }

    if($name != '' || $email != '' || $phone != '' || $password != '' || $username != '' || $location != '' || $published_date != '' || $role != '') {
        $query = "UPDATE users SET
        name='$name',
        username='$username',
        email='$email',
        location='$location',
        phone='$phone',
        password='$password',
        role='$role'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('users.php','User Updated Successfully');
        }else{
            redirect('create-user.php','Something Went Wrong');
        }
    }
    else{
       redirect('create-user.php','Please fill all the inputs fields');
    }
}

// Create Posts
if(isset($_POST['createPost'])) {
    $title = validate($_POST['title']);
    $tags = validate($_POST['tags']);
    $first_description = validate($_POST['first_description']);
    $second_description = validate($_POST['second_description']);
    $date = validate($_POST['date']);
    $quotes = validate($_POST['quotes']);
    $author = validate($_POST['author']);

    // Image upload
    $image = $_FILES["blog_image"]['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["blog_image"]["tmp_name"]);
    if($check !== false) {
        if(move_uploaded_file($_FILES['blog_image']['tmp_name'], $target_file)) {
            // Image uploaded successfully, continue with database insertion
            $query = "INSERT INTO blog (title,author, tags, second_description, date, quotes, first_description, blog_image) 
                        VALUES ('$title', '$tags','author', '$second_description', '$date', '$quotes', '$first_description', '$image')";
            $result = mysqli_query($conn, $query);

            if($result) {
                redirect('blog.php', 'Post Added Successfully');
            } else {
                redirect('create_blog.php', 'Something Went Wrong');
            }
        } else {
            redirect('create_blog.php', 'Failed to upload image');
        }
    } else {
        redirect('create_blog.php', 'File is not an image');
    }
} else {
    redirect('create_blog.php', 'Please fill all the input fields');
}

// Update Blog Post
if(isset($_POST['updateBlog'])){
    // Validate and retrieve form data
    $title = validate($_POST['title']);
    $tags = validate($_POST['tags']);
    $date = validate($_POST['date']);
    $quotes = validate($_POST['quotes']);
    $author = validate($_POST['author']);

    $userId = validate($_POST['userId']);

    $user = getById('blog', $userId);
    if($user['status'] != 200){
        redirect('blog-edit.php?id='.$userId, 'No Such Id Found');
    }

    // Check if all fields are not empty
    if($title != '' && $quotes != '' && $tags != '' && $author != '' && $date != '') {
        // Update query
        $query = "UPDATE blog SET
        title='$title',
        tags='$tags',
        author='$author',
        quotes='$quotes',
        date='$date'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('blog.php', 'Post Updated Successfully');
        } else {
            redirect('blog-edit.php?id='.$userId, 'Something Went Wrong');
        }
    } else {
        redirect('blog-edit.php?id='.$userId, 'Please fill all the input fields');
    }
}


// Create Advert
if(isset($_POST['createAdvert'])) {
    $advert_title = validate($_POST['advert_title']);
    $advert_description = validate($_POST['advert_description']);
    $created_date = validate($_POST['created_date']);

    if($advert_title != '' && $advert_description != '' && $created_date != '') {
        $query = "INSERT INTO advert (advert_title, advert_description, created_date) 
                  VALUES ('$advert_title', '$advert_description', '$created_date')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('advert.php', 'Advert Created Successfully');
        } else {
            redirect('advert.php', 'Something Went Wrong');
        }
    } else {
       redirect('advert.php', 'Please fill all the input fields');
    }
}


// Update Advert details
if(isset($_POST['updateAdvert'])){
    $advert_title = validate($_POST['advert_title']);
    $advert_description = validate($_POST['advert_description']);
    $created_date = validate($_POST['created_date']);

    $userId = validate($_POST['userId']);

    $user = getById('advert',$userId);
    if($user['status'] != 200){
        redirect('advert-edit.php?id='.$userId,'No Such Id Found');
    }

    if($advert_title != '' || $advert_description != '' || $created_date != '') {
        $query = "UPDATE advert SET
        advert_title='$advert_title',
        advert_description='$advert_description',
        created_date='$created_date'

        WHERE id='$userId' ";

        $result = mysqli_query($conn, $query);

        if($result){
            redirect('advert.php','User Updated Successfully');
        }else{
            redirect('create-advert.php','Something Went Wrong');
        }
    }
    else{
       redirect('create-advert.php','Please fill all the inputs fields');
    }
}

// Create Project
if(isset($_POST['createProject'])) {
    $title = validate($_POST['title']);
    $professional = validate($_POST['professional']);

    $image = $_FILES["project_image"]['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["project_image"]["tmp_name"]);
    if($check !== false) {
        if(move_uploaded_file($_FILES['project_image']['tmp_name'], $target_file)) {
            // Image uploaded successfully, continue with database insertion
            $query = "INSERT INTO projects (title,professional,project_image) 
                        VALUES ('$title', '$professional','$image')";
            $result = mysqli_query($conn, $query);

            if($result) {
                redirect('projects.php', 'Post Added Successfully');
            } else {
                redirect('projects.php', 'Something Went Wrong');
            }
        } else {
            redirect('projects.php', 'Failed to upload image');
        }
    } else {
        redirect('projects.php', 'File is not an image');
    }
} else {
    redirect('projects.php', 'Please fill all the input fields');
}

// Create Faq
if(isset($_POST['createFaq'])) {
    $question = validate($_POST['question']);
    $answer = validate($_POST['answer']);

    if($question != '' || $answer != '') {
        $query = "INSERT INTO faq (question, answer) 
                    VALUE ('$question','$answer')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('faq.php','Faq Added Successfully');
        }else{
            redirect('create-faq.php','Something Went Wrong');
        }
    }
    else{
       redirect('create-faq.php','Please fill all the inputs fields');
    }
}