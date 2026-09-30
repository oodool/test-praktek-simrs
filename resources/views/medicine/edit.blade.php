<!DOCTYPE html>
<html>
<head>
    <title>Edit obat</title>
</head>
<body>
    <h1>Edit data obat</h1>
    <form action="/medicine/{{ $medicine->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nama</label>
            <input
                type="text"
                name="name"
                value="{{ $medicine->name }}"
            >
        </div>

        <div>
            <label>Kategori</label>
            <select name="category">
                <option value="Obat bebas" {{ $medicine->category == 'Obat bebas' ? 'selected' : '' }}>
                    Obat bebas
                </option>
                
                <option value="Obat bebas terbatas" {{ $medicine->category == 'Obat bebas terbatas' ? 'selected' : '' }}>
                    Obat bebas terbatas
                </option>

                <option value="Obat keras" {{ $medicine->category == 'Obat keras' ? 'selected' : '' }}>
                    Obat keras
                </option>
            </select>
        </div>

        <div>
            <label>Stok</label>
            <input
                type="number"
                name="stock"
                value= "{{ $medicine->stock }}"
            >
        </div>

        <div>
            <label>Harga</label>
            <input
                type="text"
                name="price"
                value= "{{ $medicine->price }}"
            >
        </div>

        <button type="submit">Update data</button>
    </form>

    <a href="/medicine">Kembali</a>

</body>
</html>