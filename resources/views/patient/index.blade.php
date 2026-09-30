<!DOCTYPE html>
<html lang="en">
    <title>Pasien Main</title>
    <body id="page-top">
    <h1>Tabel Pasien</h1>
    <a href="/patient/tambah">Tambah</a>
    <table border="1" cellpadding="8" style="margin: 20px;">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->date_of_birth }}</td>
                    <td>{{ $patient->phone_number }}</td>
                    <td>{{ $patient->address }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>
                        @if(session('role') === 'admin')
                            <a href="{{ route('patient.edit', $patient) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('patient.destroy', $patient) }}" method="POST">
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
