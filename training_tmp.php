<?php
//Подключаем базу
$conn = mysqli_connect('localhost','admin','123123');
$select_db = mysqli_select_db($conn,'PHP_001');
//Запрос к базе
$sql = mysqli_query($conn,"SELECT title, meta_key, meta_desc, text FROM options WHERE name_p ='training'");
//Создание массива из полученных данных
$my_array = mysqli_fetch_array($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="description" content="<?php echo $my_array['meta_desc'];  ?>">
    <meta name="keywords" content="<?php echo $my_array['meta_key'];  ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style001.css">
    <title><?php echo $my_array['title'];  ?></title>
</head>
<body>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="top_border">
    <!__шапка__>
    <?php include ("sections/top.php"); ?>
    <tr>
        <td>
            <table width="700px" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <!__меню__>
                    <?php include ("sections/menu.php"); ?>
                    <td valign="top" width="515px">
                        <p><strong>Создание прибыльной системы.</strong></p>
                        <p>Вы решили зарабатывать на бирже?</p>
                        <p><img src="traning/03072019/trading/Ambitions.jpg" width="592" height="584" /><br />
                            Для начала набить шишек - неизбежно и необходимо</p>
                        <p><img src="traning/03072019/trading/Psiho.jpg" width="862" height="690" /><br />
                            Избегайте крупного риска.</p>
                        <p>&nbsp;</p>
                        <p><img src="traning/03072019/trading/Gap.bmp" width="490" height="626" /><br />
                            Ставьте правильные целию</p>
                        <p><img src="traning/03072019/trading/Exits.jpg" width="398" height="365" /></p>
                        И тогда сможете выпендриваться перед новичками.</p>
                        <p><img src="traning/03072019/trading/Cock.jpg" width="530" height="399" /></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!__футер_>
    <?php include ("sections/bottom.php"); ?>
</table>
</body>
</html>