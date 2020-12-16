<?php
include("../../app/database/db.php");
include("../../app/helper/validation.php");


$table = 'users';

$admin_users = selectAll($table, ['admin' => 1]);

$errors = array();
$id = '';
$username = '';
$admin = '';
$email = '';
$password = '';
$passwordConf = '';



function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['message2'] = 'Registration Successfully. Please Login Now';
    $_SESSION['type'] = 'success';
    
    if ($_SESSION['admin']) {
        header('Location: admin/dashboard.php');
    } else {
        header('Location: login.php'); 
    }
    exit();

}



if (isset($_POST['register-btn']) || isset($_POST['create_admin'])) {
    
   
    $errors = validateUser($_POST);
    if (count($errors)=== 0) {

    unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create_admin']);
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (isset($_POST['admin'])) {
        $_POST['admin'] = 1;
        $user_id = create($table, $_POST);
        $_SESSION['message'] = 'Admin user done!';
        $_SESSION['type'] = 'success';
        header('Location: ../../admin/users/index3.php');
        exit();

    } else {
        $_POST['admin'] = 0;
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);
        loginUser($user);
    }


    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        
    }


}



if (isset($_POST['update-user'])) {
    $errors = validateUser($_POST);

    if (count($errors)=== 0) {
        $id = $_POST['id'];
        unset($_POST['passwordConf'], $_POST['update-user'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

   
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update($table, $id,  $_POST);
        $_SESSION['message'] = 'Admin user Updated';
        $_SESSION['type'] = 'success';
        header('Location: ../../admin/users/index3.php');
        exit();


    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        
    }

}


if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    $id = $user['id'];
    $username = $user['username'];
    $admin = isset($user['admin']) ? 1 : 0;
    $email = $user['email'];
}




if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);
        

        if ($user && password_verify($_POST['password'], $user['password'])) {

            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            $_SESSION['message'] = 'Welcome to tutorial hub. Let get ready to chill!.';
            $_SESSION['message2'] = 'Registration Successfully. Please Login Now';
            $_SESSION['type'] = 'success';
            
            if ($_SESSION['admin']) {
                header('Location: admin/dashboard.php');
            } else {
                header('Location: index.php'); 
            }
            exit();
            
        } else {
            array_push($errors, 'Wrong credentials');
        }
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

}

if (isset($_GET['delete_id'])) {
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = 'Admin user deleted!';
    $_SESSION['type'] = 'success';
    header('Location: ../../admin/users/index3.php');
    exit();
}


?>