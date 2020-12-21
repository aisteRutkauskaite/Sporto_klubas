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

// Admin Routes
//Router::add('admin_orders', "/admin/orders", \App\Controllers\Admin\OrdersController::class);
//Router::add('admin_users', "/admin/users", \App\Controllers\Admin\UsersController::class);
//Router::add('feedback', "/admin/orders", \App\Controllers\Admin\OrdersController::class);

// User Routes
Router::add('user_feedback', '/my/feedback', \App\Controllers\User\FeedbackController::class);

// API Routes
//Router::add('api_pizza_get', '/api/pizza/get', \App\Controllers\Common\API\PizzaApiController::class);
//Router::add('api_pizza_create', '/api/pizza/create', \App\Controllers\Admin\API\PizzaApiController::class, 'create');
//Router::add('api_pizza_edit', '/api/pizza/edit', \App\Controllers\Admin\API\PizzaApiController::class, 'edit');
//Router::add('api_pizza_update', '/api/pizza/update', \App\Controllers\Admin\API\PizzaApiController::class, 'update');
//Router::add('api_pizza_delete', '/api/pizza/delete', \App\Controllers\Admin\API\PizzaApiController::class, 'delete');

Router::add('api_user_order_create', 'api/feedback/user/create', \App\Controllers\User\API\FeedbacksApiController::class, 'create');
Router::add('api_user_feedback_get', '/api/feedback/user/get', \App\Controllers\User\API\FeedbacksApiController::class, 'index');


//Router::add('api_admin_order_get', '/api/order/admin/get', \App\Controllers\Admin\API\OrdersApiController::class);
//Router::add('api_order_edit', '/api/order/admin/edit', \App\Controllers\Admin\API\OrdersApiController::class, 'edit');
//Router::add('api_order_update', '/api/order/admin/update', \App\Controllers\Admin\API\OrdersApiController::class, 'update');

//Router::add('api_admin_user_get', '/api/admin/users/get', \App\Controllers\Admin\API\UsersApiController::class);
//Router::add('api_user_edit', '/api/admin/users/edit', \App\Controllers\Admin\API\UsersApiController::class, 'edit');
//Router::add('api_user_update', '/api/admin/users/update', \App\Controllers\Admin\API\UsersApiController::class, 'update');
Router::add('feedback', "/user/feedback", \App\Controllers\User\FeedbackController::class);