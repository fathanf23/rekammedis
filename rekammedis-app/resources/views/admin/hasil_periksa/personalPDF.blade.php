<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laporan Pemeriksaan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .section-title {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Hasil Pemeriksaan</h2>
        <p>No Pendaftaran: {{ $hasil_periksa->no_pendaftaran }}</p>
        <p>Tanggal: {{ date('d-m-Y', strtotime($hasil_periksa->tgl_daftar)) }}</p>
    </div>

    <div class="section-title">Data Pasien</div>
    <table class="table">
        <tr>
            <th>Nama Pasien</th>
            <td>{{ $hasil_periksa->nm_pasien }}</td>
        </tr>
        <tr>
            <th>Pembayaran</th>
            <td>{{ $hasil_periksa->pembayaran }}</td>
        </tr>
    </table>

    <div class="section-title">Detail Pemeriksaan</div>
    <table class="table">
        <tr>
            <th>Anamnesia</th>
            <td>{{ $hasil_periksa->anamnesia }}</td>
        </tr>
        <tr>
            <th>Alergi</th>
            <td>{{ $hasil_periksa->alergi }}</td>
        </tr>
        <tr>
            <th>Keterangan Tambahan</th>
            <td>{{ $hasil_periksa->keterangan_tambahan }}</td>
        </tr>
        <tr>
            <th>Harga Akhir</th>
            <td>Rp {{ number_format($hasil_periksa->harga_akhir, 0, ',', '.') }}</td>
        </tr>
    </table>

    <div class="section-title">Diagnosa</div>
    <table class="table">
        <tr>
            <th>Kode Diagnosa</th>
            <td>{{ $hasil_periksa->diagnosa }}</td>
        </tr>
    </table>

    <div class="section-title">Layanan</div>
    <table class="table">
        <tr>
            <th>Nama Layanan</th>
            <td>{{ $hasil_periksa->layanan }}</td>
        </tr>
    </table>
</body>
</html>
