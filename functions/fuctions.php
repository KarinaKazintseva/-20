<?php
$mysqli = false;
function connectBD(){
    global $mysqli;
    $mysqli = new $mysqli ("localhost","root","","valerabase");
    $mysqli->query("SET NAMES 'utf-8'");
}
function closeDB(){
    global $mysqli;
    $mysqli->close();
}



$to = "karina2004200015@gmail.com"; //Кому
$sitename = "https://karinakazintseva.github.io/-20/"; //Название сайта, с которого пришла заявка
$nam = trim($_POST["nam"]); //Имя
$mob = trim($_POST["mob"]); //Телефон
$lnam = trim($_POST["lnam"]);
$ema = trim($_POST["ema"]);
$amo = trim($_POST["amo"]);
$cit = trim($_POST["cit"]);
$pos = trim($_POST["pos"]);
$sub = trim($_POST["subject"]);




$message = "Имя: $nam Фамилия: $lnam Телефон: $mob Почта: $ema Кол-во :$amo Город: $cit Почта: $pos Комментарий: $sub"; //Формируем сообщение
$pagetitle = "Новая заявка с сайта \"$sitename\""; //Как будет отображаться письмо на почте тема письма
mail($to, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n"); //Перечисляем, что отправляем и задаем кодировку данных
mail($to2, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n"); //Перечисляем, что отправляем и задаем кодировку данных




// function nam(){
//     global $nam;
//     $nam = $_GET['nam'];
// echo $nam;
// }
// function lnam(){
//     global $lnam;
//     $lnam = $_GET['lnam'];
// echo $lnam;
// }
// function ema(){
//     global $ema;
//     $ema = $_GET['ema'];
// echo $ema;
// }
// function mob(){
//     global $mob;
//     $mob = $_GET['mob'];
// echo $mob;
// }
// function amo(){
//     global $amo;
//     $amo = $_GET['amo'];
// echo $amo;
// }
// function cit(){
//     global $cit;
//     $cit = $_GET['cit'];
// echo $cit;
// }
// function pos(){
//     global $pos;
//     $pos = $_GET['pos'];
// echo $pos;
// }
?>