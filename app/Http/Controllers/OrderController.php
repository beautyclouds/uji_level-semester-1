<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function addToOrder(Request $request)
    {
        // Ambil data produk dari request
        $price = $request->input('price');  // Harga produk
        $quantity = $request->input('quantity', 1);  // Jumlah produk (gunakan 1 sebagai default jika tidak ada input)

        // Hitung total harga
        $totalPrice = $price * $quantity;

        // Simpan data ke database
        $order = new Order();
        $order->product_id = $request->input('product_id');
        $order->product_name = $request->input('name');
        $order->price = $price;
        $order->quantity = $quantity;
        $order->total_price = $totalPrice;  // Simpan total harga
        $order->save();

        // Simpan ke session (jika dibutuhkan)
        $orderSession = session()->get('order', []);

        $id = $request->input('product_id');
        if (isset($orderSession[$id])) {
            $orderSession[$id]['quantity']++;  // Tambah kuantitas jika sudah ada di order
            $orderSession[$id]['total_price'] = $orderSession[$id]['quantity'] * $price;  // Update total harga
        } else {
            $orderSession[$id] = [
                "name" => $request->input('name'),
                "price" => $price,
                "quantity" => $quantity,
                "total_price" => $totalPrice  // Simpan total harga
            ];
        }

        session(['order' => $orderSession]);

        return redirect()->route('order.show')->with('success', 'Product added to order!');
    }


    public function showOrder()
    {
        $orders = Order::all(); //Ambil data order dari database
        $grandTotal = $this->calculateTotal(); // Hitung total keseluruhan
        return view('order', compact('orders', 'grandTotal')); //Kirim variabel $order ke view
    }

    public function updateOrder(Request $request)
    {
        $orderSession = session()->get('order');

        $id = $request->input('product_id');
        $quantity = $request->input('quantity');

        if ($quantity <= 0) {
            unset($orderSession[$id]);
        } else {
            $orderSession[$id]['quantity'] = $quantity;
            // Update total price
            $orderSession[$id]['total_price'] = $orderSession[$id]['price'] * $quantity;

            // Update database
            $order = Order::where('product_id', $id)->first();
            if ($order) {
                $order->quantity = $quantity;
                $order->total_price = $order->price * $quantity;
                $order->save();
            }
        }

        session(['order' => $orderSession]);

        return redirect()->route('order.show');
    }

    public function remove($id)
    {
        // Ambil order dari session
        $orderSession = session()->get('order');

        // Hapus produk berdasarkan ID dari session
        if (isset($orderSession[$id])) {
            // Hapus data dari session
            unset($orderSession[$id]);
            session()->put('order', $orderSession);
        }

        // Hapus produk dari database
        $order = Order::where('product_id', $id)->first();
        if ($order) {
            $order->delete(); // Menghapus produk dari database
        }

        // Redirect kembali ke halaman order dengan pesan
        return redirect()->route('order.show')->with('success', 'Produk berhasil dihapus dari order.');
    }


    public function calculateTotal()
    {
        $orders = session('order', []);
        $grandTotal = 0;

        foreach ($orders as $details) {
            $grandTotal += $details['total_price'];
        }   

        return $grandTotal;
    }


    public function placeOrder()
    {
        // Hapus data pesanan dari session
        session()->forget('order');

        // Hapus semua data pesanan dari database
        Order::truncate();

        // Redirect kembali ke halaman order dengan pesan sukses
        return redirect()->route('order.show')->with('success', 'Pesanan berhasil diproses!');
    }

}
