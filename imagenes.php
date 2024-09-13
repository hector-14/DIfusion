<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
    <style>
        
    body{
    background-color: #eaeaea;
    overflow: hidden;
    }
    .container{
        position: absolute;
        left:50%;
        top:50%;
        transform: translate(-50%,-50%);
        width:1000px;
        height:600px;
        padding:50px;
        background-color: #f5f5f5;
        box-shadow: 0 30px 50px #dbdbdb;
    }
    #slide{
        width:max-content;
        margin-top:50px;
    }
    .item{
        width:200px;
        height:300px;
        background-position: 50% 50%;
        display: inline-block;
        transition: 0.5s;
        background-size: cover;
        position: absolute;
        z-index: 1;
        top:50%;
        transform: translate(0,-50%);
        border-radius: 20px;
        box-shadow:  0 30px 50px #505050;
    }
    .item:nth-child(1),
    .item:nth-child(2){
        left:0;
        top:0;
        transform: translate(0,0);
        border-radius: 0;
        width:100%;
        height:100%;
        box-shadow: none;
    }
    .item:nth-child(3){
        left:50%;
    }
    .item:nth-child(4){
        left:calc(50% + 220px);
    }
    .item:nth-child(5){
        left:calc(50% + 440px);
    }
    .item:nth-child(n+6){
        left:calc(50% + 660px);
        opacity: 0;
    }
    .item .content{
        position: absolute;
        top:50%;
        left:100px;
        width:300px;
        text-align: left;
        padding:0;
        color:#eee;
        transform: translate(0,-50%);
        display: none;
        font-family: system-ui;
    }
    .item:nth-child(2) .content{
        display: block;
        z-index: 11111;
    }
    .item .name{
        font-size: 40px;
        font-weight: bold;
        opacity: 0;
        animation:showcontent 1s ease-in-out 1 forwards
    }
    .item .des{
        margin:20px 0;
        opacity: 0;
        animation:showcontent 1s ease-in-out 0.3s 1 forwards
    }
    .item button{
        padding:10px 20px;
        border:none;
        opacity: 0;
        animation:showcontent 1s ease-in-out 0.6s 1 forwards
    }
    @keyframes showcontent{
        from{
            opacity: 0;
            transform: translate(0,100px);
            filter:blur(33px);
        }to{
            opacity: 1;
            transform: translate(0,0);
            filter:blur(0);
        }
    }
    .buttons{
        position: absolute;
        bottom:30px;
        z-index: 222222;
        text-align: center;
        width:100%;
    }
    .buttons button{
        width:50px;
        height:50px;
        border-radius: 50%;
        border:1px solid #555;
        transition: 0.5s;
    }.buttons button:hover{
        background-color: #bac383;
    }
  
    </style>
<body>
    <div class="container">
        <div id="slide">
            <div class="item" style="background-image: url(imagenes/labSis.jpg);">
                <div class="content">
                    <div class="name">Mac</div>
                    <div class="des">Contamos con equipos MAC para tu desarollo educativo</div>
                    <button>See more</button>
                </div>
            </div>
            <div class="item" style="background-image: url(imagenes/labSis2.jpg);">
                <div class="content">
                    <div class="name">Electrónica</div>
                    <div class="des">Equipo dedicado a la electrónica</div>
                    <button>See more</button>
                </div>
            </div>
            <div class="item" style="background-image: url(imagenes/transporte7.jpeg);">
                <div class="content">
                    <div class="name">Equipo de Computo</div>
                    <div class="des">Aula con equipo de computo Windows</div>
                    <button>See more</button>
                </div>
            </div>
            <div class="item" style="background-image: url(imagenes/transporte6.jpeg);">
                <div class="content">
                    <div class="name">LUNDEV</div>
                    <div class="des">Tinh ru anh di chay pho, chua kip chay pho thi anhchay mat tieu</div>
                    <button>See more</button>
                </div>
            </div>
            <div class="item" style="background-image: url(imagenes/electronica.jpg);">
                <div class="content">
                    <div class="name">LUNDEV</div>
                    <div class="des">Tinh ru anh di chay pho, chua kip chay pho thi anhchay mat tieu</div>
                    <button>See more</button>
                </div>
            </div>
            <div class="item" style="background-image: url(imagenes/robot.jpg);">
                <div class="content">
                    <div class="name">LUNDEV</div>
                    <div class="des">Tinh ru anh di chay pho, chua kip chay pho thi anhchay mat tieu</div>
                    <button>See more</button>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>

    <script>
          document.getElementById('next').onclick = function(){
            let lists = document.querySelectorAll('.item');
            document.getElementById('slide').appendChild(lists[0]);
        }
        document.getElementById('prev').onclick = function(){
            let lists = document.querySelectorAll('.item');
            document.getElementById('slide').prepend(lists[lists.length - 1]);
        }
    </script>
</body>
</html>