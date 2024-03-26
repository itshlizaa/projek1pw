<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            max-width: 300px; /* Adjust as needed */
            margin: 0 auto; /* Centers the form horizontally */
        }
        label {
            margin-bottom: 5px; /* Adds some space between labels */
        }
        input, button {
            margin-bottom: 10px; /* Adds space between input elements */
        }
    </style>
</head>
<body>
    <form method="post" action="proses.php">
        <label for="nama">Nama Mahasiswa:</label>
        <input type="text" id="nama" name="nama">

        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi">

        <label for="nim">nim:</label>
        <input type="text" id="nim" name="nim">

        <label for="nilai">Nilai:</label>
        <input type="number" id="nilai" name="nilai">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
