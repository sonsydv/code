<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
        exit();
    }
    include "../connect/connect.php";

    if(isset($_POST['btn'])){
        $id ="";
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phoneNumber'];
        $address = $_POST['address'];
        
        // SQL
        $sql = "INSERT INTO users (id, firstName, lastName, username, email, password, phoneNumber, address) 
        VALUES ('$id','$firstName','$lastName', '$username', '$email', '$password', '$phoneNumber', '$address')
        ";
        // hàm chạy
        mysqli_query($conn, $sql);
        header("location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm Mới Người Dùng</title>
</head>
<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Thêm Người Dùng</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name: </label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name: </label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username: </label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email: </label>
                <input class="form-control" type="text" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password: </label>
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number: </label>
                <input class="form-control" type="text" id="phoneNumber" name="phoneNumber" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address: </label>
                <input class="form-control" type="text" id="address" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btn">Thêm Người Dùng</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>