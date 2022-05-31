<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('shop'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

//logowanie
Utils::addRoute('shop',             'ShopCtrl');
Utils::addRoute('loginShow',		'LoginCtrl');
Utils::addRoute('login',			'LoginCtrl');
Utils::addRoute('logout',			'LoginCtrl');

//Baza Muzyka
Utils::addRoute('ShowDB',           'AlbumEditCtrl');
Utils::addRoute('AlbmuEdit',        'AlbumEditCtrl');
Utils::addRoute('AlbumNew',         'AlbumEditCtrl');
Utils::addRoute('AlbumDelete',      'AlbumEditCtrl');

//Baza Pracownicy
Utils::addRoute('','WorkerEditCtrl');
Utils::addRoute('','WorkerEditCtrl');
Utils::addRoute('','WorkerEditCtrl');
Utils::addRoute('','WorkerEditCtrl');

//Koszyk