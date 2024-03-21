<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Клиент</title>
</head>
<body>
    <form action="server.php" method="POST">
        <input name="login" type="text" placeholder="введите логин"><br>
        <input name="pass" type="password" placeholder="введите пароль"><br>
        <input type="submit" value="войти"><br>
    </form>
    <form action="server/task1.php" method="POST">
        <input name="number" type="number" placeholder="введите число"><br>
        <input name="number1" type="number" placeholder="введите второе число"><br>
        <input type="submit" value="Вычислить" ><br>
    </form>
    <form action="server/task2v2.php" method="POST">
        <input name="CountApple" type="number" placeholder="Количество яблок"><br>
        <input name="CountChild" type="number" placeholder="Количество школьников"><br>
        <input type="submit" value="Вывести результат"><br>
    </form>
    <form action="server/task2.php" method="POST">
        <input name="number" type="text" placeholder="Введите число"><br>
        <input type="submit" value="Отправить"><br>
    </form>
    <form action="server/task3.php" method="POST">
        <input name="numberCard" type="text" placeholder="Введите номер карты"><br>
        <input type="submit" value="Проверить"><br>
    </form>

    <a href="mass.php" >Массивы</a>

</body>
</html>