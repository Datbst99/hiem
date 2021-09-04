<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Chọn đồ</title>
    <style>
        .box-do {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            flex-wrap: wrap;
        }
        .item-do {
            width: calc(100% / 3 - 20px);
            cursor: pointer;
        }
        .item-do img {
            width: 100%;
            height: 400px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('.item-do').click(function(){
                alert('Hãy gửi ID cho anh! Rồi em sẽ có nó thôi tinh yêu ạ')
            })
        });
    </script>
</head>
<body>
    <div class="wraaper container">
        <h1 class="text-center">Chúc mừng em đã trả lời đúng</h1>

        <p class="text-center">Xin mời em chọn 1 món quà em thích</p>
        <div class="box-do">
            <div class="item-do">
                <img src="images/giay1.PNG" alt="">
                <p>ID: 1</p>
            </div>
            <div class="item-do">
                <img src="images/giay2.PNG" alt="">
                <p>ID: 2</p>
            </div>
            <div class="item-do">
                <img src="images/giay3.PNG" alt="">
                <p>ID: 3</p>
            </div>
            <div class="item-do">
                <img src="images/giay4.PNG" alt="">
                <p>ID: 4</p>
            </div>
            <div class="item-do">
                <img src="images/giay5.PNG" alt="">
                <p>ID: 5</p>
            </div>
            <div class="item-do">
                <img src="images/giay6.PNG" alt="">
                <p>ID: 6</p>
            </div>
        </div>
    </div>
</body>
</html>