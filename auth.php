<?php
session_start();


if (isset($_POST["login"]) and $_POST["login"]!='')
{
    try {
        $sql = 'SELECT id, name, password FROM users WHERE email=(:login)';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':login', $_POST['login']);
        $stmt->execute();
        //$_SESSION['msg'] = "Вы успешно вошли в систему";
        // return generated id
        // $id = $pdo->lastInsertId('id');

    } catch (PDOexception $error) {
        $msg = "Ошибка аутентификации: " . $error->getMessage();
    }
    // если удалось получить строку с паролем из БД
    if (is_null($msg)) {
        if ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
            if (MD5($_POST["password"]) != $row['password']) $msg = "Неправильный пароль!";
            else {
                // успешная аутентификация
                $_SESSION['login'] = $_POST["login"];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['msg'] = "Вы успешно вошли в систему";
                header('Location: /index.php?page=catalog');
                exit( );
            }
        }
        else $msg = "Неправильное имя пользователя!";
        header('Location: /index.php?page=login');
    }

}

if (isset($_GET["logout"]))
{
    $_SESSION = null;
    $_SESSION['msg'] =  "Вы успешно вышли из системы";
    header('Location: /index.php?page=login');
    exit( );
}


?>