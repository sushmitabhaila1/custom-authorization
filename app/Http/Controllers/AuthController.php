<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Register
    public function register(){
            // GET + POST
            //echo"<h1>Register Method</h1>";
            return view("auth.register");
    }

    //Login
    public function login(){
            // GET + POST
            //echo"<h1>Login Method</h1>";
            return view("auth.login");
    }

    //Dashboard
    public function dashboard(){
            // After Login
            //echo"<h1>Dashboard Method</h1>";
            return view("dashboard");
    }

    //Profile
    public function profile(){
            // After Login
            //echo"<h1>Profile Method</h1>";
            return view("profile");
    }

    //Logout
    public function logout(){
            // After Login
            echo"<h1>Logout Method</h1>";
    }
}
