<?php
require "db.php";

$data = $_POST;
if (isset($data['do_signup']) ) {
    //регистрируем тут
    $errors = array();
    if (trim($data['login']) == '') {
        $errors[] = 'Введите логин!';
    }
    if (trim($data['email']) == '') {
        $errors[] = 'Введите email!';
    }
    if (($data['password']) == '') {
        $errors[] = 'Введите пароль!';
    }
    if ($data['password_2'] != $data['password'])
    {
        $errors[] ='Ваш пароль не совпадает!' ;
    }
    if (empty($errors)) {
        //все ок
    }
    else
    {
        echo "Не верно";
    }
}
?>

<form action="signup.php" method="POST">
    <p>
    <p><strong>Your login</strong></p>
        <input type="text"  name="login">
    </p>

    <P>
    <p><strong>Your e-mail</strong></p>
    <input type="email"  name="email">
    </P>

    <p>
    <p><strong>Your password</strong></p>
    <input type="password"  name="password">
    </p>

    <p>
    <p><strong>Your password one more</strong></p>
    <input type="password"  name="password_2">
    </p>

    <p>
    <button type="submit">Registration</button>
    </p>
</form>