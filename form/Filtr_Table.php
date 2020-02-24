<!DOCTYPE html>
<html>
<head>
    <title>таблица пользователей</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header"><h2>Работа с базой на примере таблица Users</h2> </div>
<div class="menu"><h3>меню </h3>
    <br>
    <a href="/form/filling_table.php">заполнить форму</a>
    <a href="/form/View_Table_Output.php">сохраненные данные</a>
    <a href="/form/Filtr_Table.php">поиск данных</a>


</div>
<div class="text">

    <form action="../Filter.php" method="POST" enctype="multipart/form-data">

        <div>
            <label for="fieldsFilter" class ="radio">Поле</label>
            <select id="fieldsFilter" name="fieldsFilter" size="1" >
                <option value="login" selected>Логин</option>
                <option value="name" selected>Имя</option>
                <option value="email" selected>email</option>
                <option value="sex" selected>Пол</option>
                <option value="education" selected>образование</option>
                <option value="year">год рождения</option>
                <option value="rule">согласие с правилами</option>
            </select>
            <label for="valueFilter">значение поля:</label>
            <input type="text" name="valueFilter" id="valueFilter" class="pole">
        </div>


        <input type="submit" value="Отправить" >
    </form>


</div>
<div class="footer">Муравьев Павел</div>
</body>
</html>