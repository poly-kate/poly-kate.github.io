<html>
    <head>
        <title>Работа</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body topmargin="0" bottommargin="0" rightmargin="0"  leftmargin="0"   background="../images/back_main.gif">
        <table cellpadding="0" cellspacing="0" border="0"  align="center" width="583" height="614">
            <tr>
                <td valign="top" width="583" height="208" background="../images/row1.gif">
                    <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif">    </div>
                    <div style="margin-left:50px; margin-top:69px ">
                        <a href="../index.php">Главная<img src="../images/m1.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="20" height="10">
                        <a href="order.php">Заказ<img src="../images/m2.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="basket.php">Корзина<img src="../images/m3.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="index-3.php">О компании<img src="../images/m4.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="index-4.php">Контакты<img src="../images/m5.gif" border="0" ></a>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" width="583" height="338"  bgcolor="#FFFFFF">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" height="338" width="42"></td>
                            <td valign="top" height="338" width="492">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td width="492" valign="top" height="106">

                                            <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                                <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                                <div style="margin-left:95px "><font class="title">Название</font><br>

                                                    
                                                    
                                                    
                                                    
                                                </div> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="492" valign="top" height="232">
                                            <table cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td valign="top" height="232" width="248">
                                                        <div style="margin-left:6px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:6px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                                        <div>
                                                        <!--(3-1)-->
                                                        <?php
                                                        $price = $_POST['price'];

                                                        if ($price!=0){
                                                        echo '<br>Тип путевки:  ';
                                                        $curtype = $_POST['curtype']; ; 
                                                            echo($curtype);  echo(' - ');
                                                            echo($price);
                                                        
                                                        echo '<br>Вид питания:  ';
                                                        $curfood = $_POST['curfood']; ; 
                                                        echo($curfood); $food=0;
                                                        if ($curfood=="Завтрак") {echo(' - 10'); $food=10;}
                                                        else if ($curfood=="Ужин") {echo(' - 20'); $food=20;}
                                                        else if ($curfood=="Пансион") {echo(' - 50'); $food=50;}
                                                        
                                                        echo '<br>Страна:  ';
                                                          $country = $_POST['country1']; 
                                                            echo($country);
                                                            $priceofcountry2 = json_decode($_POST['priceofcountry']);
                                                            echo(' - ');
                                                            foreach($priceofcountry2 as $k => $v)
                                                            {
                                                                if ($country==$k) {echo($v); $price+=$v;}
                                                            }
                                                            
                                                            //foreach ($priceofcountry2 as $k => $v) {
                                                           //     echo "\$a[$k] => $v.\n";
                                                           // }
                                                        
                                                        
                                                        echo '<br>Доп. услуги:  ';
                                                        
                                                        $dop=$_POST['check'];
                                                        $dop1=$_POST['check1'];
                                                        $dop2=$_POST['check2'];
                                                        $priceofdop2 = json_decode($_POST['priceofdop']);
                                                      
                                                        if($dop != null) {echo('<br> - '); echo($dop); echo(' - '); echo($priceofdop2[0]); $price+=$priceofdop2[0];} 
                                                        if($dop1 != null) {echo('<br> - '); echo($dop1); echo(' - '); echo($priceofdop2[1]); $price+=$priceofdop2[1];} 
                                                        if($dop2 != null) {echo('<br> - '); echo($dop2); echo(' - '); echo($priceofdop2[2]); $price+=$priceofdop2[2];} 

                                                        echo '<br>Количество дней:';
                                                        $days = $_POST['days']; 
                                                        if ($days==null) {$price=0; $days=0;}
                                                        else{
                                                             $price+=$days*$food;
                                                        }
                                                        echo($days); 

                                                        echo '<br>Имя:  ';
                                                        $curname = $_POST['curname']; ; 
                                                        echo($curname);

                                                        echo '<br>Телефон:  ';
                                                        $curtel = $_POST['curtel']; ; 
                                                        echo($curtel);

                                                        echo '<br>Почта:  ';
                                                        $curemail = $_POST['curemail']; ; 
                                                        echo($curemail);
                                                    }
                                                        ?>
                                                 
                                                        </div>


                                                    <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                                    <td valign="top" height="215" width="243">
                                                        <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                                        <div style="margin-left:22px; margin-top:13px; ">

                                                            <?php
                                                            if ($days==null) {$price=0; $days=0;}
                                                            echo '<br>Общая стоимость:';
                                                            echo($price);

                                                            $date = date("d.m.y"); 
                                                            $time = date("H:i:s");
                                                            $message = sprintf(" Дата/время: %s - %s \n Имя: %s \n Почта: %s \n Тип тура: %s \n Страна: %s \n Сумма: %s \n", 
                                                            $date, $time, $curname, $curemail, $curtype, $country, $price);
                                                            ?> 

                                                            <br>
                                                            <form name="qw0" id="qw0" method="post" >
                                                            <input type="hidden" name="q1" value="<?php echo $message ?>" > 
                                                            <input type="submit" value="Записать в файл">                         
                                                            </form> 

                                                            <?php  
                                                            $file = fopen('../text/file.txt', 'w+');
                                                            fwrite($file, $_POST['q1']); // Запись в файл
                                                            fclose($file); // Закрытие файла
                                                            ?>

<br>
                                                            <form name="qw0" id="qw0" method="post" >
                                                            <input type="hidden" name="q2" value="<?php echo $message ?>" > 
                                                            <input type="submit" value="Записать в файл и отправить на почту">                         
                                                            </form> 

                                                            <?php  
                                                            $file = fopen('../text/file.txt', 'w+');
                                                            fwrite($file, $_POST['q2']); // Запись в файл
                                                            fclose($file); // Закрытие файла
                                                            mail('kate_abramova1997@mail.ru', 'Путевка', $_POST['q2']);
                                                            ?>

                                                        </div>
                                                        
                                                        <div style="margin-left:22px; margin-top:9px; ">

                                                            
                                                            
                                                            
                                                                </div> 
                                                            </div>

                                                            <div style="margin-left:0px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>


                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top" height="338" width="49"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td valign="top" width="583" height="68" background="../images/row3.gif">
                    <div style="margin-left:51px; margin-top:31px ">
                        <a href="#"><img src="../images/p1.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="26" height="9">
                        <a href="#"><img src="../images/p2.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="30" height="9">
                        <a href="#"><img src="../images/p3.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="149" height="9">
                        <a href="index-5.php"><img src="../images/copyright.gif" border="0"></a>
                    </div>
                </td>
            </tr>

        </table>
    </body>
</html>
