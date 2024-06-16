<?php 

namespace Config\Routes;

$routes->group('/', ['namespace' => 'App\Controllers'], function ($routes) {
    
$routes->get('', 'Auth\AuthController::index');
$routes->post('/proses_login', 'Auth\AuthController::proses_login');
$routes->get('/home', 'Admin\AdminController::index');

// ============================================================================================================ //
// ============================================ Routes Menu Siswa  ============================================ //
// ============================================================================================================ //

$routes->get('/siswa', 'Admin\AdminController::index_siswa');
$routes->get('siswa/tambah_siswa', 'Admin\AdminController::create_siswa');
$routes->get('siswa/detail_siswa/(:segment)', 'Admin\AdminController::detail_siswa/$1');
$routes->post('siswa/post_siswa', 'Admin\AdminController::post_siswa');
$routes->post('siswa/update_siswa/(:segment)', 'Admin\AdminController::update_siswa/$1');
$routes->delete('siswa/delete_siswa/(:segment)', 'Admin\AdminController::delete_siswa/$1');


// ============================================================================================================ //
// ========================================== Routes End Menu Siswa  ========================================== //
// ============================================================================================================ //

// ============================================================================================================ //
// =========================================== Routes Menu Materi  ============================================ //
// ============================================================================================================ //

$routes->get('/materi', 'Admin\AdminController::index_materi');
$routes->get('materi/tambah_materi', 'Admin\AdminController::create_materi');
$routes->post('materi/post_materi', 'Admin\AdminController::post_materi');
$routes->get('materi/detail_materi/(:num)', 'Admin\AdminController::edit_materi/$1');
$routes->post('materi/update_materi/(:num)', 'Admin\AdminController::update_materi/$1');
$routes->delete('materi/delete_materi/(:num)', 'Admin\AdminController::delete_materi/$1');
$routes->get('materi/kelola_materi/(:segment)', 'Admin\AdminController::kelola_materi/$1'); 
$routes->post('materi/post_kelolaMateri', 'Admin\AdminController::post_kelolaMateri');




// ============================================================================================================ //
// =========================================== Routes Menu Materi  ============================================ //
// ============================================================================================================ //



// ============================================================================================================ //
// ============================================ Routes Menu Soal  ============================================= //
// ============================================================================================================ //

$routes->get('/soal', 'Admin\AdminController::index_soal');
$routes->get('soal/tambah_soal', 'Admin\AdminController::create_soal');
$routes->post('soal/post_soal_pilihan_ganda', 'Admin\AdminController::post_soal_pilihan_ganda');
$routes->get('soal/detail_soal/(:segment)', 'Admin\AdminController::detail_soal/$1');
$routes->post('soal/update_soal/(:segment)', 'Admin\AdminController::update_soal/$1');
$routes->delete('soal/delete_soal/(:segment)', 'Admin\AdminController::delete_soal/$1');



// ============================================================================================================ //
// ========================================== Routes End Menu Soal  =========================================== //
// ============================================================================================================ //


// ============================================================================================================ //
// ============================================ Routes Menu Skors  ============================================ //
// ============================================================================================================ //

$routes->get('skors/', 'Admin\AdminController::index_skors');

// ============================================================================================================ //
// ========================================== Routes End Menu SSkors  ========================================= //
// ============================================================================================================ //


});



