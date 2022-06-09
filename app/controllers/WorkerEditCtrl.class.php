<?php

namespace app\controllers;
use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\WorkerEditForm;


class WorkerEditCtrl {
  
  private $form;
    public function __construct(){
        $this->form = new WorkerEditForm();
    }
    
    public function validateSave(){
	
	$this->form->ID - ParamUtils::getFromPost('ID',true,'Błędne wywołanie aplikacji');

	$v = new Validator();


	$this->form->Title = $v->validateFromPost('Title',[
		    'trim' => true,
		    'required' => true,
		    'required_message' => 'Podaj Tytuł Albumu'
	]);




   
 

    $this->form->ID = $v->validateFromPost('ID',[
        'trim'=> true,
        'int' =>true
    ]);
    $this->form->Login=$v->validateFromPost('Role',[
      'trim' => true,
      'required' => true,
      'required_message' => 'Podaj Login'
    ]);

    $this->form->Password=$v->validateFromPost('Password',[
      'trim' => true,
      'required' => true,
      'required_message' => 'Podaj Hasło'
    ]);

    $this->form->Role=$v->validateFromPost('Role',[
      'trim' => true,
      'required' => true,
      'required_message' => 'Podaj role'
    ]);

	return !App::getMessages()->isError();

	
	}


	//validacja danych przed wyswietleniem do edycji
	public function validateEdit() {
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->Album_id = ParamUtils::getFromCleanURL(1,true,'Błędne wywołanie aplikacji');
		return ! App::getMessages()->isError();
	}


		
public function action_ShowUsers(){
  $Users = App::getDB()->select("users","*");
  App::getSmarty()->assign("Users",$Users);
  $this->generateView();
}

  public function action_Add(){

  }

  public function action_Fire(){

}

public function action_Edit(){

}

public function generateView(){
  
}

}