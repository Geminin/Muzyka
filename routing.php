<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('shop'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('shop', 'ShopCtrl');
Utils::addRoute('loginShow',		'LoginCtrl');
Utils::addRoute('login',			'LoginCtrl');
Utils::addRoute('logout',			'LoginCtrl');

