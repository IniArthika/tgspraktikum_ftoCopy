<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Harga Photocopy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Foto Copy Sasha</h2>
                <form method="post">
                    <div class="mb-3">
                        <label for="lembar">Masukkan jumlah lembar fotokopi:</label>
                        <input type="number" id="lembar" name="lembar" required>
                    </div>
                    <div class="mb-3">
                        <label for="langganan">Apakah Anda langganan? (ya/tidak):</label>
                        <input type="text" id="langganan" name="langganan" required>
                    </div>
                    <div class="mb-3"></div>
                        <button type="submit">Hitung</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $X = (int)$_POST["lembar"];
        $langganan = strtolower(trim($_POST["langganan"]));

        if ($langganan === "ya") {
            $harga_per_lembar = 75;
        } else {
            $harga_per_lembar = ($X < 100) ? 100 : 85;
        }
        
        $total_harga = $X * $harga_per_lembar;

        echo "<p>Total harga yang harus dibayar: Rp. $total_harga</p>";
    }
    ?>
</body>
</html>