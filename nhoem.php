<?php

if (isset($_GET['btn_eat'])) {
    if ($_GET['eat'] == 'ăn em' || $_GET['eat'] == 'Ăn em') {
        header("Location: chondo.php", true);
    } else {
        $error = "Sai rồi nhập lại đi";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hi em</title>


    <style>
        .custom-hi {
            border: 1px solid #000;
            box-shadow: 0px 4px 11px rgba(0, 0, 0, 0.04);
            border-radius: 10px;
            padding: 30px;
        }

        .font-cus-tit {
            font-size: 20px;

        }
    </style>
</head>

<body>
    <div class="wrapper container custom-hi">
        <h1 class="text-center text-danger">Hi em yêu!</h1>
        <p class="text-center font-cus-tit">Trả lời đúng có thưởng nè</p>
        <div>
            <?php if(!empty($error)) { ?>
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning! </strong> <?php if(!empty($error)){ echo $error; } ?>
            </div>
            <?php } ?>
            <form action="" method="get">
                <div class="form-group">
                    <label for="">Anh yêu của em thích ăn gì nhất</label>
                    <input type="text" name="eat" class="form-control" placeholder="Nhập vào đây" required>
                </div>
                <input type="submit" name="btn_eat" class="btn btn-success" value="Xác nhận">
                <!-- <button type="button" >Xác nhận</button> -->
            </form>
        </div>
    </div>
</body>

</html>