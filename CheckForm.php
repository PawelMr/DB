<?php
namespace CheckForm;



class CheckForm{
    public function validationForm($formData){

        if ($formData['password'] != $formData['passwordDubl']){
            $error = 'пароли должны совпадать';
        }

        foreach ($formData as $key => $value) {
            if ($value == null ){
                switch ($key) {
                    case 'login' :
                        $error = ' Пустое поле логин';
                        break;
                    case 'password' :
                        $error = ' Пустое поле пароль';
                       break;
                    case 'name' :
                        $error = ' Пустое поле Имя';
                        break;
                    case 'email' :
                        $error = ' Пустое поле е-майл';
                        break;
                    case 'sex' :
                        $error = ' Пустое поле пол';
                        break;
                }
            }
        }

        return $error;
    }
}