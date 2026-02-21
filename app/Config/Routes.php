<?php

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
    $routes->get('register',                     [AuthController::class, 'registerView']);
    $routes->post('register',                    [AuthController::class, 'register']);
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

// Users
/*
GET    /users                // list users (admin/manager)
POST   /users                // create user
GET    /users/{id}           // get user
PUT    /users/{id}           // update user
PATCH  /users/{id}/status    // activate/deactivate
DELETE /users/{id}           // delete user

Optional
GET    /users/{id}/teams
GET    /users/{id}/tasks
GET    /users/{id}/comments
*/


// Teams
/*
GET    /teams
POST   /teams
GET    /teams/{id}
PUT    /teams/{id}
DELETE /teams/{id}

GET    /teams/{id}/members
POST   /teams/{id}/members
DELETE /teams/{id}/members/{userId}
GET    /teams/{id}/tasks
POST   /teams/{id}/tasks
*/

// Tasks
/*
GET    /tasks
POST   /tasks
GET    /tasks/{id}
PUT    /tasks/{id}
DELETE /tasks/{id}

PATCH  /tasks/{id}/status
PATCH  /tasks/{id}/priority
PATCH  /tasks/{id}/complete
PATCH  /tasks/{id}/assign
PATCH  /tasks/{id}/unassign

Filtering routes
GET /tasks?status=pending
GET /tasks?priority=high
GET /tasks?team_id=1
GET /tasks?assignee_id=5
GET /tasks?due_today=true

*/


// Task Assignments
/*
POST   /tasks/{id}/assignees
DELETE /tasks/{id}/assignees/{userId}
GET    /tasks/{id}/assignees
*/

// Comments
/*
GET    /tasks/{taskId}/comments
POST   /tasks/{taskId}/comments
GET    /comments/{id}
PUT    /comments/{id}
DELETE /comments/{id}

POST   /comments/{id}/reply
GET    /comments/{id}/replies
*/





