<!doctype>
<html>
<head>
	<title>База Users</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--<style type="text/css">
    </style>-->
</head>
<body>
    <div class="header"><h2>Работа с базой на примере таблица Users</h2> </div>
    <div class="menu"><h3>меню </h3>
        <br>
        <a href="http://db.loc/form/filling_table.php">заполнить форму</a>
        <a href="http://db.loc/form/View_Table_Output.php">сохраненные данные</a>
        <a href="http://db.loc/form/Filtr_Table.php">поиск данных</a>

    </div>
    <div class="text">
        <h2>Форма для заполнения</h2>

        <form action="../getTheForm.php" method="POST" enctype="multipart/form-data">
            <div><label for="login">Логин:</label>
                <input type="text" name="login" id="login" class="pole">
            </div>
               <div><label for="pass1">Пароль:</label>
                <input type="password" name="password" id="pass1" class="pole">
            </div>
            <div><label for="pass2">Подтвердить пароль:</label>
                <input type="password" name="passwordDubl" id="pass2" class="pole">
            </div>
            <div><label for="name">Имя:</label>
                <input type="text" name="name" id="name" class="pole">
            </div>
            <div><label for="email">email:</label>
                <input type="text" name="email" id="email" class="pole">
            </div>

            <div><label>Пол:</label>
                <label for="sex1" class="radio">Муж.</label> <input type="radio" name="sex" id="sex1" value="man">
                <label for="sex2" class="radio">Жен.</label> <input type="radio" name="sex" id="sex2" value="female">
            </div>  <!--откуда такой ид похоже лажа, ...похоже нет, так ошибок не всплывает-->
   
			<div><label for="education">образование:</label>
				<select id="education" name="education" size="1">
					<option value=""></option>
					<option value="secondary education">среднее</option>
                    <option value="incomplete higher education">неполное высшее</option>
					<option value="higher education">высшее</option>
				</select>
			</div>
            <div><label for="year">год рождения:</label>
                <input type="text" name="year" id="year" class="pole">
            </div>

            <div><label for="rule">с правилами ознакомлен:</label>
                <input type="checkbox" name="rule" id="rule" value="yes">
            </div>

            <div>
                <input type="submit" value="Отправить" style="margin-left: 70px;">
                <input type="reset" value="Отчистить" style="margin-left: 70px;">
            </div>

        </form>

    </div>
    <div class="footer">Муравьев Павел</div>
</body>
</html>