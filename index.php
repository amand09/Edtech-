<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Dream Engineer</title>

  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-black text-white overflow-x-hidden">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-8 py-5 bg-black/70 backdrop-blur-lg fixed w-full top-0 z-50 border-b border-gray-800">

    <h1 class="text-3xl font-bold text-cyan-400">
      Dream Engineer
    </h1>

    <div class="hidden md:flex gap-8 text-lg">

      <a href="#" class="hover:text-cyan-400 transition">
        Home
      </a>

      <a href="#" class="hover:text-cyan-400 transition">
        Courses
      </a>

      <a href="#" class="hover:text-cyan-400 transition">
        About
      </a>

      <a href="#" class="hover:text-cyan-400 transition">
        Contact
      </a>

    </div>

    <a
href="pages/login.php"
class="bg-cyan-400 text-black px-5 py-2 rounded-xl font-bold hover:bg-cyan-300 transition"
>

Login

</a>

  </nav>

  <!-- Hero Section -->
  <!-- Popular Courses -->

<section class="px-8 py-24 bg-black">

  <h2 class="text-5xl font-bold text-center mb-16">
    Popular Courses
  </h2>

  <div class="grid md:grid-cols-3 gap-10">

    <!-- Card 1 -->

    <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 hover:border-cyan-400 transition duration-300 hover:-translate-y-2">

      <div class="text-5xl mb-6">
        💻
      </div>

      <h3 class="text-3xl font-bold mb-4 text-cyan-400">
        Web Development
      </h3>

      <p class="text-gray-400 leading-8">
        Learn HTML, CSS, JavaScript, Tailwind CSS, PHP and Full Stack Development from beginner to advanced.
      </p>

      <div class="mt-8 flex justify-between items-center">

        <span class="text-2xl font-bold">
          ₹1999
        </span>

       <a
href="pages/payment.php?course=Web Development&price=1999"
class="bg-cyan-400 text-black px-5 py-3 rounded-xl font-bold hover:bg-cyan-300 transition inline-block"
>

Buy Now

</a>

      </div>

    </div>

    <!-- Card 2 -->

    <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 hover:border-cyan-400 transition duration-300 hover:-translate-y-2">

      <div class="text-5xl mb-6">
        ⚡
      </div>

      <h3 class="text-3xl font-bold mb-4 text-cyan-400">
        Electronics & IoT
      </h3>

      <p class="text-gray-400 leading-8">
        Learn Arduino, ESP32, LoRa, PCB Designing, Embedded Systems and IoT Projects practically.
      </p>

      <div class="mt-8 flex justify-between items-center">

        <span class="text-2xl font-bold">
          ₹2499
        </span>

       <a
href="pages/payment.php?course=Electronics & IoT&price=2499"
class="bg-cyan-400 text-black px-5 py-3 rounded-xl font-bold hover:bg-cyan-300 transition inline-block"
>

Buy Now

</a>

      </div>

    </div>

    <!-- Card 3 -->

    <div class="bg-gray-900 border border-gray-800 rounded-3xl p-8 hover:border-cyan-400 transition duration-300 hover:-translate-y-2">

      <div class="text-5xl mb-6">
        📘
      </div>

      <h3 class="text-3xl font-bold mb-4 text-cyan-400">
        JEE Preparation
      </h3>

      <p class="text-gray-400 leading-8">
        Complete Physics, Maths and problem solving preparation for JEE Main and Advanced.
      </p>

      <div class="mt-8 flex justify-between items-center">

        <span class="text-2xl font-bold">
          ₹2999
        </span>

        <a
href="pages/payment.php?course=JEE Preparation&price=2999"
class="bg-cyan-400 text-black px-5 py-3 rounded-xl font-bold hover:bg-cyan-300 transition inline-block"
>

Buy Now

</a>

      </div>

    </div>

  </div>

</section>