@extends('layout')

@section('titlePage', 'about')

@section('konten')

<!-- Hero Section -->
<section class="relative bg-gray-50 dark:bg-gray-900">
    <!-- Background Image -->
    <div class="relative h-screen">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/about.jpeg');">
            <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        </div>
        <div class="relative z-10 flex flex-col items-start justify-center h-full px-8 max-w-screen-xl mx-auto">
            <h1 class="text-5xl font-extrabold text-white lg:text-7xl">
                Great Coffee For Some Joy
            </h1>
            <p class="mt-4 text-lg font-medium text-gray-300 max-w-lg">
                Discover the taste of freshly brewed coffee crafted with precision and love. Let us bring joy to your day with a cup of perfection.
            </p>
            <a href="{{ route('menu') }}" class="px-6 py-3 mt-6 text-lg font-bold text-white bg-yellow-600 rounded-lg hover:bg-yellow-500">
                See Menu
            </a>
        </div>
    </div>
</section>

<!-- Specialty Section -->
<section id="specialty" class="py-16 bg-white dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-center my-6 font-serif mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Our Specialty
            </h1>
            <p class="mt-4 text-lg leading-relaxed text-gray-600 dark:text-gray-400">
                A collection of premium coffees crafted to perfection, just for you.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
            <!-- Cold Brew Classic -->
            <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md">
                <img src="/images/drink/d7.jpeg" alt="Espresso Coffee" class="w-full h-48 rounded-lg object-cover">
                <h3 class="mt-4 text-xl font-bold text-gray-800 dark:text-white">Cold Brew Classic</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    A rich and bold coffee that awakens your senses with its intense flavor.
                </p>
            </div>

            <!-- Steak Moow -->
            <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md">
                <img src="/images/mainc/m6.jpeg" alt="American Coffee" class="w-full h-48 rounded-lg object-cover">
                <h3 class="mt-4 text-xl font-bold text-gray-800 dark:text-white">Steak Moow</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    A dish made from grilled or pan-fried beef, typically served with sauce and sides like potatoes or vegetables.
                </p>
            </div>

            <!-- Lapis Legit -->
            <div class="p-6 bg-gray-100 dark:bg-gray-700 rounded-lg shadow-md">
                <img src="/images/appatizer/a1.jpeg" alt="Cappuccino Coffee" class="w-full h-48 rounded-lg object-cover">
                <h3 class="mt-4 text-xl font-bold text-gray-800 dark:text-white">Lapis Legit</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    A traditional Indonesian layered cake with a rich, sweet flavor and a distinctive spice aroma.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Review -->
<section>
    <h1 class="text-center my-6 font-serif mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Customer Review</h1>
    <div class="flex items-center justify-center">
        <div class="mx-4 my-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/cus/minju.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kim Minju - ex-IZONE</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pelayanan yang ramah dan suasana café yang homey membuat saya betah berlama-lama di sini. Highly recommended!</p>
            </div>
        </div>

        <div class="mx-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/cus/yeri.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kim Yerim - Red Velvet</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Saya sudah mencoba berbagai tempat, tapi rasa di Lha Iki Café tidak ada duanya. Recommended banget!</p>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center">
        <div class="mx-4 my-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/cus/yujin.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ahn Yujin - IVE</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lha Iki Café punya suasana yang nyaman dan cozy. Tempat yang pas untuk nongkrong atau kerja sambil menikmati kopi!</p>
            </div>
        </div>

        <div class="mx-4 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/cus/wony.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jang Wonyoung - IVE</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Makanan dari Lha Iki Café benar-benar enak dan berkualitas! Selalu menjadi pilihan favorit anggota saya. Pelayanannya juga sangat ramah!</p>
            </div>
        </div>
    </div>
</section>

@endsection