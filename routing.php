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
Utils::addRoute('AlbumEdit',        'AlbumEditCtrl');
Utils::addRoute('AlbumNew',         'AlbumEditCtrl');
Utils::addRoute('AlbumDelete',      'AlbumEditCtrl');
Utils::addRoute('MusicSave',        'AlbumEditCtrl');
/*
//Baza Pracownicy
Utils::addRoute('ShowDB',           'WorkerEditCtrl');
Utils::addRoute('WorkerEdit',       'WorkerEditCtrl');
Utils::addRoute('UserEdit',         'WorkerEditCtrl');
Utils::addRoute('UserDelete',       'WorkerEditCtrl');
Utils::addRoute('UserSave',         'WorkerEditCtrl');
*/
//Koszyk

Utils::addRoute('AddToCart',        'ShopCtrl');
Utils::addRoute('ShowCart',         'CartCtrl');