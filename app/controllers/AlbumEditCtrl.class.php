<?php

namespace app\controllers;

use app\forms\MusicEditForm;
use DateTime;
use PDOException;
use core\App;
use core\Message;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\Validator;

class AlbumEditCtrl
{
	private $form;
	public function __construct()
	{
		$this->form = new MusicEditForm();
	}

	public function validateSave()
	{

		$this->form->Album_id - ParamUtils::getFromPost('Album_id', true, 'Błędne wywołanie aplikacji');

		$v = new Validator();


		$this->form->Title = $v->validateFromPost('Title', [
			'trim' => true,
			'required' => true,
			'required_message' => 'Podaj Tytuł Albumu'
		]);

		$this->form->Performer_id = $v->validateFromPost('Performer_id', [
			'trim' => true,
			'required' => true,
			'required_message' => 'Podaj Id wykonawcy',
			'int' => true


		]);

		$this->form->Genre = $v->validateFromPost('Genre', [
			'trim' => true,
			'required' => true,
			'required_message' => 'Podaj gatunek',
		]);
		$this->form->Price = $v->validateFromPost('Price', [
			'trim' => true,
			'required' => true,
			'float' => true,
			'required_message' => 'Podaj cenę',
		]);
		$this->form->Tracks = $v->validateFromPost('Tracks', [
			'trim' => true,
			'required_message' => 'Podaj utwory'
		]);

		return !App::getMessages()->isError();
	}


	//validacja danych przed wyswietleniem do edycji
	public function validateEdit()
	{
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->Album_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
		return !App::getMessages()->isError();
	}



	public function action_ShowDB()
	{
		$Album = App::getDB()->select('albums', '*');
		App::getSmarty()->assign("Album", $Album);

		$Performer = App::getDB()->select('performers', '*');
		App::getSmarty()->assign("Performer", $Performer);
		$this->generateView2();
	}
	public function action_AlbumNew()
	{
		$this->generateView();
	}

	//wysiweltenie rekordu do edycji wskazanego parametrem 'id'
	public function action_AlbumEdit()
	{
		// 1. walidacja id osoby do edycji
		if ($this->validateEdit()) {
			try {
				// 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
				$record = App::getDB()->get("albums", "*", [
					"Album_id" => $this->form->Album_id
				]);
				// 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
				$this->form->Album_id = $record['Album_id'];
				$this->form->Performer_id = $record['Performer_id'];
				$this->form->Title = $record['Title'];
				$this->form->Genre = $record['Genre'];
				$this->form->Price = $record['Price'];
				$this->form->Tracks = $record['Tracks'];
			} catch (\PDOException $e) {
				Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
				if (App::getConf()->debug)
					Utils::addErrorMessage($e->getMessage());
			}
		}

		// 3. Wygenerowanie widoku
		$this->generateView();
	}

	public function action_AlbumDelete()
	{
		// 1. walidacja id osoby do usuniecia
		if ($this->validateEdit()) {

			try {
				// 2. usunięcie rekordu
				App::getDB()->delete("albums", [
					"Album_id" => $this->form->Album_id
				]);
				App::getMessages()->App::addInfo('Pomyślnie usunięto rekord');
			} catch (PDOException $e) {
				App::getMessages()->App::addError('Wystąpił błąd podczas usuwania rekordu');
				if (App::getConf()->debug) App::getMessages()->Utils::addError($e->getMessage());
			}
		}

		// 3. Przekierowanie na stronę listy osób
		//forwardTo('');		
	}

	public function action_MusicSave()
	{

		// 1. Walidacja danych formularza (z pobraniem)
		if ($this->validateSave()) {
			// 2. Zapis danych w bazie
			try {

				//2.1 Nowy rekord
				
				if (!isset($this->form->Album_id)) {
					//sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
					$count = App::getDB()->count("albums");
					if ($count <= 30) {
						App::getDB()->update("albums", [
							"Album_id" => $this->form->Album_id,
							"Title" => $this->form->Title,
							"Performer_id" => $this->form->Performer_id,
							"Genre" => $this->form->Genre,
							"Price" => $this->form->Price,
							"Tracks" => $this->form->Tracks
						],[
							"Album_id" => $this->form->Album_id
						]);
					} else { //za dużo rekordów
						// Gdy za dużo rekordów to pozostań na stronie
						App::getMessages()->Utils::addInfo('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
						$this->generateView(); //pozostań na stronie edycji
						exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
					}
				} else {
					//2.2 Edycja rekordu o danym ID
					App::getDB()->insert("albums", [
						
						
						"Title" => $this->form->Title,
						"Performer_id" => $this->form->Performer_id,
						"Genre" => $this->form->Genre,
						"Price" => $this->form->Price,
						"Tracks" => $this->form->Tracks
					]);
				}
				Utils::addErrorMessage('Pomyślnie zapisano rekord');
			} catch (\PDOException $e) {
				Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (App::getConf()->debug) Utils::addErrorMessage($e->getMessage());
			}

			// 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
			App::getRouter()->forwardTo('ShowDB');
		} else {
			// 3c. Gdy błąd walidacji to pozostań na stronie	
			$this->generateView();
		}
	}

	public function generateView()
	{
		App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
		APP::getSmarty()->display('MusicEdit.tpl');
	}

	public function generateView2()
	{
		App::getSmarty()->assign('form', $this->form);
		App::getSmarty()->display('DbView.tpl');
	}
}


class PerformerEditCtrl
{
	private $form;
	public function __construct()
	{
		$this->form = new MusicEditForm();
	}

