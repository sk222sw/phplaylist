<?php

namespace controller;

//req views
require_once("view/MainView.php");
//req models
require_once("model/Playlist.php");
//req controllers
require_once("PlaylistController.php");

class MasterController {
    
    public function run() {
        $mainView = new \view\MainView();
        $testPlaylist = new \model\Playlist("yolo");
        
        
        $mainView->renderPage($testPlaylist->getTitle());
        
        
        
    }
    
}