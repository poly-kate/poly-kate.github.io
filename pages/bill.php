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
               <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif"></div>

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

               </div>
               <div style="margin-left:400px; margin-top:10px "></div>       
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

                              <form action="basket.php" method="post" enctype="multipart/form-data">
                                 <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                    <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                    <div style="margin-left:95px "><font class="title">   </font>
                                    
                                    <p>Страна основного пребывания:</p>
                                    <!--(2-1)-->
                                    <?php
                                     $curtype = $_POST['type']; 
                                     $curfood = $_POST['dzen']; 
                                     $curname = $_POST['name']; 
                                     $curtel = $_POST['tel']; 
                                     $curemail = $_POST['email']; 
                                     
                                     $price=0;
                                     $priceofcountry; 
                                     if($curtype=="Круиз")
                                     {
                                          $price+=2000;
                                          echo     '<p><input name="country1" type="radio" value="Италия">Италия</p>';
                                          echo     '<p><input name="country1" type="radio" value="Хорватия">Хорватия</p>';
                                          echo     '<p><input name="country1" type="radio" value="Швеция">Швеция</p>';
                                          $mas = array("Италия" => 200,"Хорватия" => 100,"Швеция" => 300);
                                     }
                                     else if($curtype=="Сафари")
                                     {
                                       $price+=3000;
                                          echo     '<p><input name="country1" type="radio" value="Кения">Кения</p>';
                                          echo     '<p><input name="country1" type="radio" value="Марокко">Марокко</p>';
                                          echo     '<p><input name="country1" type="radio" value="ЮАР">ЮАР</p>';
                                          $mas = array("Кения" => 500,"Марокко" => 300,"ЮАР" => 800);
                                          
                                     }
                                     else if($curtype=="Гастротур")
                                     {
                                          $price+=1000;
                                          echo     '<p><input name="country1" type="radio" value="Дания">Дания</p>';
                                          echo     '<p><input name="country1" type="radio" value="Норвегия">Норвегия</p>';
                                          echo     '<p><input name="country1" type="radio" value="Франция">Франция</p>';
                                    
                                          $mas = array("Дания" => 50,"Норвегия" => 100,"Франция" => 80);
                                     }
                                     //echo '<input type="hidden" id="type" value=$type>';
                                   // $myarray = ($type, $dzen);
                                   $priceofcountry=$mas;
                                    ?>
                                    
                                    <input type="hidden" name="curtype" id="curtype" value="<?php echo $curtype ?>">
                                    <input type="hidden" name="curfood" id="curfood" value="<?php echo $curfood ?>">
                                    <input type="hidden" name="curname" id="curname" value="<?php echo $curname ?>">
                                    <input type="hidden" name="curtel" id="curtel" value="<?php echo $curtel ?>">
                                    <input type="hidden" name="curemail" id="curemail" value="<?php echo $curemail ?>">
                                    <input type="hidden" name="price" id="price" value="<?php echo $price ?>">
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
                                          <div style="margin-left:6px; margin-top:11px; margin-right:0px "><font class="title"> </font></div>
                                          <div style="margin-top:10px; margin-left:6px ">
                                           
                                           
                                           <p>Дополнительные услуги:</p>
                                    <!--(2-2)-->
                                    <?php
                                     $type = $_POST['type']; 
                                     $priceofdop = array(0,0,0);
                                     if($type=="Круиз")
                                     {
                                          echo     '<p>Развлечения:</p>';
                                          echo    '<input name="check" value="Сауна" type="checkbox"/>Сауна</br></br>';
                                          echo    '<input name="check1" value="Бассейн" type="checkbox"/>Бассейн</br></br>';
                                          echo    '<input name="check2" value="Бар" type="checkbox"/>Бар</br></br>';
                                          $priceofdop[0]=50; $priceofdop[1]=100; $priceofdop[2]=200;
                                          
                                     }
                                     else if($type=="Сафари")
                                     {
                                          echo     '<p>Экскурсии:</p>';
                                          echo    '<input name="check" value="Кормление животных" type="checkbox"/>Кормление животных</br></br>';
                                          echo    '<input name="check1" value="Фотоохота" type="checkbox"/>Фотоохота</br></br>';
                                          echo    '<input name="check2" value="Разделывание туши" type="checkbox"/>Разделывание туши</br></br>';
                                          $priceofdop[0]=100; $priceofdop[1]=50; $priceofdop[2]=200;
                                       }
                                     else if($type=="Гастротур")
                                     {
                                          echo     '<p>Места:</p>';
                                          echo    '<input name="check" value="Местный рынок" type="checkbox"/>Местный рынок</br></br>';
                                          echo    '<input name="check1" value="Приготовление еды" type="checkbox"/>Приготовление еды</br></br>';
                                          echo    '<input name="check2" value="Виноферма" type="checkbox"/>Виноферма</br></br>';
                                          $priceofdop[0]='50'; $priceofdop[1]='200'; $priceofdop[2]='100';
                                       }
                                       
                                    ?>
                                          <input type="hidden" name="priceofcountry" id="priceofcountry" value='<?= json_encode($priceofcountry); ?>'>
                                          <input type="hidden" name="priceofdop" id="priceofdop" value='<?= json_encode($priceofdop); ?>'>
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                           
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                          
                                          </div> 

                                       <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                       <td valign="top" height="215" width="243">
                                          <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                          <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                          <div style="margin-left:22px; margin-top:13px; ">

                                             <div style="margin-left:0px; margin-top:0px; margin-right:0px "><font class="title">   </font></div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                             
                                          <!--   (2-3)-->
                                          <label style="font-weight:normal;">Количество дней:</label><br><input name="days" type="number">

                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                             
                                          </div>

                                             
                                          </div>
                                          <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                          
                                          <div style="margin-left:22px; margin-top:9px; ">
                                             
                                         
                                          <input type="submit" value="Вперед">
                                          </form><br>
                                          <button onclick='order.php';>Назад</button>
                                             
                                             
                                             <div style="margin-left:67px; margin-top:0px; margin-right:0px ">
<font class="title">

</font><br>

<div> 

</div>

                                            

 
                                             
                                             
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
