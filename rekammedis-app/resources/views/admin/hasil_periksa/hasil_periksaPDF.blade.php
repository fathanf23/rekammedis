<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Pasien</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Laporan Data Pemeriksaan Pasien</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>No Pendaftaran</th>
                <th>Nama Pasien</th>
                <th>Pembayaran</th>
                <th>Taggal Daftar</th>
                <th>Anamnesia</th>
                <th>Alergi</th>
                <th>Keterangan Tambahan</th>
                <th>Harga Akhir</th>
                <th>Kode Diagnosa</th>
                <th>Layanan</th>
                
    </tr>
        </thead>
        <tbody>
    @foreach($hasil_periksa as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->no_pendaftaran }}</td>
            <td>{{ $item->nm_pasien }}</td>
            <td>{{ $item->pembayaran}}</td>
            <td>{{ $item->tgl_daftar}}</td>
            <td>{{ $item->anamnesia }}</td>
            <td>{{ $item->alergi }}</td>
            <td>{{ $item->keterangan_tambahan }}</td>
            <td>Rp {{ number_format($item->harga_akhir, 0, ',', '.') }}</td>
            <td>{{ $item->diagnosa }}</td>
            <td>{{ $item->layanan }}</td>
        </tr>
    @endforeach
</tbody>

    </table>
</body>

</html>