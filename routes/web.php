<?php
/*
 * Copyright notice for the website built for saqer.com.iq.
 * Copyright (c) 2024. Jodx.dev. All rights reserved.
 * This work is protected by copyright law. Unauthorized reproduction, distribution, or modification is strictly prohibited.
 */

use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\Route;



Route::get("/",[HomeController::class,"home"])->name('home');
Route::get("/about",[HomeController::class,"about"])->name('about');
Route::get("/services",[HomeController::class,"services"])->name('services');
Route::get("/portfolio",[HomeController::class,"portfolio"])->name('portfolio');
Route::get("/contact",[HomeController::class,"contact"])->name('contact');
Route::get("/blog",[HomeController::class,"blog"])->name('blog');
Route::get("/blog-details/{slug}",[HomeController::class,"blog_details"])->name('blog-details');
Route::get("/single-portfolio/{id}",[HomeController::class,"single_portfolio"])->name('single-portfolio');
Route::get("/single-portfolio-details/{id}",[HomeController::class,"single_portfolio_details"])->name('single-portfolio-details');
Route::get("/single-service/{id}",[HomeController::class,"single_service"])->name('single-service');
Route::get("/single-service-details/{id}",[HomeController::class,"single_service_details"])->name('single-service-details');
Route::post("/contact/submit",[HomeController::class,"submitContact"])->name('contact.submit');
