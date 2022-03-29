<?
session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ЯКСЭ_курсы</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>
    <div class="app">
    		<header class="app__header">
    			<div class="app__wrapper">
            <nav class="top-menu">
                  <div class="logo">
                    <a class="navbar-logo" href="main.php"><img src="img/logo.png" alt=""></a>
                    <a class="text" style=""><h1><span style="color: #2c4597">яксэ</span>_курсы</h1></a>
                  </div>
                  <div class="nav">
                    <ul class="menu-main info">
                      <li><a href="" style="color: #2c4597">8 (4112) 42-25-06 </a></li>
                      <li><a href="" style="color: #2c4597">yaktsit@mail.ru</a></li>
                    </ul>
                    <ul class="menu-main lk">
                      <li><a href="signin.php" style="color: #2c4597">Войти</a></li>
                      <li><a href="profile.html"><img src="img/acc_icon.png" alt=""></a></li>
                    </ul>
                  </div>
            </nav>
    			</div>
    		</header>

    		<div class="backimg" style="background-image: url(img/background.jpg);">
    			<div class="opacity"></div>
                <div class="main__txt">
                    <h1>Дотсуп к обучению</h1>
                </div>
                <form action="index.php">
                    <button class="posat">К выбору курса</button>
               </form>
    		</div>

    		<footer class="app__footer">

    		</footer>
    	</div>
  </body>
</html>
