<?php
class Session {
    public static function init(){
        session_start();
    }
    
    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }
    
    public static function get($key){
        return $_SESSION[$key];
    }
    
 
    public static function destroy(){
        session_destroy();
    }
    
    public static function setUserID($ukey,$userID) {
        $_SESSION[$ukey]=$userID;
    }
    
    public static function getUserID($ukey) {
        return $_SESSION[$ukey];
    }
   
}

