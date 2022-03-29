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
    <link rel="stylesheet" href="css/signin.css">

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

            <?php

        	$host='localhost';
        	$user='root';
        	$pass = '';
        	$base='hakatont';

        	$conn=mysqli_connect($host, $user, $pass, $base);

        	?>
            <main>
                <div class="right__side">

            		<section class="section2">

            			<center>
            					<h1>Вход</h1>
            				<?

            				if ($_POST['auto']=='Войти')
            				{
            					$mail=$_POST['mail'];
            					$pass1=$_POST['pass1'];

            					$query="SELECT * FROM `reg` WHERE `mail`='$mail' AND `pass`='$pass1' ";
            					$result=mysqli_query($conn,$query);
            					$num=mysqli_num_rows($result);
            					$row=mysqli_fetch_array($result);

            					if($num == 1)
            					{
            						echo "<p style='color:black'> <br><br> Вы авторизовались, пройдите в <a href='lk.php' style='color:blue;'> Личный кабинет </a><br><br>";
            						$_SESSION['mail']=$mail;
            						$_SESSION['pass1']=$pass1;
            						$_SESSION['status']=$row[7];
            						if ($row[10]==1) echo "<br><br> Добро пожаловать в <a href='admin.php'  style='color:blue;'> Панель сотрудника</a><br><br>";
            					}
            					else
            					{
            						echo "<br><br> Данные не верны попробуйте еще раз <a href='signin.php'  style='color:blue; text-decoration:none;'>Авторизоваться</a><br><br><br>";
            					}
            				}
            				else
            				{
            				?>
            				<table>
            					<form action='signin.php' method='post'>
            						<tr>
            							<td>Введите почту</td>
            							<td><input type='text' name='mail'></td>
            						</tr>
            						<tr>
            							<td>Введите пароль</td>
            							<td><input type='password' name='pass1'></td>
            						</tr>
            						<tr>
            							<td></td>
            							<td><input type='submit' name='auto' value='Войти'></td>
            						</tr>
                                    <tr>
            							<td colspan="2">У вас нет учетной записи? <a href="register.php" style="color:blue; text-decoration:none;">Зарегистрируйтесь</a></td>
            						</tr>
            					</form>
            				</table>
            			</center>
            			<?
            				}
            			?>
            	</section>

            	</div>
            </main>

            <footer class="app__footer">
                <div style="margin-bottom:1%;">Наши социальные сети</div>
                <div class="footer__icon">
                    <a class="" href="main.html"><img src="icon/twitter.png" alt=""></a>
                    <a class="" href="main.html"><img src="icon/instagram.png" alt=""></a>
                    <a class="" href="main.html"><img src="icon/vk.png" alt=""></a>
                    <a class="" href="main.html"><img src="icon/telegram.png" alt=""></a>
                </div>
            </footer>
    	</div>
  </body>
</html>
