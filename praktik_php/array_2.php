<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-size: 18px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: black;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid grey;
            background-color: #F27BBD;
        }
        th {
            background-color: #874CCC;
            color:  black;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #10439F;
        }
        h2 {
            text-align: center;
            color: black;
        }
    </style>
</head>

<body>
<?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>

    <h2>Data Dosen</h2>
    <table>
        <tr>
            <th>Nama</th>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <th>Domisili</th>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>

        
</body>
</html>