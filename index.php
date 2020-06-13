<?php
/*
 * Plugin Name: Black Lives Matter Widget
 * Version: 1.0.0
 * Description: Floating Widget for solidarity with Black Lives Matter Campaign
 * Author: Atiq Samtia
 * Author URI: https://atiqsamtia.com
 * Plugin URI: https://github.com/atiqsamtia/black-lives-matter-wordpress-widget
 * Text Domain: black-lives-matter
 * Domain Path: /languages
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 

    Black Lives Matter Widget is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    any later version.
    
    Black Lives Matter Widget is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
    
    You should have received a copy of the GNU General Public License
    along with Black Lives Matter Widget. If not, see {URI to Plugin License}.
*/


if(is_admin()){
    add_action( 'admin_menu', 'black_lives_matter_menu' );
} else {
    add_action( 'wp_footer', 'black_lives_matter_front', 100 );
}

function black_lives_matter_front(){

    if(get_option('blmw_active', 1) == 1){
        $blmw_message =  get_option('blmw_message', 'Black Lives Matter');
        include_once "front.php";
    }

}


function black_lives_matter_menu() {
	add_options_page( 'Black Lives Matter Widget', 'Black Lives Matter Widget', 'manage_options', 'black-lives-matter', 'black_lives_matter_options' );
}


function black_lives_matter_options() {

    include_once "backend.php";

}