<?php
$conn = mysqli_connect('localhost','admin','123123');
$select_db = mysqli_select_db($conn,'PHP_001');
if(!isset($_SERVER['PHP_AUTH_USER'])){
    Header("WWW-Authenticate: Basic realm=\"Admin Page\"");
    Header("HTTP/1.0 401 Unauthorized");
    exit();
}else{
    if(!get_magic_quotes_gpc()){
        $_SERVER['PHP_AUTH_USER'] = mysqli_escape_string($conn,$_SERVER['PHP_AUTH_USER']);
        $_SERVER['PHP_AUTH_PW'] = mysqli_escape_string($conn,$_SERVER['PHP_AUTH_PW']);
    }

    $sql = "SELECT parol FROM password WHERE login='".$_SERVER['PHP_AUTH_USER']."'";
    $res = mysqli_query($conn,$sql);

    if (!$res)
    {
        Header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
        Header ("HTTP/1.0 401 Unauthorized");
        exit();
    }

    if (mysqli_num_rows($res) == 0)
    {
        Header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
        Header ("HTTP/1.0 401 Unauthorized");
        exit();
    }

    $mas =  mysqli_fetch_array($res);
    if ($_SERVER['PHP_AUTH_PW']!= $mas['parol'])
    {
        Header ("WWW-Authenticate: Basic realm=\"Admin Page\"");
        Header ("HTTP/1.0 401 Unauthorized");
        exit();
    }


}