<?php
    ini_set('display_errors',0);
    $jawabanBenar = ["74","6","16","2","29","7","45","5","97","8","42","3"];

    $jawaban1 = $_POST["jawaban1"];
    $jawaban2 = $_POST['jawaban2'];
    $jawaban3 = $_POST['jawaban3'];
    $jawaban4 = $_POST['jawaban4'];
    $jawaban5 = $_POST['jawaban5'];
    $jawaban6 = $_POST['jawaban6'];
    $jawaban7 = $_POST['jawaban7'];
    $jawaban8 = $_POST['jawaban8'];
    $jawaban9 = $_POST['jawaban9'];
    $jawaban10 = $_POST['jawaban10'];
    $jawaban11 = $_POST['jawaban11'];
    $jawaban12 = $_POST['jawaban12'];

    $benar = 0;
    $salah = 0;

    if($jawaban1 == $jawabanBenar[0]){
        $benar++;
    }

    if($jawaban2 == $jawabanBenar[1]){
        $benar++;
    }

    if($jawaban3 == $jawabanBenar[2]){
        $benar++;
    }
    if($jawaban4 == $jawabanBenar[3]){
        $benar++;
    }
    if($jawaban5 == $jawabanBenar[4]){
        $benar++;
    }
    if($jawaban6 == $jawabanBenar[5]){
        $benar++;
    }
    if($jawaban7 == $jawabanBenar[6]){
        $benar++;
    }
        if($jawaban8 == $jawabanBenar[7]){
        $benar++;
    }
    if($jawaban9 == $jawabanBenar[8]){
        $benar++;
    }
    if($jawaban10 == $jawabanBenar[9]){
        $benar++;
    }
    if($jawaban11 == $jawabanBenar[10]){
        $benar++;
    }
    if($jawaban12 == $jawabanBenar[11]){
        $benar++;
    }

    $salah = 12-$benar;

    if($benar == 0){
        $hasil = "Waduh Segera Ke Dokter";
    } elseif($benar <= 5){
        $hasil = "Sebaiknya Ke Dokter";
    } elseif($benar <= 7){
        $hasil = "Sehat";
    } elseif($benar >= 8){
        $hasil = "Kamu Hebat";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis Mata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        .answer{
            width: 22rem;
        }

        img{
            box-shadow: 5px 5px 5px 5px rgb(0,0,0, 0.2);
            border-radius: 100%;
        }

        .container-title, .col-4{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="display:grid; place-items:center; height:650px; background-color:rgb(245,245,245);">
        <div class="container" style="display:grid; place-items:center;">
            <div class="answer p-5 text-white fw-medium" style="border-radius:50px; background-color:rgb(45, 72, 91);">
                <h3 class="text-center fw-semibold" style="font-family: Montserrat, sans-serif">Hasil Soal</h3>
                <hr class="mb-4 pb-1">
                <?php
                    echo "<p>Jumlah Jawaban Yang Benar: $benar</p>";
                    echo "<p>Jumlah Jawaban Yang Salah: $salah</p>";
                    echo $hasil;
                ?>

                <div class="d-flex justify-content-between mt-4">
                    <form action="kuis_mata.php">
                        <input type="submit" value="Go Back" class="btn btn-secondary" style="width:125px;">
                    </form>

                    <a href="#hasil">
                        <button class="btn btn-danger" style="width:125px;">Check Answer</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center pt-5 pb-5" style="background-color:rgb(245,245,245);" id="hasil">
        <div class="container-title">
            <h2 style="font-family: Montserrat, sans-serif; font-weight:600;">Hasil Soal</h2>
            <hr width="200px">
        </div>
        <div class="container mt-4">
            <form action="jawaban_benar_kuis_mata.php" method="post">
                <div class="row">
                    <div class="col-4">
                        <img src="aset/2.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban1;?></h4>
                    </div>

                    <div class="col-4">
                        <img src="aset/3.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban2;?></h4>
                    </div>

                    <div class="col-4">
                        <img src="aset/4.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban3;?></h4>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-4">
                        <img src="aset/5.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban4;?></h4>
                    </div>

                    <div class="col-4">
                        <img src="aset/6.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban5;?></h4>
                    </div>

                    <div class="col-4">
                        <img src="aset/7.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban6;?></h4>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-4">
                        <img src="aset/8.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban7;?></h4>
                    </div>

                    <div class="col-4">
                        <img src="aset/9.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban8;?></h4>
                    </div>

                    <div class="col-4">
                        <img src="aset/10.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban9;?></h4>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <img src="aset/11.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban10;?></h4>
                    </div>

                    <div class="col-4">
                        <img src="aset/12.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban11;?></h4>
                    </div>

                    <div class="col-4">
                        <img src="aset/13.jpg" alt="" height="250px" width="250px" class="mb-3">
                        <h4>Jawaban kamu: <?php echo $jawaban12;?></h4>
                    </div> 
                </div>
            </form>
            <form action="kuis_mata.php">
                <input type="submit" value="Go Back" class="btn btn-secondary" style="width:125px;">
            </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>