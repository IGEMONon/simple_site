<?php
//Подключаем базу
$conn = mysqli_connect('localhost','admin','123123');
$select_db = mysqli_select_db($conn,'PHP_001');

if(isset($_GET['id'])) {$id=$_GET['id'];}
//Запрос к базе
$sql = mysqli_query($conn,"SELECT * FROM traning WHERE id ='$id'");
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
                    <td valign="top" width="515px" style="max-width: 515px;">
                        <p class='training_lesson_head'><?php echo $my_array['title']; ?></p>
                        <p class='training_lesson_date'>Дата добавления: <?php echo $my_array['p_date']; ?></p>
                        <p class='training_lesson_date'>Автор урока: <?php echo $my_array['author']; ?> </p>
                        <?php echo $my_array['text'];  ?>
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