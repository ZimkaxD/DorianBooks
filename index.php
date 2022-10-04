<!DOCTYPE html>
<html lang="en">
<head class >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title > DoRianBooks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <style >
      .gif { padding-top: 200px; padding-left: 150px; width: 350px; padding-bottom: 47px; }
        .rounded-img{
            box-shadow: 0 0 10px rgba(26, 9, 9, 0.8);
            margin-bottom: 1em;
            
        }
       



    </style>
    <style >
       .body {
    background: #0967a563 url(images/bg.jpg); 
   }
   body {
    background: #c7b39b url(images/bg.jpg); 
   }
    .test{
    height:60px;
    width:200px;
}
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</head>
    <body>
    <form action="Authbd.php" method="post">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand p-0" href="/">
    <img src="DoRianBooks_2.jpg6" alt="Logo" width="200"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-1 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="Корзина.php">Корзина</a>
        </li>
          <a class="nav-link " href="Помощь.php">Помощь</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="Контакты.php">Контакты</a>
        </li>
        <!--<li class="nav-item dropdown">-->
         <!-- <a class="nav-link dropdown-toggle" href="По категориям.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            По категориям
          </a>-->
          <li class="nav-item">
          <a class="nav-link " aria-current="page"  href="Вход.php">Вход</a>
        </li>
        <li class="nav-item">
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="Поиск">
        <input class="form-control me-2" type="Поиск" placeholder="Поиск" aria-label="Поиск">
        <button class="btn btn-outline-success" type="submit">Найти</button>
      </form>
    </div>
  </div>
</nav>

        <div class="container text-center my-5"> <!--текст по центру class="tekst_sprava">Текст</p>	-->
            <div class="row"> <!--p>столбец</p--> <!--p>col-md-8 -смотреть как смотрится на других устройствах</p-->
                <div class="col-lg-6 col-md-8 mx-auto">  <!--col-lg-6 Ширина  колонки выравние по центру-->
                    <img class="rounded-img tekst_sprava" src="img.jpg3.jpg"  alt="Подождите" width="500" height="650"/>
                    <h3>Описание...</h3>
                    <h1>Портрет Дориана Грея</h1>
                    <p class="lead text muted">Оскар Уайльд <!--делает текст более читабельным-->
                    </p>
                    
                    <div class="container text-right my-5">
          <h1>1499₽</h1>
          <h3>Имеется в наличии:
            20 штук
          </h3>
          <button type="button"class="btn btn-secondary test"class="test" >Купить</button>
          <p>
            </p>
          <p>
          <button type="button"class="btn btn-secondary test"class="test" >Добавить в корзину</button>
          </p>

        </div>
                    </li>
                    <a >
                        Наши соц.сети
                    </a>
        <!--ссылка--><a href="https://vk.com/zimkaxd"   target="_blank"
                         class="btn btn-white"><img src="img.jpg1.webp" width="40" height="40">  
                         <!--p>кнопка</p-->
                    </a><!--удаление строки-->
                    <a href="https://www.youtube.com/c/MyBookVideos"
                    target="_blank"
                    class="btn btn-white"><img src="img.jpg2.jpg" alt="чето" width="40" height="40">
                    
                    </a>
                </div>
            </div>
        </div>
        </html>
    </body>
    