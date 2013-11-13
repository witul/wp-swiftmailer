<?
/*
Plugin Name: WP SwiftMailer
Plugin URI: skyhost.pl
Description: SwiftMailer wrapper for WP
Version: 5.0.2
 */

class WP_Swiftmailer{
    public static function load(){
        include "swiftmailer/lib//swift_required.php";
    }
}
