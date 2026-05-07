<?php

$course = $_GET['course'];
$price = $_GET['price'];

?>

<!DOCTYPE html>
<html>

<head>

    <title>Payment</title>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-black text-white flex justify-center items-center min-h-screen">

    <div class="bg-gray-900 p-10 rounded-3xl border border-gray-800 text-center w-[400px]">

        <h1 class="text-4xl font-bold text-cyan-400 mb-5">
            <?php echo $course; ?>
        </h1>

        <p class="text-2xl mb-8">
            Price: ₹<?php echo $price; ?>
        </p>

        <button
            id="pay-btn"
            class="bg-cyan-400 text-black px-10 py-4 rounded-2xl text-xl font-bold hover:bg-cyan-300 transition"
        >

            Pay ₹<?php echo $price; ?>

        </button>

    </div>

<script>

var options = {

    "key": "rzp_test_xxxxxxxxx",

    "amount": "<?php echo $price * 100; ?>",

    "currency": "INR",

    "name": "Dream Engineer",

    "description": "<?php echo $course; ?>",

    "image": "https://cdn-icons-png.flaticon.com/512/2721/2721297.png",

    "handler": function (response){

        alert("Payment Successful");

        window.location.href = "dashboard.php";

    },

    "theme": {
        "color": "#22d3ee"
    }

};

var rzp1 = new Razorpay(options);

document.getElementById('pay-btn').onclick = function(e){

    rzp1.open();

    e.preventDefault();

}

</script>

</body>

</html>