	public function validateSave()
	{

		$this->form->Performer_id - ParamUtils::getFromPost('Performer_id', true, 'Błędne wywołanie aplikacji');

		$v = new Validator();

		$this->form->Performer_id = $v->validateFromPost('Performer_id', [
			'trim' => true,
			'required' => true,
			'required_message' => 'Podaj Id wykonawcy',
			'int' => true


		]);

		$this->form->Name = $v->validateFromPost('Name', [
			'trim' => true,
			'required' => true,
			'required_message' => 'Podaj wykonawce'
		]);

		return !App::getMessages()->isError();
	}


	//validacja danych przed wyswietleniem do edycji
	public function validateEdit()
	{
		//pobierz parametry na potrzeby wyswietlenia danych do edycji
		//z widoku listy osób (parametr jest wymagany)
		$this->form->Performer_id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
		return !App::getMessages()->isError();
	}



	public function action_ShowDB()
	{
		$Album = App::getDB()->select('albums', '*');
		App::getSmarty()->assign("Album", $Album);

		$Performer = App::getDB()->select('performers', '*');
		App::getSmarty()->assign("Performer", $Performer);
		$this->generateView2();
	}
	public function action_PerformerNew()
	{
		$this->generateViewP();
	}

	//wysiweltenie rekordu do edycji wskazanego parametrem 'id'
	public function action_PerformerEdit()
	{
		// 1. walidacja id osoby do edycji
		if ($this->validateEdit()) {
			try {
				// 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
				$record = App::getDB()->get("performers", "*", [
					"Performer_id" => $this->form->Performer_id
				]);
				// 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
				$this->form->Album_id = $record['Name'];
				$this->form->Performer_id = $record['Performer_id'];
			} catch (\PDOException $e) {
				Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
				if (App::getConf()->debug)
					Utils::addErrorMessage($e->getMessage());
			}
		}

		// 3. Wygenerowanie widoku
		$this->generateViewP();
	}

	public function action_AlbumDelete()
	{
		// 1. walidacja id osoby do usuniecia
		if ($this->validateEdit()) {

			try {
				// 2. usunięcie rekordu
				App::getDB()->delete("performers", [
					"Performer_id" => $this->form->Performer_id
				]);
				App::getMessages()->App::addInfo('Pomyślnie usunięto rekord');
			} catch (PDOException $e) {
				App::getMessages()->App::addError('Wystąpił błąd podczas usuwania rekordu');
				if (App::getConf()->debug) App::getMessages()->Utils::addError($e->getMessage());
			}
		}

		// 3. Przekierowanie na stronę listy osób
		//forwardTo('');		
	}

	public function action_MusicSave()
	{

		// 1. Walidacja danych formularza (z pobraniem)
		if ($this->validateSave()) {
			// 2. Zapis danych w bazie
			try {

				//2.1 Nowy rekord
				if ($this->form->Album_id == '') {
					//sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
					$count = App::getDB()->count("performers");
					if ($count <= 40) {
						App::getDB()->insert("albums", [
							"Performer_id" => $this->form->Album_id,
							"Name" => $this->form->Title

						]);
					} else { //za dużo rekordów
						// Gdy za dużo rekordów to pozostań na stronie
						App::getMessages()->Utils::addInfo('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
						$this->generateViewP(); //pozostań na stronie edycji
						exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
					}
				} else {
					//2.2 Edycja rekordu o danym ID
					App::getDB()->update("performers", [
						"Performer_id" => $this->form->Album_id,
						"Name" => $this->form->Title,



					], [
						"Performer_id" => $this->form->Performer_id
					]);
				}
				App::getMessages()->Utils::addInfo('Pomyślnie zapisano rekord');
			} catch (\PDOException $e) {
				App::getMessages()->App::addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (App::getConf()->debug) App::getMessages()->Utils::addError($e->getMessage());
			}

			// 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
			App::getRouter()->forwardTo('ShowDB');
		} else {
			// 3c. Gdy błąd walidacji to pozostań na stronie	
			$this->generateViewP();
		}
	}

	public function generateView()
	{
		App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
		APP::getSmarty()->display('MusicEdit.tpl');
	}
	public function generateViewP()
	{
		App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
		APP::getSmarty()->display('MusicEdit.tpl');
	}


	public function generateView2()
	{
		App::getSmarty()->assign('form', $this->form);
		App::getSmarty()->display('DbView.tpl');
	}
}
