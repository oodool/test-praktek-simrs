<!DOCTYPE html>
<html lang="en">
    <title>Dokter Main</title>
    <body id="page-top">
    <h1>Tabel Doktor</h1>
    <a href="/doctor/tambah">Tambah</a>
    <table border="1" cellpadding="8" style="margin: 20px;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Tanggal Bergabung</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->specialization }}</td>
                    <td>{{ $doctor->phone_number }}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->joined_date }}</td>
                    <td>
                        @if(session('role') === 'admin')
                            <a href="{{ route('doctor.edit', $doctor) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('doctor.destroy', $doctor) }}" method="POST">
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
