<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/check.js" type="text/javascript"></script>
<style>
.error{
    color: red;
}
</style>
<form id="form" action="index.php" method="post">
<table>
    <tr>
        <td>Имя</td><td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Фамилия</td><td><input type="text" name="s_name"></td>
    </tr>
    <tr>
        <td>Дата рождения</td>
        <td>День
            <select name="data_d">
                <script src="js/date.js"></script>
            </select>
            Месяц
            <select name="data_m">
                <option>Январь</option>
                <option>Февраль</option>
                <option>Март</option>
                <option>Апрель</option>
                <option>Май</option>
                <option>Июнь</option>
                <option>Июль</option>
                <option>Август</option>
                <option>Сентябрь</option>
                <option>Октябрь</option>
                <option>Ноябрь</option>
                <option>Декабрь</option>
            </select>
            Год
            <select name="data_y">
                <script src="js/year.js"></script>
            </select>
        </td>
    </tr>
    <tr>
        <td>Логин</td><td><input type="text" name="login"></td>
    </tr>
    <tr>
        <td>Пароль</td><td><input type="text" name="pswd" id="pswd"></td>
    </tr>
    <tr>
        <td>Повторите пароль</td><td><input type="text" name="s_pswd"></td>
    </tr>
    <tr>
        <td>Email</td><td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>Секретный вопрос</td>
        <td>
            <select name="qw">
                <option>Вопрос1</option>
                <option>Вопрос2</option>
                <option>Вопрос3</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Ответ</td><td><input type="text" name="anw"></td>
    </tr>
    <tr>
        <td colspan="3"><input type="reset" value="Сбросить"><input type="submit" value="Зарегестрироваться"></td>
    </tr>
        
</table>
  
<?php
require('rb.php');

$name=$_POST['name'];
$s_name=$_POST['s_name'];
$login=$_POST['login'];
$pswd=md5($_POST['pswd']);
$email=$_POST['email'];
$qw=$_POST['qw'];
$anw=$_POST['anw'];
$data_d=$_POST['data_d'];
$data_m=$_POST['data_m'];
$data_y=$_POST['data_y'];

R::setup('mysql:host=localhost;dbname=user1', 'root', '3MsOTx5s');
$user=R::dispense('user');
$user->name=$name;
$user->s_name=$s_name;
$user->login=$login;
$user->pswd=$pswd;
$user->email=$email;
$user->question=$qw;
$user->anw=$anw;
$user->data_d=$data_d;
$user->data_m=$data_m;
$user->data_y=$data_y;
R::store($user);
?>
   
    
</form>
</body>
</html>


