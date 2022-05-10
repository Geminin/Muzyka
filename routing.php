<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('Shop'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('Buy', 'Buy');
Utils::addRoute('add_to_basket', 'add_basket');

Utils::addRoute('Add_ALbum', '');

Utils::addRoute('', '');
Utils::addRoute('', '');
Utils::addRoute('', '');
Utils::addRoute('', '');
Utils::addRoute('', '');
Utils::addRoute('', '');
Utils::addRoute('', '');
