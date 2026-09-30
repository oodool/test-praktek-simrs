<!DOCTYPE html>
<html lang="en">
    <title>Obat Main</title>
    <body id="page-top">
    <h1>Tabel Obat</h1>
    <a href="/medicine/tambah">Tambah</a>
    <table border="1" cellpadding="8" style="margin: 20px;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($medicines as $medicine)
                <tr>
                    <td>{{ $medicine->name }}</td>
                    <td>{{ $medicine->category }}</td>
                    <td>{{ $medicine->stock }}</td>
                    <td>{{ $medicine->price }}</td>
                    <td>
                        @if(session('role') === 'admin')
                            <a href="{{ route('medicine.edit', $medicine) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('medicine.destroy', $medicine) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/doctor">Dokter</a>
    <a href="/patient">Pasien</a>
    <a href="/appointment">Janji temu</a>
    <a href="/medicine">Obat</a>
    <a href="/medical_record">Riwayat temu</a>

    </body>
</html>
