@extends('layout')

@section('titlePage', 'contact')

@section('konten')

<!-- Contact Section -->
<section class="py-16 bg-white">
    <div class="my-5 max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="my-6 text-4xl font-extrabold text-gray-900 md:text-5xl lg:text-6xl">
                Get In Touch
            </h1>
            <p class="my-4 text-lg leading-relaxed text-gray-600">
                Have questions or want to know more about us? We'd love to hear from you!
            </p>
        </div>

        <!-- Success Notification -->
        @if (session('success'))
            <div class="p-4 mt-6 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="p-5 bg-yellow-300 rounded grid grid-cols-1 gap-12 mt-12 md:grid-cols-2">
            <!-- Contact Information -->
            <div class="space-y-10">
                <h2 class="my-3 text-3xl font-bold text-gray-900">Café Information</h2>
                <div>
                    <h3 class="my-3 text-lg font-semibold text-gray-900">
                        Visit Us
                    </h3>
                    <p class="mt-2 text-gray-600">
                        Coffee Bliss, 830 Main Street, Hometown, Country
                    </p>
                </div>
                <div>
                    <h3 class="my-3 text-lg font-semibold text-gray-900">
                        Contact Us
                    </h3>
                    <p class="mt-2 text-gray-600">
                        Phone: <a href="tel:+62234567890" class="text-gray-800 hover:underline">+62 234 567 890</a><br>
                        Email: <a href="mailto:coffee@lhaikicafe.com" class="text-gray-800 hover:underline">coffee@lhaikicafe.com</a>
                    </p>
                </div>
                <div>
                    <h3 class="my-3 text-lg font-semibold text-gray-900">
                        Hours of Operation
                    </h3>
                    <p class="mt-2 text-gray-600">
                        Monday - Sunday: 8:00 AM - 10:00 PM
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="p-8 bg-gray-50 border border-gray-200 rounded-lg shadow-md">
                <h2 class="mb-3 text-3xl font-bold text-gray-900">Contact Us</h2>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your Name</label>
                        <input type="text" id="name" name="name" class="block w-full px-4 py-2 text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-gray-500 focus:border-gray-500" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your Email</label>
                        <input type="email" id="email" name="email" class="block w-full px-4 py-2 text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-gray-500 focus:border-gray-500" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your Message</label>
                        <textarea id="message" name="message" rows="4" class="block w-full px-4 py-2 text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-gray-500 focus:border-gray-500" placeholder="Write your message" required></textarea>
                    </div>
                    <button type="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring-4 focus:ring-gray-300">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection