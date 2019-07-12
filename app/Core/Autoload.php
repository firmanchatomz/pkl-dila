<?php 
// define('BASEPATH', TRUE);
/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 */

// ----------------------------------------------------------------------------------------------------------

// pemanggilan directory class
use App\Core\Controller;

// $GLOBALS['database'] = $Database;

// identifikasi class kedalam variabel $controller_auto
$controller_auto 	= new Controller();


## -------------------------------------------------------------------------------
## version 1.8.8 (demo version) 
## -------------------------------------------------------------------------------


// -------------------------------------------------------------------------------

// this function for called model in class controller
// -------------------------- VIEW -----------------------------------------------
function model($model=null) {
	global $controller_auto;

	return $controller_auto->model($model);
}

// -------------------------------------------------------------------------------

// this function for called popup in class controller
// -------------------------- VIEW -----------------------------------------------
function notif($pesan, $link) {
	global $controller_auto;

	return $controller_auto->popup($pesan, $link);
}

// -------------------------------------------------------------------------------

// this function for called popup in class controller
// -------------------------- VIEW -----------------------------------------------
function redirect($link) {
	global $controller_auto;

	return $controller_auto->redirect($link);
}

// -------------------------------------------------------------------------------

## AUTOLOAD SYSTEM
## THIS FUNTION for all class system
## this is funtion system
## !important for not modified

// ---------------------------- WARNING -----------------------------------------
function warning($teks, $info=null) {
	if (!is_null($info))
		$info = ' - <i>(' . $info . ')</i>';
	echo "<b>Chatomz Berkata : </b>" . $teks . $info;
	die();
}

// -----------------------------------------------------------------------------

## AUTOLOAD BASE_URL
## THIS FUNTION for all class system
## this is funtion system
## !important for not modified

// ---------------------------- WARNING -----------------------------------------
function base_url($link= null) {
	global $Url;
	if (is_null($link)) return $Url['BASE_URL']; 
	
	return $Url['BASE_URL'] . $link;
}

// -----------------------------------------------------------------------------