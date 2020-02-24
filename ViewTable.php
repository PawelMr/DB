<?php
namespace ViewTable;
require('vendor/autoload.php');
use ConnectDB\PdoCause;

class ViewTable{
    public function FillTable()
    {
        $pdo = new PdoCause();
        $pdo->causePdo();
        $connect = $pdo->causePdo();
        $data = $connect->query('SELECT * FROM user')->fetchAll($connect::FETCH_UNIQUE);
        //var_dump($data);
        ?>
        <table>
        <caption> Таблица пользователей</caption>
        <tbody>

        <?
        echo '<tr><td>Id</td>
        <td>Логин</td>
        <td>Имя</td>
        <td>E-mail</td>
        <td>Пол</td>
        <td>оброзование</td></tr>';
        foreach ($data as $key => $value) {
            //   echo '<tr>id '.$key.'имя '.$value['name'].'email '.$value['email'].'<br>';
            echo '<tr><td>' . $key . '</td>
                <td>' . $value['login'] . '</td>
                <td>' . $value['name'] . '</td>
                <td>' . $value['email'] . '</td>
                <td>' . $value['sex'] . '</td>
                <td>' . $value['education'] . '</td></tr>';
        }
        ?>
        </tbody>
        </table><?
    }
}