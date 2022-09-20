<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navbar goes here -->
    <nav class="bg-yellow-400 shadow-lg">
        <div class="px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="#" class="flex items-center py-4">
                            <div class="w-52">
                                <img class="object-contain" src="logo.png" />
                            </div>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-5 text-xl">
                        <a href="" class="py-4 px-2 text-red-500 font-semibold ">Home</a>
                        <a href="" class="py-4 px-2 text-black font-semibold hover:text-red-500 transition duration-300">Vestigingen</a>
                        <a href="" class="py-4 px-2 text-black font-semibold hover:text-red-500 transition duration-300">Producten</a>
                        <a href="" class="py-4 px-2 text-black font-semibold hover:text-red-500 transition duration-300">Vacatures</a>
                    </div>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class=" w-6 h-6 text-black hover:text-red-500 " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-red-500 font-semibold">Home</a></li>
                <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Services</a></li>
                <li><a href="#about" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">About</a></li>
                <li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Contact Us</a></li>
            </ul>
        </div>
        <script>
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });
        </script>
    </nav>
</body>

</html>