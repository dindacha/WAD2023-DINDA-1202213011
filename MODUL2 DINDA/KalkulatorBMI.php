

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #ffdada;
}
.btn-primary {
    background-color: #E06469;
    color: white;
}
</style>

<body>
    <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kalkulator BMI</h4>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="175">
                            <label for="tinggi_badan">Tinggi Badan (CM)</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="53">
                            <label for="berat_badan">Berat Badan (KG)</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-3 w-100" name="hitung">Hitung BMI</button>
                    </form>

                    <?php
                    if (isset($_POST['hitung'])) {
                        $tinggi_badan = $_POST['tinggi_badan'];
                        $berat_badan = $_POST['berat_badan'];
                        
                        if ($tinggi_badan==null || $berat_badan==null) {
                            echo 'error';
                            $hasil = 'error';
                        } else {
                            $hasil = $berat_badan/($tinggi_badan/100)**2;
                            if ($hasil<= 18.4){
                                echo 'berat badanmu underweight';
                            } elseif ($hasil>= 18.5 and $hasil<=24.9){
                                echo 'berat badanmu normal';
                            } elseif ($hasil>= 25.0 and $hasil<=39.9){
                                echo 'berat badanmu overweight';
                            } elseif ($hasil>= 40){
                                echo 'berat badanmu obese';
                            } else {
                                echo '<div class="alert alert-danger">Operasi tidak valid</div>';
                            }
                        }
                        
                        echo '<div class="alert mt-3" style="background-color: pink;">Hasil perhitungan: ' . $hasil . '</div>';
                    }
                    ?>


                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>