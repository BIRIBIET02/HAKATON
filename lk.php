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
    <link rel="stylesheet" href="css/lk.css">

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



                <selection class="selection2">
                          <?
                          if ($_SESSION['mail']!='')
            			  {
            				  $mail=$_SESSION['mail'];
                              /*
                               //Добавление заказов из корзины
                              if($_POST['zakaz']=='Оформить заказ')
                             {
                               $query="SELECT * FROM `korzina` WHERE `mail`='$mail'";
                               $result=mysqli_query($conn,$query);
                               while($row=mysqli_fetch_array($result))
                               {
                               $id_tov=$row[1];
                               $img=$row[2];
                               $name=$row[3];
                               $about1=$row[4];
                               $kolvo=$row[5];
                               $price=$row[6];
                               $date=date('y-m-d');

                               $query2="INSERT INTO `zakaz` (`id_tov`,`name`, `img`, `about1`, `kolvo`, `price`, `login`, `date`)
                                                   VALUES ('$id_tov','$name','$img','$about1','$kolvo','$price','$login', '$date')";
                               $result2=mysqli_query($conn,$query2);

                               }
                             }*/



            				 $pass1=$_SESSION['pass1'];
            				 $query="SELECT * FROM `reg` WHERE `mail`='$mail' AND `pass`='$pass1' ";
            				 $result=mysqli_query($conn,$query);
            				 $row=mysqli_fetch_array($result);

                          if($_POST['avatar']=='Сохранить документы')
                              {
                                $id=$_POST['id'];
                                $img=$_POST['img'];
                                $imgobraz=$_POST['imgobraz'];
                                $imgsnils=$_POST['imgsnils'];
                                $imgpass=$_POST['imgpass'];

                                $query="UPDATE `reg` SET `img`='$img', `imgobraz`='$imgobraz', `imgsnils`='$imgsnils', `imgpass`='$imgpass' WHERE `id`='$id'  ";
                                $result=mysqli_query($conn, $query);
                              }

                              if($_POST['data']=='Изменить данные')
                              {
                                $id=$_POST['id'];
                                $name1=$_POST['name1'];
                                $secname=$_POST['secname'];
                                $name2=$_POST['name2'];
                                $mail=$_POST['mail'];
                                $obraz=$_POST['obraz'];
                                $region=$_POST['region'];
                                $city=$_POST['city'];
                                $tel=$_POST['tel'];
                                $parol=$_POST['parol'];

                                $query="UPDATE `reg` SET `mail`='$mail', `fam`='$name2', `name`='$name1' , `secondname`='$secname', `obrazov`='$obraz', `region`='$region', `city`='$city',
                                `tel`='$tel', `pass`='$parol' WHERE `id`='$id'  ";
                                $result=mysqli_query($conn, $query);
                              }


                            ?>
                        </section>
<main>
                        <h1>Личный кабинет</h1>

                        <div class="left-side">
                            <form class="" action="lk.php" method="POST">
                                <div class="client-info">
                                    <span>Фамилия</span>
                                    <input type="text" name="secname" value="<?echo $row[4];?>">
                                </div>
                                <div class="client-info">
                                    <span>Имя</span>
                                    <input type="text" name="name1" value="<?echo $row[3];?>">
                                </div>
                                <div class="client-info">
                                    <span>Отчество</span>
                                    <input type="text" name="name2" value="<?echo $row[5];?>">
                                </div>
                                <div class="client-info">
                                    <span>Почта</span>
                                    <input type="text" name="mail" value="<?echo $row[1];?>">
                                </div>
                                <div class="client-info">
                                    <span>Образование</span>
                                    <input type="text" name="obraz" value="<?echo $row[6];?>">
                                </div>
                                <div class="client-info">
                                    <span>Регион</span>
                                    <input type="text" name="region" value="<?echo $row[7];?>">
                                </div>
                                <div class="client-info">
                                    <span>Город</span>
                                    <input type="text" name="city" value="<?echo $row[8];?>">
                                </div>
                                <div class="client-info">
                                    <span>Телефон</span>
                                    <input type="text" name="tel" value="<?echo $row[9];?>">
                                </div>
                                <div class="client-info">
                                    <span>Пароль</span>
                                    <input type="text" name="parol" value="<?echo $row[2];?>">
                                </div>

                                <br>
                                <div class="button">
                                    <input type="hidden" name="id" value="<?echo $row[0]; ?>">
                                    <input type="submit" name="data" value="Изменить данные" >
                                </div>
                            </form>
                        </div>


                        <div class="right-side">


                            <!--Фото-->
                            <div class="avatar1">
                               <img src="dannie/<?echo $row[11];?>">
                            </div>
                            <div class="button-file">
                               <form class="" action="lk.php" method="POST">
                                   <input type="hidden" name="id" value="<?echo $row[0];?>">
                                   <label class="custom-file-upload">
                                       Прикрепить фото
                                       <input type="file" name="img" value="">
                                   </label>
                           <!--Образование-->
                           <div class="avatar1">
                              <img src="dannie/<?echo $row[12];?>">
                           </div>
                           <div class="button-file">

                                  <input type="hidden" name="id" value="<?echo $row[0];?>">
                                  <label class="custom-file-upload">
                                      Прикрепить копию диплома об образовании
                                      <input type="file" name="imgobraz" value="">
                                  </label>
                          <!--Снилс-->
                          <div class="avatar1">
                             <img src="dannie/<?echo $row[13];?>">
                          </div>
                          <div class="button-file">

                                 <input type="hidden" name="id" value="<?echo $row[0];?>">
                                 <label class="custom-file-upload">
                                      Прикрепить копию СНИЛС
                                     <input type="file" name="imgsnils" value="">
                                 </label>
                         <!--Паспорт-->
                         <div class="avatar1">
                            <img src="dannie/<?echo $row[14];?>">
                         </div>
                         <div class="button-file">

                                <input type="hidden" name="id" value="<?echo $row[0];?>">
                                <label class="custom-file-upload">
                                    Прикрепить копию паспорта
                                    <input type="file" name="imgpass" value="">
                                </label>
                                   <br> <br>
                                   <div class="button">
                                        <input type="submit" name="avatar" value="Сохранить документы" >
                                   </div>
                               </form>
                            </div>
                        </div>





            <?}?>
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
