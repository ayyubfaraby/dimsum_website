<x-layout>
<x-slot:title>
    CART PAGE
</x-slot>

<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">YOUR CART</h1>
    <table class="min-w-full bg-white border rounded-lg shadow">
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="py-2 px-4 border">Nama</th>
                <th class="py-2 px-4 border">Harga</th>
                <th class="py-2 px-4 border">Jumlah</th>
                <th class="py-2 px-4 border">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0; // Untuk menyimpan total harga keseluruhan
            @endphp
            @forelse($carts as $cart)
                @php
                    $subtotal = $cart->harga * $cart->jumlah; // Hitung subtotal per item
                    $total += $subtotal; // Tambahkan subtotal ke total
                @endphp
                <tr>
                    <td class="py-2 px-4 border">{{ $cart->nama }}</td>
                    <td class="py-2 px-4 border">Rp {{ number_format($cart->harga, 0, ',', '.') }}</td>
                    <td class="py-2 px-4 border">{{ $cart->jumlah }}</td>
                    <td class="py-2 px-4 border">Rp {{ number_format($subtotal, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-2 px-4 text-center">No items in cart.</td>
                </tr>
            @endforelse
        </tbody>
        @if($carts->isNotEmpty())
            <tfoot>
                <tr class="font-bold bg-gray-100">
                    <td colspan="3" class="py-2 px-4 border text-right">Total:</td>
                    <td class="py-2 px-4 border">Rp {{ number_format($total, 0, ',', '.') }}</td>
                </tr>
            </tfoot>
        @endif
    </table>
</div>

</x-layout>
