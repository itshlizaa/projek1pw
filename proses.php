<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pengolahan</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $nilai = $_POST['nilai'];

    // Menghitung grade berdasarkan nilai
    if ($nilai >= 80) {
        $grade = "A";
    } elseif ($nilai >= 70) {
        $grade = "B";
    } elseif ($nilai >= 60) {
        $grade = "C";
    } elseif ($nilai >= 50) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    // Hasil lulus atau tidak
    $hasil = $nilai >= 60 ? 'Lulus' : 'Tidak Lulus';
    ?>
    <table>
        <tr>
            <th>Keterangan</th>
            <th>Detail</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><?php echo $prodi; ?></td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td><?php echo $nilai; ?></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td><?php echo $grade; ?></td>
         </tr>
        <tr>
            <td>Hasil</td>
            <td><?php echo $hasil; ?></td>
        </tr>
    </table>
<?php
} else {
    // Jika tidak ada data yang dikirimkan melalui POST
    echo "Tidak ada data yang dikirimkan.";
}
?>
</body>
</html>
