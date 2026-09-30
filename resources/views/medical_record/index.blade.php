<!DOCTYPE html>
<html lang="en">
    <title>Riwayat temu Main</title>
    <body id="page-top">
    <h1>Tabel Riwayat temu</h1>
    <a href="/medical_record/tambah">Tambah</a>
    <table border="1" cellpadding="8" style="margin: 20px;">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Dokter</th>
                <th>Pasien</th>
                <th>Diagnosis</th>
                <th>Pengobatan</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($medical_records as $medical_record)
                <tr>
                    <td>{{ $medical_record->date }}</td>
                    <td>{{ $medical_record->doctor }}</td>
                    <td>{{ $medical_record->patient }}</td>
                    <td>{{ $medical_record->diagnosis }}</td>
                    <td>{{ $medical_record->treatment }}</td>
                    <td>{{ $medical_record->notes }}</td>
                    <td>
                        @if(session('role') === 'admin')
                            <a href="{{ route('medical_record.edit', $medical_record) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('medical_record.destroy', $medical_record) }}" method="POST">
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
