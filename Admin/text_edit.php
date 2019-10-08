<?php
include("password.php");
//Подключаем базу
$conn = mysqli_connect('localhost','admin','123123');
$select_db = mysqli_select_db($conn,'PHP_001');
if(isset($_GET['id'])) {$id=$_GET['id'];}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style001.css">
    <title>Страница изменения текстов</title>
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
                        <h3 align="center">Редактирование страниц</h3>
                        <?php
                        if (!isset($id)) {
                            $sql = mysqli_query($conn, "SELECT title,id FROM options");
                            $mas = mysqli_fetch_array($sql);
                            do {
                                printf("<p><a href='text_edit.php?id=%s'>%s</a></p>", $mas["id"], $mas["title"]);

                            } while ($mas = mysqli_fetch_array($sql));
                        }else{
                            $sql = mysqli_query($conn, "SELECT * FROM options WHERE id = $id");
                            $mas = mysqli_fetch_array($sql);
                            print<<<HERE
                        <form action="text_update.php" name="form1" method="POST">
                            <p>
                                <label>
                                    Введите название страницы<br>
                                    <input value="$mas[title]" type="text" name="title" id="title"><br>
                                </label>
                            </p>
                            <p>
                                <label>
                                    Введите ключевые слова<br>
                                    <input value="$mas[meta_key]" type="text" name="meta_key" id="meta_key"><br>
                                </label>
                            </p>
                            <p>
                                <label>
                                    Введите краткое описание страницы<br>
                                    <input value="$mas[meta_desc]" type="text" name="meta_desc" id="meta_desc"><br>
                                </label>
                            </p><p><label>
                                    Введите полный текст страницы с тегами<br>
                                <textarea cols="60" rows="15" name="text" id="text">$mas[text]</textarea>
                            </label></p>
                            <input name="id" type="hidden" value="$mas[id]">
                                <p>
                                <label>
                                    <input type="submit" name="Submit" value="Сохранить изменения" id="button">
                                </label></p>
                        </form>
HERE;
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