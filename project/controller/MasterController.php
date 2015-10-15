<?php

namespace controller;

//req views
require_once("view/MainView.php");
require_once("view/AddPlaylistView.php");
//req models
require_once("model/Playlist.php");
//req controllers
require_once("PlaylistController.php");

class MasterController {
    
    private $playlistController;
    
    public function __construct() {
        $this->playlistController = new \controller\PlaylistController();
    }
    
    public function run() {
        $mainView = new \view\MainView();
        $addPlaylistView = new \view\AddPlaylistView();
        
        $content = $addPlaylistView->playlistInputHTML();
        
        $mainView->renderPage($content);
    }
    
}