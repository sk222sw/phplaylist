<?php

namespace controller;

//req views
require_once("project/view/MainView.php");
require_once("project/view/AddPlaylistView.php");
require_once("project/view/NavigationView.php");
//req models
require_once("project/model/Playlist.php");
//req controllers
require_once("PlaylistController.php");

class MasterController {
    
    private $playlistController;
    
    public function __construct() {
        $this->playlistController = new \controller\PlaylistController();
        $this->navigationView = new \view\NavigationView();
    }
    
    public function run() {
        $mainView = new \view\MainView();
        $addPlaylistView = new \view\AddPlaylistView();
        
        if ($this->navigationView->clickedPlaylists()) {
            $playlistController = new \controller\PlaylistController();
            
            $content = $playlistController->playlistAction();
    
            // $content = $addPlaylistView->playlistInputHTML();
        } else {
            $content = "<h1>Yo!</h1>";
        }

        
        $mainView->renderPage($content);
    }
    
}