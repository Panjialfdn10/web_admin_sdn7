<?php 
namespace Config\Routes;
use CodeIgniter\Router\RouteCollection;

$routes->group('api/v1', ['namespace' => 'App\Controllers\API\v1'], function($routes) {


// ============================================================================================================ //
// ========================================== Routes API Menu Siswa  ========================================== //
// ============================================================================================================ //

    $routes->get('siswa', 'APISiswaController::get_all_siswa');
    $routes->get('nis/(:segment)', 'APISiswaController::find_by_nis/$1');

// ============================================================================================================ //
// ======================================== Routes API End Menu Siswa  ======================================== //
// ============================================================================================================ //

// ============================================================================================================ //
// ========================================== Routes API Menu Soal  =========================================== //
// ============================================================================================================ //

    $routes->get('soal', 'APISiswaController::get_all_soal');

// ============================================================================================================ //
// ======================================== Routes API End Menu Soal  ========================================= //
// ============================================================================================================ //

// ============================================================================================================ //
// ========================================== Routes API Menu Skors  =========================================== //
// ============================================================================================================ //

$routes->get('skors', 'APISiswaController::get_all_skors');

// ============================================================================================================ //
// ======================================== Routes API End Menu Skors  ========================================= //
// ============================================================================================================ //

});