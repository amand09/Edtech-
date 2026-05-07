<?php

session_start();

if(!isset($_SESSION['user'])){

    header("location: login.php");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-black text-white flex justify-center items-center min-h-screen">

    <div class="text-center">

        <h1 class="text-5xl font-bold text-cyan-400">
            Welcome to Dashboard 🚀
        </h1>

        <p class="mt-5 text-2xl">
            <?php echo $_SESSION['user']; ?>
        </p>
         <a
href="logout.php"
class="inline-block mt-8 bg-red-500 px-6 py-3 rounded-xl font-bold hover:bg-red-400 transition"
>

Logout

</a>
    </div>

</body>

</html>