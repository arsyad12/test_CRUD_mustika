<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data List Persentase Payment Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>DATA LIST PERSENTASE PAYMENT GAJI</h1>
    <center><a href="<?= site_url('tambah_data') ?>" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #fff; text-decoration: none; border-radius: 4px;">Tambah Data</a></center>
    
	<table>
        <tr>
            <th>No</th>
            <th>Karyawan 1</th>
            <th>Karyawan 2</th>
            <th>Karyawan 3</th>
            <th>Percent Karyawan 1</th>
            <th>Percent Karyawan 2</th>
            <th>Percent Karyawan 3</th>
            <th>Gaji Karyawan 1</th>
            <th>Gaji Karyawan 2</th>
            <th>Gaji Karyawan 3</th>
            <th>Pembayaran</th>
            <th>Action</th>
        </tr>
        <?php 
        $no = 1;
        foreach($mean_salary as $ms) { 
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $ms->karyawan_1 ?></td>
            <td><?php echo $ms->karyawan_2 ?></td>
            <td><?php echo $ms->karyawan_3 ?></td>
            <td><?php echo $ms->percent_1 ?>%</td>
            <td><?php echo $ms->percent_2 ?>%</td>
            <td><?php echo $ms->percent_3 ?>%</td>
            <td><?php echo $ms->gaji_karyawan_1 ?></td>
            <td><?php echo $ms->gaji_karyawan_2 ?></td>
            <td><?php echo $ms->gaji_karyawan_3 ?></td>
            <td><?php echo $ms->pembayaran ?></td>
            <td style="display:flex; gap: 10px;">
                <?php echo anchor('edit_data/'.$ms->id, 'Edit'); ?>
                <?php echo anchor('page/hapus/'.$ms->id,'Hapus'); ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
