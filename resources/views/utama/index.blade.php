<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <style type="text/tailwindcss">
    @layer utilities {
      .container {
        @apply max-w-[90%] mx-auto;
      }

      .btn {
        @apply bg-[#0C3E63] text-white px-5 py-3 text-center;
      }  

      .btn.rounded {
        @apply rounded-full;
      }

      .home::before {
        /* content: url("./assets/scratch.svg");
        position: absolute;
        bottom: -18px; */
      }

      .active {
        @apply block;
      }
    }
  </style>
  <title>Mangcoding Store</title>
</head>

<body>
  <header class="bg-[#00A6B7] absolute w-full inset-x-0 z-50">
    <nav class="container text-white flex py-5 items-center justify-between">
      <a href="">
        <img src="./assets/logo.svg" alt="">
      </a>

      <div class="space-x-4 flex-1 ml-24 hidden md:block">
        <a href="">Home</a>
        <a href="">About Us</a>
        <a href="">Services</a>
        <a href="">Work</a>
        <a href="">Blog</a>
        <a href="">Resource</a>
        <a href="">Contact</a>
      </div>
      @if (Route::has('login'))
      <div class="flex items-center space-x-3 hidden md:flex">
        @auth
        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <a href="{{ url('/dashboard') }}" class="btn rounded">Dashboard</a>
            </span>
          </button>
        @else
        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                <a href="{{ url('/login') }}">Login</a>
            </span>
          </button>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="">Register</a>
            @endif
            @endauth
        <a href="" class="btn rounded">Build Website</a>
        <a href="">
          <img src="./assets/Group.png" alt="">
        </a>
      </div>
      @endif



      <a href="#" class="hamburger md:hidden">
        <img src="./assets/hamburger.svg" alt="">
      </a>

      </div>
    </nav>
  </header>

  <section class="bg-[#00A6B7] py-16 md:py-64">
    <div class="container mx-auto flex flex-col  space-y-8">
      <span class="text-white text-xl">Build Your Website</span>
      <h1 class="text-4xl md:text-8xl font-bold leading-none relative text-white">
        Develop your idea with <span class="text-[#004248]">Mangcoding <br> Team</span> Through Digital Products
      </h1>
      <p class="text-xl text-white">
        Provide Website creation for your company (Shopify, WordPrees, and Others)
      </p>
      <div class="flex space-x-5">
        <a href="" class="btn bg-teal-400 text-white rounded px-5 py-3">Build Website</a>
        <a href="" class="text-white border border-white bg-[#33b8c5] py-3 px-5 rounded-full text-center">Explore Blog</a>
      </div>
    </div>
  </section>


  
  <section class="py-24 flex flex-col justify-center items-center space-y-10">
    <h2 class="text-[#0C1320] text-4xl block">Brand that trusts us</h2>
    @include('layouts.company')
  </section>

  <div class="bg-[#0C3E63] py-20 mx-14">
    <div class="container">
      <span class="bg-[#3D6582] text-white py-3 px-5 rounded-full">Build Your Website</span>
      <div class="flex justify-between items-center mt-5">
        <h1 class="text-6xl text-white max-w-2xl leading-none font-bold">
          Modern solutions to Empower your business
        </h1>
        <a href="" class="bg-[#3D6582] text-white py-3 px-5 rounded-full"> Our Services</a>
      </div>
  
      <div class="flex flex-wrap -mx-8 mt-16">
        <div class="w-full sm:w-1/3 p-8 space-y-2 bg-white rounded">
          <img height="200" src="./assets/shopify.png" alt="">
          <h3 class="text-2xl font-bold">Shopify Theme Development</h3>
          <p>
            Start from 700 USD for project base or 35 USD per hour
          </p>
        </div>
  
        <div class="w-full sm:w-1/3 p-8 space-y-2 bg-[#0C3E63] rounded">
          <img height="200" src="assets/wordpress.png" alt="">
          <h3 class="text-2xl font-bold text-white">WordPress Theme Development</h3>
          <p class="text-white">
            Start from 700 USD for project base or 35 USD per hour
          </p>
        </div>
  
        <div class="w-full sm:w-1/3 p-8 space-y-2 bg-[#0C3E63] rounded">
          <img height="200" src="./assets/php.png" alt="">
          <h3 class="text-2xl font-bold text-white">PHP Development</h3>
          <p class="text-white">
            Start from 700 USD for project base or 35 USD per hour
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container py-20">
    <span class="text-white bg-black py-3 px-5 rounded-full">Work</span>
    <div class="flex justify-between items-center w-full mt-5">
      <h3 class="text-5xl font-semibold max-w-2xl">
        Realizing the unimagined To make impact
      </h3>
      <a href="" class="text-dark-600 border border-gray-500 py-3 px-5 rounded-full">See More</a>
    </div>
  
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-24 mt-10">
      <div class="relative">
        <img src="./assets/laptop 1.png" class="h-64 w-full object-cover" alt="">
        <div class="mt-3 space-y-2">
          <div class="space-y-1">
            <p class="font-bold text-xl">BEA CUKAI SANGATTA</p>
            <p class="text-lg text-gray-500">www.bcsangatta.beacukai.go.id</p>
          </div>
        </div>
      </div>
  
      <div class="relative">
        <img src="./assets/laptop 2.png" class="h-64 w-full object-cover" alt="">
        <div class="mt-3 space-y-2">
          <div class="space-y-1">
            <p class="font-bold text-xl">Cargo Udara</p>
            <p class="text-lg text-gray-500">www.bcsangatta.beacukai.go.id</p>
          </div>
        </div>
      </div>
  
      <div class="relative">
        <img src="./assets/laptop 3.png" class="h-64 w-full object-cover" alt="">
        <div class="mt-3 space-y-2">
          <div class="space-y-1">
            <p class="font-bold text-xl">Cargo Udara</p>
            <p class="text-lg text-gray-500">www.bcsangatta.beacukai.go.id</p>
          </div>
        </div>
      </div>
  
      <div class="relative">
        <img src="./assets/laptop 4.png" class="h-64 w-full object-cover" alt="">
        <div class="mt-3 space-y-2">
          <div class="space-y-1">
            <p class="font-bold text-xl">BEA CUKAI SANGATTA</p>
            <p class="text-lg text-gray-500">www.bcsangatta.beacukai.go.id</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="py-20 my-16 mx-14 bg-[#0C3E63]">
    <div class="container">
      <span class="text-white bg-[#3D6582] py-3 px-5 rounded-full">Testimonial</span>
      <div class="flex justify-between items-center mt-5">
        <h1 class="text-6xl text-white max-w-[590px] leading-none font-bold">
          Don’t just take our word For it
        </h1>
      </div>

      <div class="flex space-x-8 justify-between mt-16">
        <div class="p-8 space-y-5 bg-white rounded">
          <div class="flex justify-between items-center">
            <img height="80" width="80" src="./assets/riko.png" alt="">
            <img src="./assets/oreli.png" alt="">
          </div>
          <p class="text-md font-semibold text-gray-800">
            Lörem ipsum oligt trirad. Der analigt. Euronade hexafade. Tesat vädiskap att makrosm. Gångfartsgata dor
            kvasibälig udebelt. Lörem ipsum oligt trirad. Der analigt. Euronade hexafade. Tesat vädiskap att makrosm.
            Gångfartsgata dor kvasibälig udebelt.
          </p>
          <div class="mt-10">
            <p class="font-bold">Riko Sapto Dimo</p>
            <span class="text-gray-500">Managing Directore Orely.co</span>
          </div>
        </div>

        <div class="p-8 space-y-5 bg-white rounded">
          <div class="flex justify-between items-center">
            <img height="80" width="80" src="./assets/steph.png" alt="">
            <img src="./assets/oreli.png" alt="">
          </div>
          <p class="text-md font-semibold text-gray-800">
            Lörem ipsum oligt trirad. Der analigt. Euronade hexafade. Tesat vädiskap att makrosm. Gångfartsgata dor
            kvasibälig udebelt. Lörem ipsum oligt trirad. Der analigt. Euronade hexafade. Tesat vädiskap att makrosm.
            Gångfartsgata dor kvasibälig udebelt.
          </p>
          <div class="mt-10">
            <p class="font-bold">Stephen Anderboard</p>
            <span class="text-gray-500">Managing</span>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-20">

    @include('layouts.blog')

    <div class="flex justify-center items-center mt-16">
      <a href="" class="btn rounded">Explore Blog</a href="">
    </div>

  </div>

  <section class="bg-[#212121] text-white py-14">
    <div class="container flex flex-col md:flex-row items-center md:items-start md:justify-center space-x-12">
      <div class="flex flex-col md:w-1/3">
        <div class="flex items-center gap-5 mb-5">
          <img src="./assets/Logo.svg" alt="" width="40" class="hidden md:inline">
          <p class="font-bold text-lg md:text-xl">Mangcoding Store</p>
        </div>
  
        <p class="max-w-md text-base md:text-lg">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien
          faucibus lectus, vel tempor dolor augue et lectus.
        </p>
        <ul class="flex gap-5 mt-5">
          <li>
            <img src="./assets/Frame 1597882717.png" alt="">
          </li>
          <li>
            <img src="./assets/Frame 1597882718.png" alt="">
          </li>
          <li>
            <img src="./assets/Frame 1597882719.png" alt="">
          </li>
          <li>
            <img src="./assets/Frame 1597882720.png" alt="">
          </li>
        </ul>
      </div>
  
      <div class="grid pt-10 md:grid-cols-3 gap-3 gap-y-8 md:w-2/3">
        <div class="text-base md:text-lg">
          <p class="font-bold py-2">Pages</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Home</li>
            <li>Blog</li>
            <li>Work</li>
          </ul>
        </div>
  
        <div class="text-base md:text-lg">
          <p class="font-bold py-2">Service</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Custom WordPrees Theme Development</li>
            <li>Custom Plugin WordPrees</li>
            <li>Custom Shopify Theme Development/li>
            <li>Custom App for Shopify</li>
            <li>Web Aplication</li>
          </ul>
        </div>

        <div class="text-base md:text-lg">
          <p class="font-bold py-2">Contact</p>
          <ul class="flex flex-col gap-2 space-y-1 mt-3">
            <li>Karang Tengah, Cibadak - Sukabumi</li>
            <li>0266-6532078/ WA:0857-5940-2332</li>
            <li>info@mangcoding.com</li>
          </ul>
        </div>
        
        <div class="col-span-3">
          <p class="font-bold py-2">Trusted partners</p>
          <div class="grid grid-cols-3 gap-5 mt-5 items-center">
            <img src="./assets/trusted 1.png" alt="">
            <img src="./assets/trusted 2.png" alt="">
            <img src="./assets/trusted 3.png" alt="">
            <img src="./assets/trusted 4.png" alt="">
          </div>
        </div>
        
        </div>
      </section>

  <footer class="bg-[#212121] py-5">
    <p class="text-center text-white ">© 2022 Mangcoding. All rights reserved.</p>
  </footer>


  <script src="./js/home.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</body>

</html>