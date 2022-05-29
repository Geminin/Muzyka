<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use core\SessionUtils;
use app\transfer\User;

class LoginCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;
/*
        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)
        if ($this->form->login == "admin" && $this->form->pass == "admin") {
            RoleUtils::addRole('admin');
        } else if ($this->form->login == "user" && $this->form->pass == "user") {
            RoleUtils::addRole('user');
        } else {
            Utils::addErrorMessage('Niepoprawny login lub hasło');
        }

  */      
        $login = $this->form->login;
        $pass = $this->form->pass;

        $Acc = App::getDB()->get("users","*",["Login"=>$login]);
        if ($Acc == NULL){
            Utils::addErrorMessage('Nie poprawna nazwa użytkownika');
        } else if ($pass != $Acc['Password']){
            Utils::addErrorMessage('Niepoprawne hasło');
        }

        if ($Acc["Role"]=='User'){
            RoleUtils::addRole('User');
        }
        if ($Acc["Role"]=='Admin'){
            RoleUtils::addRole('Admin');
        }
        if ($Acc["Role"]=='Worker'){
            RoleUtils::addRole('Worker');
        }

        



        
        return !App::getMessages()->isError();
    }


    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->redirectTo("Coś");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        App::getRouter()->redirectTo('shop');
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
