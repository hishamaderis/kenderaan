<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Tambah Rekod Kenderaan</title>

    <style>
    #button{
            margin-left:690px;
            margin-top:10px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <header class="d-flex justidy-content-between my-4">
            <h1>Tambah Rekod Kenderaan</h1>
            <div>
                <a href="index.php" class="btn btn-primary" id="button">Back</a>
            </div>
        </header>

        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="jeniskenderaan" placeholder="Jenis Kenderaan:" required>
            </div>

            <div class="form-element my-4">
                <input type="text" class="form-control" name="pemandu" placeholder="Nama pemandu:">
            </div>

            <div class="form-element my-4">
                <select name="noplatkenderaan" id="" class="form-control">
                    <option value="">Pilih Plat kenderaan</option>
                    <option value="WVS 6424">WVS 6424</option>
                    <option value="VWG 9961">VWG 9961</option>
                    <option value="VQT 2323">VQT 2323</option>
                    <option value="VQR 5652">VQR 5652</option>
                </select>
            </div>

            <div class="form-element my-4">
                <textarea name="catatan" id="" class="form-control" placeholder="Tujuan Menggunakan Kenderaan:"></textarea>
            </div>

            <div class="form-element my-4">
                <input type="submit" name="create" value="Add" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>