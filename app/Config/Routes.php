<?php

use App\Controllers\AdminController;
use App\Controllers\ManagerController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\AuthController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function () {
    return redirect()->to(base_url('/auth/login'));
});
// Authentication Routes
/*
POST   /auth/login
POST   /auth/register
POST   /auth/logout
POST   /auth/refresh-token
GET    /auth/me
POST   /auth/forgot-password
POST   /auth/reset-password
*/
// Guest routes (redirect to dashboard if already logged in)
$routes->group('auth', ['filter' => 'guest'], function ($routes) {
    $routes->get('login',                        [AuthController::class, 'loginView']);
    $routes->post('login',                       [AuthController::class, 'login']);
    $routes->get('forgot-password',              [AuthController::class, 'forgotPasswordView']);
    $routes->post('forgot-password',             [AuthController::class, 'forgotPassword']);
    $routes->get('reset-password/(:segment)',    [AuthController::class, 'resetPasswordView/$1']);
    $routes->post('reset-password',              [AuthController::class, 'resetPassword']);
});

// Protected routes (must be logged in)
$routes->group('auth', ['filter' => 'auth'], function ($routes) {
    $routes->post('logout',        [AuthController::class, 'logout']);
    $routes->post('refresh-token', [AuthController::class, 'refreshToken']);
    $routes->get('me',             [AuthController::class, 'me']); 
});

$routes->group('admin' , ['filter' => ['admin' , 'auth']], function($routes) {
    $routes->get('dashboard' , [AdminController::class , 'dashboard']);
    $routes->get('users/create' , [AdminController::class ,'createUserForm']);
    $routes->post('users/create' , [AdminController::class ,'createUserStore']);
    $routes->get('users' , [AdminController::class ,'usersListing']);

    $routes->get('teams', [AdminController::class ,'teamsListing']);
    $routes->get('teams/create', [AdminController::class ,'createTeamForm']);
    $routes->post('teams/create', [AdminController::class ,'createTeamStore']);

    $routes->get('teams/members/(:num)' , [AdminController::class ,'teamMembers/$1']);
    $routes->post('teams/members/(:num)/add/' , [AdminController::class ,'teamMembersAdd/$1']);

});
$routes->group('manager' , ['filter' => ['manager' , 'auth']], function($routes) {
    $routes->get('dashboard' , [ManagerController::class , 'dashboard']);
    $routes->get('teams' , [ManagerController::class , 'teamsListing']);
    $routes->get('teams/(:num)' , [ManagerController::class , 'teamsView/$1']);
});


