<?php include("password.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style001.css">
    <title>Форма добавления нового урока</title>
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
                        <form action="lesson_add.php" name="form1" method="POST">
                            <p>
                                <label>
                                    Введите название урока<br>
                                    <input type="text" name="title" id="title"><br>
                                </label>
                            </p>
                            <p>
                                <label>
                                    Введите ключевые слова<br>
                                    <input type="text" name="meta_key" id="meta_key"><br>
                                </label>
                            </p>
                            <p>
                                <label>
                                    Введите краткое описание урока<br>
                                    <input type="text" name="meta_desc" id="meta_desc"><br>
                                </label>
                            </p><p><label>
                                    Введите дату<br>
                                    <input type="text" name="p_date" id="p_date"><br>
                                </label></p><p><label>
                                    Введите описание урока<br>
                                <textarea cols="60" rows="5" name="description" id="description"></textarea><br>
                                </label></p>
                            <p>
                                <label>
                                    Введите полный текст урока с тегами<br>
                                <textarea cols="60" rows="15" name="text" id="text"></textarea>
                            </label></p>
                                <p>
                                <label>
                                    Введите автора урока<br>
                                    <input type="text" name="author" id="author"><br><br>

                                    <input type="submit" name="Submit" value="Занести урок в базу" name="title" id="button">
                                </label>
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