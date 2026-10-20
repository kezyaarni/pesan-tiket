<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Tambah Ticket</h2>
    </x-slot>

    <div class="py-12 max-w-2xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-sm border">
            @csrf
            
            <div class="mb-4">
                <label class="block font-medium mb-1">Nama Ticket</label>
                <input type="text" name="title" value="{{ old('title') }}" class="w-full border rounded p-2 @error('title') border-red-500 @enderror" required>
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1">Kategori</label>
                <select name="category" class="w-full border rounded p-2 @error('category') border-red-500 @enderror" required>
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Musik" {{ old('category') == 'Musik' ? 'selected' : '' }}>Musik</option>
                    <option value="Festival" {{ old('category') == 'Festival' ? 'selected' : '' }}>Festival</option>
                    <option value="Seminar" {{ old('category') == 'Seminar' ? 'selected' : '' }}>Seminar</option>
                </select>
                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1">Harga (Rp)</label>
                <input type="number" name="ticket_price" value="{{ old('ticket_price') }}" class="w-full border rounded p-2 @error('ticket_price') border-red-500 @enderror" required>
                @error('ticket_price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1">Deskripsi</label>
                <textarea name="description" class="w-full border rounded p-2 @error('description') border-red-500 @enderror" rows="3" required>{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-medium mb-1">Gambar Ticket</label>
                <input type="file" name="image" class="w-full border rounded p-2 @error('image') border-red-500 @enderror" accept="image/*">
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center gap-2">
                <button type="submit" class="bg-green-600 hover:bg-green-700 px-6 py-2.5 rounded font-semibold">Simpan Data</button>
                <a href="{{ route('admin.events.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2.5 rounded font-semibold inline-block">Batal</a>
            </div>
        </form>
    </div>
</x-app-layout>