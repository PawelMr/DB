<!DOCTYPE html>
<html>
<head>
    <title>таблица пользователей</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header"><h2>Работа с базой на примере таблицы Users</h2> </div>
<div class="menu"><h3>меню </h3>
    <br>
    <a href="/form/filling_table.php">заполнить форму</a>
    <a href="/form/View_Table_Output.php">сохраненные данные</a>
    <a href="/form/Filtr_Table.php">поиск данных</a>

</div>
<div class="text">

    <?
//    require('../ViewTable2.php');
    require('../vendor/autoload.php');
    use ViewTable\ViewTable;

    $table = new ViewTable();
    $table->FillTable();
    ?>

</div>
<div class="footer">Муравьев Павел</div>
</body>
</html>