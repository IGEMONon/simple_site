<?php
include("password.php");
//Подключаем базу
$conn = mysqli_connect('localhost','admin','123123');
$select_db = mysqli_select_db($conn,'PHP_001');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style001.css">
    <title>Форма удаления урока</title>
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
                        <h3 align="center">Удаление уроков</h3>
                        <form action="lesson_remove.php" method="POST">
                        <?php
                            $sql = mysqli_query($conn, "SELECT title,id FROM traning");
                            $mas = mysqli_fetch_array($sql);
                            do {
                                printf("<p><input name='id' type='radio' value='%s'><label>%s</label></label></p>",
                                    $mas["id"],$mas["title"]);

                            } while ($mas = mysqli_fetch_array($sql));
                        ?>
                            <p><input name="submit" type="submit" value="Удалить урок"></p>
                        </form>
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