
<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
session_start();
?>

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
                <?if(isset($_SESSION['authorized'])):?>
                

                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" height="338" width="42"></td>
                            <td valign="top" height="338" width="492">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td width="492" valign="top" height="106">
                                        <form action="bill.php" method="post" enctype="multipart/form-data">
                                            <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                                <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                                <div style="margin-left:95px "><font class="title">Тип путевки</font><br></div>

                                                    <br>
                                                    <!--(1-1)-->
                                                    
                                                    <select value=""  name="type" id="type"><div>
                                                   <option value="Круиз" >Круиз (2000р, на большом теплоходе)</option>
                                                    <option value="Сафари" >Сафари (3000р, в жаркой пустные)</option>
                                                    <option value="Гастротур">Гастротур (1000р, этнические рестораны)</option> </div>
                                                     </select>
                                                 
                                                                                                    
                                                    
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
                                                        <!--   (1-3)-->
                                                        <div>
                                                        <p>Вид питания:</p>
                                                                <p><input name="dzen" type="radio" value="Завтрак">Завтрак - 10р (с 8-00 до 10-00)</p>
                                                                <p><input name="dzen" type="radio" value="Ужин">Ужин - 20р (с 19-00 до 22-00)</p>
                                                                <p><input name="dzen" type="radio" value="Пансион">Пансион - 50р (+обед с 13-00 до 15-00)</p>
                                        
                                                        </div> 
                                                                 
                                                               


                                                    <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                                    <td valign="top" height="215" width="243">
                                                        <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                                        <div style="margin-left:22px; margin-top:13px; ">

                                                                    <!--    (1-2)-->
                                                                    <p>Контактные данные:</p>
                                                                    <label style="font-weight:normal;">Имя:    </label><input name="name" type="text"><br><br>
                                                                    <label style="font-weight:normal;">Моб.:   </label><input name="tel" type="tel"><br><br>
                                                                    <label style="font-weight:normal;">E-mail: </label><input name="email" type="email">
            
                                                        </div>
                                                        <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w4.gif"></div>
                                                        <div style="margin-left:22px; margin-top:9px; ">

                                                            
                                                            
                                                            
                                                                </div> 
                                                            </div>

                                                            <input type="submit" value="Далее">
                                                            </form>

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
                
                    <? endif?>
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
