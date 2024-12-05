@extends('layout')

@section('titlePage', 'home')

@section('konten')

    <div class="flex items-center">
        <div class="justify-center mx-2">
            <h4 class="mb-4 mt-4 ml-2 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl lg:text-4xl dark:text-white">Enjoy <span class="text-yellow-400 dark:text-yellow-500">Delicious Food</span> In Your Life</h4>
            <p class="mb-4 ml-2 text-lg font-normal text-gray-500 dark:text-gray-400">This is a type of cafe which serves food and drinks, in addition to light refreshments such as baked goods or snacks. We also provide mian dishes from Indonesia and other countries.</p>
        </div>
        <div class="image mx-2">
            <img class="h-auto max-w-lg rounded-lg" src="{{ asset('images/serokkopi.png') }}" alt="image description">
        </div>
    </div>

    <div class="text-center">
        <h1 class="font-serif mb-4 text-4xl font-extrabold leading-none tracking-tight text-yellow-500 md:text-5xl lg:text-6xl dark:text-white">We Serves</h1>
    </div>
    
    <div class="flex items-center justify-center mx-2 my-2">
        <div class="mx-4 my-2 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/appatizer.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Appartizer</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Hidangan pembuka yang menggugah selera makan.</p>
                <a href="{{ route('menu') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="mx-4 my-2 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/main_course.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Main Course</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sajian utama lengkap yang mengenyangkan dan lezat.</p>
                <a href="{{ route('menu') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>

    <div class="flex items-center justify-center mx-2 my-2">
        <div class="mx-4 my-2 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/dessert.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dessert</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Hidangan penutup manis atau menyegarkan dinikmati.</p>
                <a href="{{ route('menu') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="mx-4 my-2 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/drink.jpeg') }}" alt="" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Drink</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Minuman yang menyegarkan atau menghangatkan suasana.</p>
                <a href="{{ route('menu') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>

    <div class="text-center">
        <h1 class="font-serif mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-700 md:text-5xl lg:text-6xl dark:text-white">Why Choose Us?</h1>
    </div>

    <div class="flex items-center justify-center">
        <div class="my-3 ml-2 mr-2 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-10 h-10 text-gray-500 dark:text-gray-400 mb-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20 2H4a1 1 0 0 0-1 1v4a5 5 0 0 0 4 4.9V14a6 6 0 0 0 5 5.91V22h-3a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2h-3v-2.09A6 6 0 0 0 17 14v-2.1a5 5 0 0 0 4-4.9V3a1 1 0 0 0-1-1ZM5 7V4h3v6.92A3 3 0 0 1 5 7Zm14 0a3 3 0 0 1-3 2.92V4h3v3Z"/>
            </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Quality Food</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Kami menghadirkan makanan berkualitas tinggi dengan bahan pilihan terbaik yang dibuat dengan teliti untuk memastikan kesegaran dan cita rasa yang autentik.</p>
        </div>
        

        <div class="my-3 ml-2 mr-2 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-10 h-10 text-gray-500 dark:text-gray-400 mb-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
            </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Super Taste</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Rasakan kenikmatan sejati! Setiap gigitan menawarkan perpaduan rasa yang sempurna, menghadirkan pengalaman kuliner yang tak terlupakan.</p>
        </div>

        <div class="my-3 ml-2 mr-2 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-10 h-10 text-gray-500 dark:text-gray-400 mb-3" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path d="M21 7h-4.5V6c0-.552-.448-1-1-1H6c-.552 0-1 .448-1 1v1H3c-.553 0-1 .447-1 1v12c0 .553.447 1 1 1h15c.553 0 1-.447 1-1V8c0-.553-.447-1-1-1zM6 6h12v1H6V6zm9 10H9v-2h6v2zm4-4H5V9h14v3z"/>
            </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Fast Delivery</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Kami memastikan makanan favorit Anda sampai dengan cepat dan dalam kondisi terbaik. Layanan pengiriman cepat untuk kepuasan maksimal!</p>
        </div>

    </div>

@endsection