<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            display: flex;
            flex-direction: row;
            gap: 10px;
            margin-bottom: 15px;
            padding-top: 20px;
        }
        .form-group label {
            font-size: 15px;
            color: #333;
            align-self: center;
        }
        .form-group input[type="number"],
        .form-group input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
        }
        .form-group .submit-group {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .form-group input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .results {
            margin-top: 20px;
        }
        .results p {
            font-size: 16px;
        }
    </style>

<script>
    function validateForm() {
        var percent1 = parseFloat(document.getElementById('percent1').value);
        var percent2 = parseFloat(document.getElementById('percent2').value);
        var percent3 = parseFloat(document.getElementById('percent3').value);

        var total = percent1 + percent2 + percent3;

        if (total !== 100) {
            alert('Total persentase harus tidak boleh lebih dan kurang dari 100%');
            return false;
        }
        return true;
    }
    </script>

</head>
<body>
    <div class="form-container">
        <?php foreach($mean_salary as $ms){ ?>
        <form id="form" action="<?php echo base_url(). 'index.php/edit_aksi'; ?>" onsubmit="return validateForm()" method="post">
            <div class="form-group">
                <label for="pembayaran">Pembayaran</label>
                <input type="number" id="pembayaran" name="pembayaran" value="<?php echo $ms->pembayaran ?>" required>
            </div>

            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $ms->id ?>">
                <label for="nama1">Nama</label>
                <input type="text" id="nama1" name="nama1" value="<?php echo $ms->karyawan_1 ?>" required>
                <label for="percent1">Persentase</label>
                <input type="number" id="percent1" name="percent1"  value="<?php echo $ms->percent_1 ?>" required>
                <p>%</p>
            </div>

            <div class="form-group">
                <label for="nama2">Nama</label>
                <input type="text" id="nama2" name="nama2" value="<?php echo $ms->karyawan_2 ?>" required>
                <label for="percent2">Persentase</label>
                <input type="number" id="percent2" name="percent2" value="<?php echo $ms->percent_2 ?>" required>
                <p>%</p>
            </div>

            <div class="form-group">
                <label for="nama3">Nama</label>
                <input type="text" id="nama3" name="nama3" value="<?php echo $ms->karyawan_3 ?>"  required>
                <label for="percent3">Persentase</label>
                <input type="number" id="percent3" name="percent3" value="<?php echo $ms->percent_3 ?>" required>
                <p>%</p>
            </div>

            
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>

        </form>
        <?php } ?>
    </div>
</body>
</html>
