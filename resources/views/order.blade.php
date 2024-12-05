@extends('layout')

@section('titlePage', 'Order')

@section('konten')
    <div class="container mx-auto">
        <h1 class="text-center text-4xl font-extrabold my-6">Your Order</h1>

        @php
            $order =  session('order', []); //ambil data order dari session 
        @endphp
        @if(count($order) > 0)
            @foreach($order as $id => $details)
                <div class="flex justify-between items-center mb-4">
                    <div>
                    <h2 class="text-3xl font-bold text-yellow-800">{{ $details['name'] }}</h2>  <!-- Perbaikan akses data -->
                        <p class="text-xl font-semibold">Price: <span class="text-green-600 text-xl">Rp. {{ number_format($details['price'], 0, ',', '.') }}</span></p>
                        <p class="text-xl font-semibold">Jumlah: {{ $details['quantity'] }}</p>
                        <p class="text-2xl font-semibold">Total: <span class="text-green-600 text-2xl">Rp. {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</span></p> <!-- Menghitung total di sini -->
                    </div>
                    <div class="flex items-center">
                        <form action="{{ route('order.update') }}" method="POST" class="flex items-center mr-2">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $id }}">
                            <input type="number" name="quantity" value="{{ $details['quantity'] }}" class="w-16 text-center border rounded">
                            <button type="submit" class="mx-4 focus:outline-none text-white bg-blue-700 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-500 dark:hover:bg-blue-700 dark:focus:ring-blue-900">Update</button>
                        </form>

                        <!-- Form untuk menghapus produk -->
                        <form action="{{ route('order.remove', $id) }}" method="POST" onsubmit="return confirm('Hapus produk ini dari order?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <!-- Total Keseluruhan -->
            <div class="flex justify-end my-6">
                <h3 class="text-3xl font-bold">Total Keseluruhan: 
                    <span class="text-green-600">Rp. {{ number_format($grandTotal, 0, ',', '.') }}</span>
                </h3>

                <!-- Tombol Pesan di bawah Total Keseluruhan -->
                <form action="{{ route('order.place') }}" method="POST" onsubmit="return confirmOrder();">
                    @csrf
                    <button type="submit" class="mx-4 focus:outline-none text-white bg-green-500 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-900">
                        Pesan
                    </button>
                </form>
            </div>
            
        @else
            <div class="flex justify-center items-center">
                <p class=" mt-3 mb-5 w-1/2 text-center focus:outline-none text-red-700 bg-red-100  focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-red-600 ">No items in your order.</p>
            </div>
        @endif
    </div>

    <!-- JavaScript untuk Alert -->
    <script>
        function confirmOrder() {
            alert("Pesanan Anda sedang dibuat dan akan segera diantar, Terimakasih!😊");
            return true; // Lanjutkan proses form submission
        }
    </script>
@endsection
