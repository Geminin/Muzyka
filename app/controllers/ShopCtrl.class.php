<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

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

        //var_export($albums);
        //echo $albums;

    
        
        App::getSmarty()->display("ShopView.tpl");
        
    }
    
}
