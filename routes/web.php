<?php
/*
 * Copyright notice for the website built for saqer.com.iq.
 * Copyright (c) 2024. Jodx.dev. All rights reserved.
 * This work is protected by copyright law. Unauthorized reproduction, distribution, or modification is strictly prohibited.
 */

use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\Route;



Route::get("/",[HomeController::class,"home"]);
Route::get("/about",[HomeController::class,"about"]);
Route::get("/services",[HomeController::class,"services"]);
Route::get("/portfolio",[HomeController::class,"portfolio"]);
Route::get("/contact",[HomeController::class,"contact"]);
Route::get("/blog",[HomeController::class,"blog"]);
Route::get("/blog-details/{id}",[HomeController::class,"blog_details"]);
Route::get("/single-blog/{id}",[HomeController::class,"single_blog"]);
Route::get("/single-blog-details/{id}",[HomeController::class,"single_blog_details"]);
Route::get("/single-portfolio/{id}",[HomeController::class,"single_portfolio"]);
Route::get("/single-portfolio-details/{id}",[HomeController::class,"single_portfolio_details"]);
Route::get("/single-service/{id}",[HomeController::class,"single_service"]);
Route::get("/single-service-details/{id}",[HomeController::class,"single_service_details"]);
