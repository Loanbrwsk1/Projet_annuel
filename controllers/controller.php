<?php

function Display404()
{
    require "views/404.php";
}

function DisplayLoginPage()
{
    require "views/login.php";
}

function CheckConnect()
{
    require "models/model.php";
    if(Connect()){
        header("Location: index.php?page=home");
        exit();
    }
    else{
        header("Location: index.php?page=login");
        exit();
    }
}

function DisplayHome()
{
    require "views/home.php";
}

function DisplayCreate()
{
    require "views/create-account.php";
}

function CheckCreate()
{
    require_once "models/model.php";
    if(Create()){
        header("location: index.php?page=home");
        exit();
    }
    else{
        header("Location: index.php?page=create");
        exit();
    }
}

function LogOut()
{
    session_start();
    unset($_SESSION['pseudo']);
    session_destroy();
    header("location: index.php?page=login");
    exit();
}

function DisplayAccount()
{
    require "views/account.php";
}

function CheckDelete()
{
    require_once "models/model.php";
    if(Delete()){
        header("Location: index.php?page=login");
        exit();
    }
    else{
        header("Location: index.php?page=account");
        exit();
    }
}

function CheckChangePwd()
{
    require_once "models/model.php";
    ChangePwd();
    header("Location: index.php?page=account");
    exit();
}