<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BJ Art Blog and Advices</title>
    <meta name="description" content="">
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla {
            font-family: karla;
        }
        .navbar-sticky-top
{
    position: fixed;
    z-index: 999;
    opacity:1;
    width: 100%;
}
        
    </style>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">
    <!-- Text Header -->
  
    <nav class="w-full py-4 border-danger border-t border-bottom-1 bg-gray-500 navbar navbar-default navbar-sticky-top" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="welcome" class="hover:bg-green-500 rounded py-2 px-4 mx-2">Home</a>
                <a href="#" class="hover:bg-green-500 rounded py-2 px-4 mx-2">Paintings</a>
                <a href="#" class="hover:bg-green-500 rounded py-2 px-4 mx-2">Sculptures</a>
                <a href="#" class="hover:bg-green-500 rounded py-2 px-4 mx-2">About me</a>
            </div>
        </div>
    </nav>
    <!-- Topic Nav -->
    <div class="card bg-transparent">
        <img src="/images/header.png" class="card-img" alt="header image">
        <div class="card-img-overlay">
          <header class="w-full container mx-auto">
            <div class="flex flex-col items-center py-12">
                <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl " href="#">
                    Art Blog
                </a>
                <p class="text-lg text-gray-600">
                    {{ \App\Models\TextWidget::getTitle('header-subtitle') }}
                </p>
            </div>
        </header>
        </div>
      </div>
    <div class="container mx-auto flex flex-wrap py-6">

      {{$slot}}

      <aside>
        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">Instagram</p>
            <div class="grid grid-cols-3 gap-3">
                <img class="hover:opacity-75" src="/images/greed.jpg">
                <img class="hover:opacity-75" src="/images/handsof.jpg">
                <img class="hover:opacity-75" src="/images/spring.jpg">
                <img class="hover:opacity-75" src="/images/melting.jpg">
                <img class="hover:opacity-75" src="/images/overthinking.jpg">
                <img class="hover:opacity-75" src="/images/socity.jpg">
                <img class="hover:opacity-75" src="/images/theillusion.jpg">
                <img class="hover:opacity-75" src="/images/thecreator.jpg">
                <img class="hover:opacity-75" src="/images/empty.jpg">
            </div>
            <a href="https://www.instagram.com/bojanajokicart/" class="w-full bg-gray-800 text-white font-bold text-sm uppercase rounded hover:bg-green-700 flex items-center justify-center px-2 py-3 mt-6">
                <i class="fab fa-instagram mr-2"></i> Follow @bojanajokicart
            </a>
        </div>
    </aside>
</div>

<footer class="w-full border-t bg-white pb-12">
    <div
        class="relative w-full flex items-center invisible md:visible md:pb-12"
        x-data="getCarouselData()"
    >
       
        <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
            <img class="w-1/6 hover:opacity-75" :src="image">
        </template>
        
    </div>
    <div class="w-full container mx-auto flex flex-col items-center">
        <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
            <a href="#" class="uppercase px-3">About Me</a>
            <a href="email" class="uppercase px-3">Contact</a>
        </div>
        <div class="uppercase pb-6">&copy; bojanajokicart</div>
    </div>
</footer>
<!--
<script>
    function getCarouselData() {
        return {
            currentIndex: 0,
            images: [
                'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                'https://source.unsplash.com/collection/1346951/800x800?sig=9',
            ],
            increment() {
                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
            },
            decrement() {
                this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
            },
        }
    }
</script>
-->
</body>
</html>