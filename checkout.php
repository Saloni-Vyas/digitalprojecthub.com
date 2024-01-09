<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
include("include/post.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DigitalProjectHub.com</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <?php include("include/header.php"); ?>
  <!--	Header end  -->

<!-- create checkout start  -->
<div class="mx-auto w-full max-w-7xl mt-12 py-2">
  <div class="mx-auto my-4 max-w-2xl md:my-6">
    <nav class="mb-8 flex" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
          <a
            href="#"
            class="ml-1 inline-flex text-sm font-medium text-gray-900 hover:underline md:ml-2"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mr-2 text-gray-900"
            >
              <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            Cart
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mr-2 text-gray-600"
            >
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
            <a
              href="#"
              class="ml-1 text-sm font-medium text-gray-900 hover:underline md:ml-2"
            >
              Personal Information
            </a>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mr-2 text-gray-600"
            >
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
            <a
              href="#"
              class="ml-1 text-sm font-medium text-gray-900 hover:underline md:ml-2"
            >
              Payment Method
            </a>
          </div>
        </li>
        <li>
          <div class="flex items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="mr-2 text-gray-600"
            >
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
            <a
              href="#"
              class="ml-1 text-sm font-medium text-gray-900 hover:underline md:ml-2"
            >
              Confirmation
            </a>
          </div>
        </li>
      </ol>
    </nav>
    <div class="overflow-hidden rounded-xl bg-white p-4 shadow">
      <div class="mb-4 flex items-center rounded-lg py-2">
        <div class="mr-2 rounded-full bg-gray-100  p-2 text-black">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-shopping-cart"
          >
            <circle cx="8" cy="21" r="1"></circle>
            <circle cx="19" cy="21" r="1"></circle>
            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
          </svg>
        </div>
        <div class="flex flex-1">
          <p class="text-sm font-medium">
            You have <strong>4</strong> items in cart. Sub total is{" "}
            <strong>₹10,000</strong>
          </p>
        </div>
        <button
          type="button"
          class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
        >
          View Items
        </button>
      </div>
      <p class="text-sm font-bold text-gray-900">Personal Info</p>
      <div class="mt-6 gap-6 space-y-4 md:grid md:grid-cols-2 md:space-y-0">
        <div class="w-full">
          <label
            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
            for="firstName"
          >
            First Name
          </label>
          <input
            class="flex h-10 w-full rounded-md border border-black/30 bg-transparent px-3 py-2 text-sm placeholder:text-gray-600 focus:outline-none focus:ring-1 focus:ring-black/30 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
            type="text"
            placeholder="Enter your first name"
            id="firstName"
          />
        </div>
        <div class="w-full">
          <label
            class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
            for="lastName"
          >
            Last Name
          </label>
          <input
            class="flex h-10 w-full rounded-md border border-black/30 bg-transparent px-3 py-2 text-sm placeholder:text-gray-600 focus:outline-none focus:ring-1 focus:ring-black/30 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
            type="text"
            placeholder="Enter your last name"
            id="lastName"
          />
        </div>
        <div class="col-span-2 grid">
          <div class="w-full">
            <label
              class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
              for="email"
            >
              Email Address
            </label>
            <input
              class="flex h-10 w-full rounded-md border border-black/30 bg-transparent px-3 py-2 text-sm placeholder:text-gray-600 focus:outline-none focus:ring-1 focus:ring-black/30 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
              type="email"
              placeholder="Enter your email"
              id="email"
            />
          </div>
        </div>
        <div class="col-span-2 grid">
          <button
            type="button"
            class="w-full rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
          >
            Next Step
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- create checkout end -->

  <!--	Footer   start-->
  <?php include("include/footer.php"); ?>
  <!--	Footer   start-->


  <!-- Scroll to top -->
  <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
  <!-- End Scroll To top -->
</body>

</html>