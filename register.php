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
            <div class="right__side">

        		<section class="section2">

        			<center>
        				<h1>Регистрация</h1>
        				<?
        				if ($_POST['reg']=='Зарегистрироваться')
        				{
        					$mail=$_POST['mail'];
        					$pass1=$_POST['pass1'];
        					$pass2=$_POST['pass2'];

        					if ($pass1 == $pass2)
        					{

                                $query="INSERT INTO `reg`(`mail`, `pass`, `name`, `secondname`, `fam`, `obrazov`, `region`, `city`, `tel`, `status`) VALUES ('$mail', '$pass1', '$name', '$secondname', '$fam', '', '', '', '0', '0')";
        						$result=mysqli_query($conn,$query);
        						echo "<p style='color:black'> Регистрация прошла успешно <a href='signin.php' style='color:blue;'>Войти</a>";
        					}
        					else
        					{
        						echo "<p style='color:black'> Пароли не совпадают, попробуйте еще раз <a href='register.php' style='color:blue;'>Зарегистрироваться</a>";

        					}
        				}
        				else
        				{
        				?>
        				<table>
        					<form action='register.php' method='post'>
        						<tr>
        							<td>Введите почту</td>
        							<td><input type='text' name='mail'></td>
        						</tr>
        						<tr>
        							<td>Введите пароль</td>
        							<td><input type='password' name='pass1'></td>
        						</tr>
        						<tr>
        							<td>Повторите пароль</td>
        							<td><input type='password' name='pass2'></td>
        						</tr>
        						<tr>
        							<td></td>
        							<td><input type='submit' name='reg' value='Зарегистрироваться'></td>
        						</tr>
        					</form>
        				</table>

        			</center>
        			<?
        				}
        			?>
        	</section>

        	</div>


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
