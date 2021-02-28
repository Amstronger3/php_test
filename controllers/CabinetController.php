<?php

class CabinetController{
    
    public function actionIndex() {
        
        $userId = User::checkLogged();
//        echo $userId;
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
        
    }
    
    public function actionEdit() {
        
        $userId = User::checkLogged();
        $user = User::getUserById($userId);
        
        $name = $user['name'];
        $password = $user['password'];
        
        $result = false;
        
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($name)) {       
                $errors[] = 'Имя не может быть меньше 2-ух символов!';
            }
            
            if (!User::checkPassword($password)){
                $errors[] = 'Пароль должен быть больше 5-ти символов!';
            }
            
            if ($errors == false){
                $result = User::edit($userId, $name, $password);
            }
            
        }
        
        require_once(ROOT . '/views/cabinet/edit.php');
        return true;
    }
}