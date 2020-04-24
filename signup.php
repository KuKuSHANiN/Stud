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
        $dsky = R::dispense( 'users' );
        $dsky->login =$data['login'];
        $dsky->email =$data['email'];
        $dsky->password =$data['password'];
        $id = R::store( $dsky);
    }
    else
    {
        echo '<div type =" color: red">'.array_shift($errors).'</div>';
    }
}
?>

<form action="signup.php" method="POST">
    <p>
    <p><strong>Your login</strong></p>
        <input type="text"  name="login" value="<?php echo $data['login'];?>">
    </p>

    <P>
    <p><strong>Your e-mail</strong></p>
    <input type="email"  name="email" value="<?php echo $data['email'];?>">>
    </P>

    <p>
    <p><strong>Your password</strong></p>
    <input type="password"  name="password" value="<?php echo $data['password'];?>">>
    </p>

    <p>
    <p><strong>Your password one more</strong></p>
    <input type="password"  name="password_2">
    </p>

    <p>
    <button type="submit">Registration</button>
    </p>
</form>