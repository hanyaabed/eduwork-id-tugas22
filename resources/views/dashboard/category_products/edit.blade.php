<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kategori Produk') }}
        </h2>
    </x-slot>
    <div class="container py-5">
        <div class="card">
            <div class="card-body">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                            placeholder="Masukkan nama kategori" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Kategori</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>