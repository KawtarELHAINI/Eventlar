

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased">
                 <nav class="flex justify-between  h-[80px] text-white w-[96.55rem]">

                    <div class="px-5 xl:px-12 py-6 flex w-full items-center ">
                        <a  href="#">
                            <img class="flex flex-shrink-0 text-gray-800 mr-16" src="./images/logo.png"
                            alt="" width="100" height="100">
                    
                        </a>
                        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                            <li><a class="text-white" href="#">Our Event</a></li>
                            <li><a class="text-white" href="#">our location</a></li>
                            <li><a class="text-white" href="#">Faq</a></li>
                            <li><a class="text-white" href="#">Our Company</a></li>
                        </ul>
                    
                        <a href="/login"class="p-2 mr-4 px-10 bg-pink-400 hover:bg-black hover:text-white rounded-lg">login</button>
                        <a href="/registerr" class="p-2 px-10 bg-pink-400 hover:bg-black hover:text-white rounded-lg">register</a>
                    </div>
                    
                    <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </a>
                    
                    </nav>
   
                    <div class="banner fixed inset-0 z-[-40]"> <video autoplay muted loop> <source src="images/party.mp4" type="video/mp4"> </video> </div>

                        <div class="hero-content text-center text-neutral-content">
                            <div class="max-w-l mt-52">
                                <h1 class="mb-5 text-5xl text-white">Welcome to Event<span  class="text-pink-400">Lar</span></h1>
                                <p class="mb-5 font-bold text-white">What are you waiting !hurry up and reserve your place <span  class="text-pink-400"></p>
                            </div>
                        </div>
                
                    <script src="https://cdn.tailwindcss.com"></script>
                </body>
                
                </html>

