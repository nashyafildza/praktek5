@extends('layout.main')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <h1 class="text-3xl font-bold mb-4">Product List</h1>

    <!-- Product Card Grid -->
    <div class="flex inline-block">
        <!-- Product Card -->
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="https://dl.kaskus.id/1.bp.blogspot.com/-Eihd7I3OaY4/VRNKJaUF0VI/AAAAAAAACto/lTSdV5OuTQ8/s1600/Milk-Carton-Print-Packaging-Tutorial-InstaTuts-final-image.png" alt="Product Image" class="w-10 h-10 object-cover mb-4 rounded-lg">
            <h2 class="text-lg font-semibold mb-2">Susu Sapi Fresh Milk</h2>
            <p class="text-gray-400 text-sm mb-2">Asli dari sapi australia</p>
            <div class="flex items-center">
                <span class="text-gray-900 font-bold">Rp 50.000</span>
            </div>
            <div class="mt-4">
                <button class="inline-block w-50 px-6 py-3 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102" type="button">Add to Cart</button>
            </div>
        </div>
        <!-- End Product Card -->

        <!-- Product Card -->
        <div class="bg-white shadow-md p-4 rounded-lg">
            <img src="https://media.istockphoto.com/id/1194892662/id/vektor/desain-kemasan-susu.jpg?s=1024x1024&w=is&k=20&c=EY3lSiCDa6vkQu_g_OpvLTHtkuBr5xQtT0-s9Bww3yQ=" alt="Product Image" class="w-10 h-10 object-cover mb-4 rounded-lg">
            <h2 class="text-lg font-semibold mb-2">Susu sapi premium</h2>
            <p class="text-gray-400 text-sm mb-2">Diperah dari sapi pilihan</p>
            <div class="flex items-center">
                <span class="text-gray-900 font-bold">Rp 75.000</span>
            </div>
            <div class="mt-4">
                <button class="inline-block w-50 px-6 py-3 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102" type="button">Add to Cart</button>
            </div>
        </div>
        <!-- End Product Card -->
    </div>
    <!-- End Product Card Grid -->
</div>
@endsection
