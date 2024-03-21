@extends('layout.main')
@section('content')
<div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl mb-4">Buku Tamu</h2>
    <form id="guestForm" class="mb-4">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
            <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="mb-4">
            <label for="instansi" class="block text-gray-700 font-bold mb-2">Instansi</label>
            <input type="text" id="instansi" name="instansi" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Masukkan Instansi Anda" required>
        </div>
        <div class="mb-4">
            <label for="date" class="block text-gray-700 font-bold mb-2">Tanggal Akses</label>
            <input type="date" id="date" name="date" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" placeholder="Masukkan Instansi Anda" required>
        </div>
        <button class="inline-block w-full px-6 py-3 my-4 text-xs font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102" type="submit">Daftar</button>
    </form>
    <table id="guestList" class="w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 bg-gray-200">Nama</th>
                <th class="px-4 py-2 bg-gray-200">Instansi</th>
                <th class="px-4 py-2 bg-gray-200">Tanggal Akses</th> 
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>

<script>
    document.getElementById('guestForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const instansi = document.getElementById('instansi').value;
        
        const currentDate = new Date();
        const dateString = currentDate.toLocaleDateString();

        const guestList = document.getElementById('guestList').getElementsByTagName('tbody')[0];
        const newRow = guestList.insertRow();
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2); 
        cell1.textContent = name;
        cell2.textContent = instansi;
        cell3.textContent = dateString; 

        document.getElementById('name').value = '';
        document.getElementById('instansi').value = '';
    });
</script>
@endsection
