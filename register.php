<?php

include("../includes/db.php");

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(name, email, password, role)
              VALUES('$name', '$email', '$password', 'student')";

    $data = mysqli_query($conn, $query);

    if($data){
        echo "<script>alert('Registration Successful')</script>";
    }else{
        echo "<script>alert('Failed')</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-black text-white flex justify-center items-center min-h-screen">

    <div class="bg-gray-900 p-10 rounded-3xl w-[400px] border border-gray-800">

        <h1 class="text-4xl font-bold text-center text-cyan-400 mb-8">
            Register
        </h1>

        <form method="POST">

            <input
                type="text"
                name="name"
                placeholder="Enter Name"
                required
                class="w-full p-4 mb-5 rounded-xl bg-black border border-gray-700 outline-none"
            >

            <input
                type="email"
                name="email"
                placeholder="Enter Email"
                required
                class="w-full p-4 mb-5 rounded-xl bg-black border border-gray-700 outline-none"
            >

            <input
                type="password"
                name="password"
                placeholder="Enter Password"
                required
                class="w-full p-4 mb-5 rounded-xl bg-black border border-gray-700 outline-none"
            >

            <button
                type="submit"
                name="register"
                class="w-full bg-cyan-400 text-black py-4 rounded-xl font-bold hover:bg-cyan-300 transition"
            >

                Register

            </button>

        </form>

    </div>

</body>

</html>