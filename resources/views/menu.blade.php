<x-layout>
<x-slot:title>
    MENU PAGE
</x-slot>

<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4"></h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf

        <!-- Card 1 -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white shadow-md rounded-lg p-4">
                <img src="{{ asset('assets/images/dimsum-mentai.jpeg') }}" alt="Item 1" class="rounded-md mb-4">
                <h2 class="text-lg font-semibold mb-2">Gyoza Mentai</h2>
                <input type="hidden" name="items[0][nama]" value="Gyoza Mentai">
                <input type="hidden" name="items[0][harga]" value="10000">
                <label for="quantity1" class="block mb-2 text-sm">Quantity:</label>
                <input type="number" id="quantity1" name="items[0][jumlah]" min="1" class="w-full border border-gray-300 rounded p-2">
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <img src="{{ asset('assets/images/gyoza-mentai.jpeg') }}" alt="Item 2" class="rounded-md mb-4">
                <h2 class="text-lg font-semibold mb-2">Dimsum Mentai</h2>
                <input type="hidden" name="items[1][nama]" value="Dimsum Mentai">
                <input type="hidden" name="items[1][harga]" value="20000">
                <label for="quantity2" class="block mb-2 text-sm">Quantity:</label>
                <input type="number" id="quantity2" name="items[1][jumlah]" min="1" class="w-full border border-gray-300 rounded p-2">
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-md rounded-lg p-4">
                <img src="{{ asset('assets/images/wonton-mentai.jpg') }}" alt="Item 3" class="rounded-md mb-4">
                <h2 class="text-lg font-semibold mb-2">Wonton Mentai</h2>
                <input type="hidden" name="items[2][nama]" value="Wonton Mentai">
                <input type="hidden" name="items[2][harga]" value="30000">
                <label for="quantity3" class="block mb-2 text-sm">Quantity:</label>
                <input type="number" id="quantity3" name="items[2][jumlah]" min="1" class="w-full border border-gray-300 rounded p-2">
            </div>
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">
            Add to Cart
        </button>
    </form>
</div>

</x-layout>