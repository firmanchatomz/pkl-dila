<?php
/**
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 *
 * ---------------------------------------------------------------------------------------------------------------
 */

// ------------------------------------- ADMINISTRATOR ---------------------------------------
/**
* Template Administrator || HALAMAN ADMIN
* Aktifkan bila ingin menggunakan Template Administrator
* method adminpage akan aktif
*/

/**
* konfigurasi theme admin
* Halaman admin akan aktif bila Template Admin Aktif
* Halaman Default akan AKTIF
* Ubah halaman dengan tema yang ada
* Data Thema : Default, Darkgreen
*/
define('administrator', FALSE ); // FALSE | darkgreen
// -------------------------------------------------------------------------------------------

// ------------------------------------- HOMEPAGE --------------------------------------------

/**
* Template HomePage || HALAMAN USER 
* Aktifkan bila ingin menggunakan Template Administrator
* method homepage akan AKTIF
*/

/**
* konfigurasi theme login
* Halaman Homepage akan aktif bila Template Homepage Aktif
* Halaman Default akan AKTIF
* Ubah halaman dengan tema yang ada
* Data Thema : Default, panel
*/

define('homepage', FALSE ); // FALSE | Default
// --------------------------------------------------------------------------------------------

// ---------------------------------- LOGIN --------------------------------------------------
/**
* Template Login || HALAMAN LOGIN 
* Aktifkan bila ingin menggunakan Template lOGIN
* FILE login akan tersimpan di folder home
* Data Theme : default, modern
*/
define('login', FALSE ); // default || modern

// --------------------------------------------------------------------------------------------