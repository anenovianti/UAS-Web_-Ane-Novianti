<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>MangCoding Resto</title>
        <link rel="icon" type="image/x-icon" href="{{('assets/img/favicon.ico')}}">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
          <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
          <style type="text/tailwindcss">
            @layer utilities {
              .container {
                @apply max-w-[90%] mx-auto;
              }
        
              .btn {
                @apply bg-[#212121] text-white px-5 py-3 text-center;
              }  
        
              .btn.rounded {
                @apply rounded-full;
              }
        
              .home::before {
              }
        
              .active {
                @apply block;
              }
            }
          </style>
    </head>
    <body class="antialiased">
        <section class="bg-[#74A512] py-2">
            <p class="text-center text-white ">Fast Food and Healthy food, Buy 2 Get 20% Free</p>
          </section>
        
          <header class="">
            <nav class="container relative flex items-center justify-between py-5">
              <a href="">
                <img src="./img/logo.png" alt="">
              </a>
        
              <div class="flex-1 hidden ml-12 space-x-4 md:block">
                <a href="" class="text-[#74A512] font-bold">Home</a>
                <a href="">About Us</a>
                <a href="">Shop</a>
                <a href="">Contact</a>
                <a href="">Blog</a>
              </div>
        
              <div class="flex items-center hidden space-x-6 md:flex">
                  <a href="">
                    <img src="./img/cart (1).png" alt="">
                  </a>
                  <a href="">
                    <img src="./img/search.png" alt="">
                  </a>
                  <a href="" class="flex">
                    <img src="./img/english.png" alt="">
                    <img src="./img/bawah.svg" alt="">
                  </a>
                @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-[#74A512]  focus:shadow-outline hover:bg-green-800">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-[#74A512]  focus:shadow-outline hover:bg-green-800">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-[#74A512]  focus:shadow-outline hover:bg-green-800">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
              </div>
        
              <a href="#" class="hamburger md:hidden">
                <img src="{{('assets/img/hamburger.svg')}}" alt="">
              </a>
        
              <div
                class="absolute inset-x-0 z-40 hidden p-4 bg-white border border-gray-300 rounded-lg shadow-lg popup top-10 right-12 md:hidden">
                <div class="flex space-x-5">
                  <div class="flex items-center w-full h-full px-3 mb-4 space-x-1 border border-gray-400 rounded-full">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
                      <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                        fill="#070D13" />
                    </svg>
                    <input type="text" class="w-full border-none" placeholder="Search ..." />
                  </div>
                  <a href="">
                    <img src="{{('assets/img/cart (1).png')}}" alt="">
                  </a>
                </div>
        
                <div class="flex flex-col space-y-4">
                  <a href="" class="text-[#74A512] font-bold">Home</a>
                  <a href="">About Us</a>
                  <a href="">Shop</a>
                  <a href="">Contact</a>
                  <a href="">Blog</a>
                </div>
        
                <div class="flex flex-col mt-4">
                  <button class="bg-[#74A512] py-3 px-8 text-white">Registration</button>
                </div>
              </div>
            </nav>
          </header>
        
          <section class="container flex flex-col items-center mb-5 lg:flex-row lg:mb-0">
            <div class="flex-1 space-y-8">
              <button class="bg-[#F5FCE8] px-8 py-2 text-[#74A512] rounded-full">Sall Top 20% Off</button>
              <h1 class="relative font-bold leading-none text-7xl">
                <span class="text-[#74A512]">Will</span>
                Give You
                <span class="text-[#74A512]">Satisfation</span>
                in
                <span class="relative home">Food</span>
              </h1>
              <p class="text-xl text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
              </p>
              <div class="flex items-center gap-x-5">
                <button class="bg-[#74A512] py-3 px-8 text-white">Shop Now</button>
                <p class="font-semibold text-lg text-[#74A512] flex gap-x-3">Explore Our Blog <img src="./img/panah.svg" alt="">
                </p>
              </div>
            </div>
        
            <div class="flex space-x-4 flex-1 lg:flex md:bg-[#EAF9CE] w-[486px] h-[590px] items-center justify-center">
              <img class="w-[424px] h-[422px]" src="./img/Hero.png
              
              " alt="">
            </div>
          </section>
        
          <section class="container py-24 gap-y-5">
            <p class="flex items-center justify-center text-4xl text-gray-400">Company Partner</p>
            <div class="grid items-center grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-y-20 gap-x-10">
              <div class="relative">
                <img src="{{('assets/img/partner1.png')}}" class="w-full h-2/3" alt="">
              </div>
        
              <div class="relative">
                <img src="{{('assets/img/partner2.png')}}" class="w-full h-2/3" alt="">
              </div>
        
              <div class="">
                <img src="{{('assets/img/partner3.png')}}" class="w-full h-2/3" alt="">
              </div>
        
              <div class="">
                <img src="{{('assets/img/partner1.png')}}" class="w-full h-2/3" alt="">
              </div>
        
              <div class="">
                <img src="{{('assets/img/partner2.png')}}" class="w-full h-2/3" alt="">
              </div>
        
              <div class="">
                <img src="{{('assets/img/partner3.png')}}" class="w-full h-2/3" alt="">
              </div>
            </div>
          </section>
        
          <div class="container">
            <div class="flex flex-col mt-8 space-y-5 lg:flex-row lg:space-x-5 lg:space-y-0">
              <div class="bg-[#EAF9CE] flex-1 flex items-center justify-center space-x-8 relative rounded">
                <img src="./img/burger1.png" class="hidden w-1/3 h-2/3 md:block" alt="">
        
                <div class="max-w-[387px] space-y-4 py-8">
                  <h3 class="text-4xl font-bold">Fast Food</h3>
                  <p class="text-xl text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse iure vero fuga reiciendis? Quis fugiat ipsam
                    laborum
                  </p>
                  <button class="bg-[#74A512] py-3 px-10 text-white">Buy Now</button>
                </div>
              </div>
        
              <div class="bg-[#FFF7E2] flex-1 flex items-center justify-center space-x-8 relative rounded">
                <img src="./img/spageti.png" class="hidden w-1/3 h-2/3 md:block" alt="">
        
                <div class="max-w-[387px] space-y-4 py-8">
                  <h3 class="text-4xl font-bold">Organic Food</h3>
                  <p class="text-xl text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse iure vero fuga reiciendis? Quis fugiat ipsam
                    laborum
                  </p>
                  <button class="bg-[#74A512] py-3 px-8 text-white">Buy Now</button>
                </div>
              </div>
            </div>
          </div>
        
        
          <section class="container flex flex-col items-center py-20 space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0">
        
            <div class="flex-1 space-y-6">
              <span class="font-semibold text-yellow-500 text-md">About Us</span>
              <h2 class="text-6xl font-bold">MangResto</h2>
              <p class="text-gray-500">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque harum quaerat animi ipsa blanditiis repellat
                nesciunt similique! Tenetur, dolorum nihil facere voluptate sunt aliquam eligendi dolorem non culpa,
                exercitationem ducimus.
              </p>
        
              <div>
                <button class="bg-[#6f814c] py-3 px-8 text-white">Buy Now</button>
              </div>
            </div>
            <img src="./img/burger2.png" class="flex-1 w-1/2" alt="">
          </section>
        
          <div class="container py-20">
            <div class="flex items-center justify-between w-full mb-5">
              <h3 class="text-5xl font-bold">
                Food MangResto
              </h3>
              <a href="" class="w-[350px] h-[48px] text-gray-400">This is the most popular food that is often bought by some
                people, cheap and very healthy for you</a>
            </div>
            <span class="text-[#74A512] text-md font-semibold">Post List</span>
        
            <div class="relative flex items-center justify-between py-1 ">
              <p class="text-center"></p>
              <div class="flex gap-10">
                <p class="text-[#74A512] font-semibold underline underline-offset-8">All Product</p>
                <p class="text-gray-500">Fast Food</p>
                <p class="text-gray-500">Healty Food</p>
              </div>
              <p class="text-center"></p>
            </div>
            
            {{-- <div class="grid grid-cols-1 mt-10 md:grid-cols-2 lg:grid-cols-4 gap-y-28 gap-x-10">
              @foreach ($blogs as $blog)
              <div class="relative">
                <img src="{{ asset($blog->image) }}" class="w-full h-2/3" alt="{{ asset($blog->image) }}">
                <div class="mt-3 ">
                  <div class="flex justify-between">
                    <p class="text-xl font-bold">{{$blog->title}}</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="{{('assets/img/star.svg')}}" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-md">{{$blog->content}}</p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$1000</span>
                  </div>
                </div>
              </div>
              @endforeach
               --}}
              <div class="relative">
                <img src="./img/food2.png" class="w-full h-2/3" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="text-xl font-bold">Swede</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="{{('assets/img/star.svg')}}" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$1000</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./img/food3.png" class="w-full h-2/3" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="text-xl font-bold">Chinese cinnamon</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="{{('assets/img/star.svg')}}" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$1000</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./img/food4.png" class="w-full h-2/3" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="text-xl font-bold">Pepper (C. annuum)</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="{{('assets/img/star.svg')}}" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$1000</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="{{('assets/img/food1.png')}}" class="w-full h-2/3" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="text-xl font-bold">Cucumber</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="{{('assets/img/star.svg')}}" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$1000</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./img/food2.png" class="w-full h-2/3" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="text-xl font-bold">Swede</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="{{('assets/img/star.svg')}}" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$1000</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./img/food3.png" class="w-full h-2/3" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="text-xl font-bold">Chinese cinnamon</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="{{('assets/img/star.svg')}}" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$1000</span>
                  </div>
                </div>
              </div>
        
              <div class="">
                <img src="./img/food4.png" class="w-full h-2/3" alt="">
                <div class="mt-3">
                  <div class="flex justify-between">
                    <p class="text-xl font-bold">Pepper (C. annuum)</p>
                    <p class="flex text-gray-500">
                      <img width="15" src="{{('assets/img/star.svg')}}" class="mr-1" alt="">
                      (2,1)
                    </p>
                  </div>
                  <div>
                    <p class="text-gray-500 text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </p>
                  </div>
                  <div class="flex justify-between">
                    <p class="text-md font-semibold bg-[#F5FCE8] px-2 text-[#74A512]">+ Add</p>
                    <span class="font-bold text-md">$1000</span>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        
          <section class="flex items-center justify-center p-6 mt-20">
            <button class="bg-[#74A512] py-3 px-10 text-white">View More</button>
          </section>
        
          <section class="container py-20">
        
            <div class="flex flex-col space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0 items-center bg-[#FFF7E2] pl-10">
              <div class="flex-1 space-y-6">
                <span class="text-[#74A512] text-md font-semibold">Healty Food</span>
                <h2 class="text-6xl font-bold">Healthy And you Can Enjoy in The Morning</h2>
                <p class="text-gray-500">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget gravida leo, nec iaculis diam.
                </p>
        
                <div>
                  <button class="bg-[#74A512] py-3 px-8 text-white">Shop Now</button>
                </div>
              </div>
              <img src="./img/kentang.png" class="flex-1 w-full" alt="">
            </div>
          </section>
        
          <section class="bg-[#1F2F00] text-white py-14">
            <div
              class="container flex flex-col items-center space-y-5 md:flex-row md:space-y-0 md:items-start md:justify-center space-x-15">
              <div class="flex flex-col gap-5">
                <div class="flex justify-center gap-5 mb-5 md:justify-start">
                  <img src="./img/footer Logo.svg" alt="">
                  <p class="font-bold">Mangcoding Store</p>
                </div>
        
                <p class="max-w-[380px]">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien
                  faucibus lectus, vel tempor dolor augue et lectus.
                </p>
                <ul class="flex justify-center gap-5 mt-5 md:justify-start">
                  <li>
                    <img src="./img/facebook logo.svg" alt="">
                  </li>
                  <li>
                    <img src="./img/Vector.svg" alt="">
                  </li>
                  <li>
                    <img src="./img/linkedin logo.svg" alt="">
                  </li>
                  <li>
                    <img src="./img/instagram logo.svg" alt="">
                  </li>
                </ul>
              </div>
        
              <div class="grid grid-cols-2 md:grid-cols-4 gap-y-8">
                <div>
                  <p class="py-2 text-xl font-bold">Navigation</p>
                  <ul class="flex flex-col gap-5 mt-3 space-y-1">
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Shop</li>
                    <li>Contact</li>
                    <li>Blog</li>
                  </ul>
                </div>
        
                <div>
                  <p class="py-2 text-xl font-bold">Our Product</p>
                  <ul class="flex flex-col gap-5 mt-3 space-y-1">
                    <li>Healty Food</li>
                    <li>Fast Food</li>
                  </ul>
                </div>
        
                <div>
                  <p class="py-2 text-xl font-bold">Form Member</p>
                  <ul class="flex flex-col gap-5 mt-3 space-y-1">
                    <li>Sign in</li>
                    <li>Support</li>
                  </ul>
                </div>
        
                <div>
                  <p class="py-2 text-xl font-bold">Address</p>
                  <ul class="flex flex-col gap-5 mt-3 space-y-1">
                    <li class="flex gap-x-7">
                      <img src="./img/Frame 2201.svg" alt="">
                      4517 Washington Ave. Manchester, Kentucky 3949
                    </li>
                    <li class="flex gap-x-7">
                      <img src="./img/dashicons_email.svg" alt="">
                      hallo@mangresto123@gmail.com
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
        
          <footer class=" bg-[#1F2F00] py-5">
            <div class="container">
              <div class="flex flex-col items-center justify-between gap-y-4 lg:flex-row">
                <p class="text-center text-white ">Mancoding. All Rights Reserved</p>
                <div class="flex text-center text-white gap-x-10">
                  <p>(021) 678-9102</p>
                  <p>Privacy Policy</p>
                  <p>Merchan Agreement</p>
                </div>
              </div>
            </div>
          </footer>
    </body>
</html>