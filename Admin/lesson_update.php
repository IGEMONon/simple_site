<?php
include("password.php");
//Подключаем базу
$conn = mysqli_connect('localhost','admin','123123');
$select_db = mysqli_select_db($conn,'PHP_001');
if(isset($_POST['id'])) {$id=$_POST['id'];}
if(isset($_POST['title'])) {$title=$_POST['title']; if ($title == ''){unset($title);}}
if(isset($_POST['meta_key'])) {$meta_key=$_POST['meta_key']; if ($meta_key == ''){unset($meta_key);}}
if(isset($_POST['meta_desc'])) {$meta_desc=$_POST['meta_desc']; if ($meta_desc == ''){unset($meta_desc);}}
if(isset($_POST['p_date'])) {$p_date=$_POST['p_date']; if ($p_date == ''){unset($p_date);}}
if(isset($_POST['description'])) {$description=$_POST['description']; if ($description == ''){unset($description);}}
if(isset($_POST['text'])) {$text=$_POST['text']; if ($text == ''){unset($text);}}
if(isset($_POST['author'])) {$author=$_POST['author']; if ($author == ''){unset($author);}}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style001.css">
    <title>Обновление</title>
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
                        <?php
                        if(isset($title) and isset($meta_key) and isset($meta_desc) and isset($p_date) and isset($description)
                             and isset($text) and isset($author)){
                            //заносим информацию в базу
                            $sql = mysqli_query($conn,"UPDATE traning SET title ='$title',meta_key = '$meta_key',
                            meta_desc = '$meta_desc',p_date='$p_date',description='$description',text='$text',author='$author' 
                            WHERE id='$id'");
                            if ($sql) {
                                echo "<p>Ваш урок успешно обновлен</p>";
                            }else {
                                echo "<p>Ваш урок не обновлён</p>";
                            }
                        }else{
                            echo "<p>Есть пустые поля. Урок не обновлён</p>";
                        }
                        ?>
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