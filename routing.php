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
Utils::addRoute('ShowDB',           'AlbumEditCtrl',['Worker','Admin']);
Utils::addRoute('AlbumEdit',        'AlbumEditCtrl',['Worker','Admin']);
Utils::addRoute('AlbumNew',         'AlbumEditCtrl',['Worker','Admin']);
Utils::addRoute('AlbumDelete',      'AlbumEditCtrl',['Worker','Admin']);
Utils::addRoute('MusicSave',        'AlbumEditCtrl',['Worker','Admin']);
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