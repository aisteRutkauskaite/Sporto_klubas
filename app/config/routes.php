<?php

use Core\Router;

// Auth Controllers
Router::add('login', '/login', \App\Controllers\Common\Auth\LoginController::class, 'login');
Router::add('register', '/register', \App\Controllers\Common\Auth\RegisterController::class, 'register');
Router::add('logout', '/logout', \App\Controllers\Common\Auth\LogoutController::class, 'logout');
Router::add('install', '/install', \App\Controllers\Common\InstallController::class, 'install');

// Common Routes
Router::add('index', '/', \App\Controllers\Common\HomeController::class);
Router::add('index2', '/index.php', \App\Controllers\Common\HomeController::class);


// User Routes
Router::add('user_feedback', '/feedback', \App\Controllers\User\FeedbackController::class);


Router::add('api_user_order_create', 'api/feedback/user/create', \App\Controllers\User\API\FeedbacksApiController::class, 'create');
Router::add('api_user_feedback_get', '/api/feedback/user/get', \App\Controllers\User\API\FeedbacksApiController::class, 'create');


Router::add('feedback', "/user/feedback", \App\Controllers\User\FeedbackController::class);
