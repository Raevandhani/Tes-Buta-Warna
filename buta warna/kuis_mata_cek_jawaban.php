<?php

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
        img{
            box-shadow: 5px 5px 5px 5px rgb(0,0,0, 0.2);
            border-radius: 100%;
        }

        .container-title{
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
    <div class="container-fluid text-center pt-5 pb-5" style="background-color:rgb(245,245,245);">
        <div class="container-title">
            <h2 style="font-family: Montserrat, sans-serif; font-weight:600;">Tes Buta Warna</h2>
            <hr width="200px">
        </div>
        <div class="container mt-4">
            <form action="jawaban_benar_kuis_mata.php" method="post">
                <div class="row">
                    <div class="col-4">
                        <img src="aset/2.jpg" alt="" height="250px" width="250px">
                        <?php echo $jawaban1;?>
                    </div>

                    <div class="col-4">
                        <img src="aset/3.jpg" alt="" height="250px" width="250px">
                    </div>

                    <div class="col-4">
                        <img src="aset/4.jpg" alt="" height="250px" width="250px">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-4">
                        <img src="aset/5.jpg" alt="" height="250px" width="250px">
                    </div>

                    <div class="col-4">
                        <img src="aset/6.jpg" alt="" height="250px" width="250px">
                    </div>

                    <div class="col-4">
                        <img src="aset/7.jpg" alt="" height="250px" width="250px">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-4">
                        <img src="aset/8.jpg" alt="" height="250px" width="250px">
                    </div>

                    <div class="col-4">
                        <img src="aset/9.jpg" alt="" height="250px" width="250px">
                    </div>

                    <div class="col-4">
                        <img src="aset/10.jpg" alt="" height="250px" width="250px">
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-4">
                        <img src="aset/11.jpg" alt="" height="250px" width="250px">
                    </div>

                    <div class="col-4">
                        <img src="aset/12.jpg" alt="" height="250px" width="250px">
                    </div>

                    <div class="col-4">
                        <img src="aset/13.jpg" alt="" height="250px" width="250px">
                    </div> 
                </div>
            </form>
            <form action="kuis_mata.php">
                    <input type="submit" value="Go Back" class="btn btn-secondary" style="width:125px;">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>