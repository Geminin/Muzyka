<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use app\forms\LoginForm;

/**
 * HelloWorld built in Amelia - sample controller
 *
 * @author Przemysław Kudłacik
 */
class ShopCtrl {
    
    public function action_shop() {

        //$albums =App::getDB()->select("albums","*");
        $albums = App::getDB()->select("albums",["[>]performers" => "Performer_id"],
            [
                "albums.Album_id",
                "performers.Performer_id",
                "performers.Name",
                "albums.Title",
                "albums.Genre",
                "albums.Price",
                "albums.Tracks"
                
            ]);

        App::getSmarty()->assign("lista",$albums);

        $Cart = App::GetDB()->select("orders",["[>]albums" => "Album_id"],
        [
                "albums.Title",
                "albums.Price"

        ],[
            "orders.User_id"  => $this->form->ID
        ]);

        //var_export($albums);
        //echo $albums;

    
        App::getSmarty()->assign("Cart",$Cart);
        App::getSmarty()->display("ShopView.tpl");
        
    }

    public function action_AddToCart(){

        

        App::getDB()->insert("orders",[
            "User_id" =>$this->form->ID,
            "Album_id" =>$this->form->Album_id
        
        ]);
        $orders = App::getSmarty()-> select("orders","*",[
            "User_id" => $this->form->ID
        ]);

        App::getSmarty()->assign("orders",$orders);

        App::getRouter()->forwardTo('shop');
   

    }


    
}
