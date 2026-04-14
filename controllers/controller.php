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
        header("Location: home");
        exit();
    }
    else{
        header("Location: index.php?page=login");
        exit();
    }
}

function DisplayHome()
{
    require_once "models/model.php";
    GetDisabledButton();
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
        header("location: home");
        exit();
    }
    else{
        header("Location: create");
        exit();
    }
}

function LogOut()
{
    session_start();
    unset($_SESSION['pseudo']);
    session_destroy();
    header("location: login");
    exit();
}

function DisplayAccount()
{
    require "views/account.php";
}

function DisplayQuestion($theme, $question)
{
    require_once "models/model.php";
    if(CanDoQuestion($theme, $question)){
        require "views/questions/$theme/$question.php";
    }
    else{
        header("Location: http://projet.local/home");
        exit();
    }
}

function CheckDelete()
{
    require_once "models/model.php";
    if(Delete()){
        header("Location: login");
        exit();
    }
    else{
        header("Location: account");
        exit();
    }
}

function CheckChangePwd()
{
    require_once "models/model.php";
    ChangePwd();
    header("Location: account");
    exit();
}

function CheckAnswer($theme, $question)
{
    require_once "models/model.php";
    $result = CheckAnswerDB($theme, $question);
    if($result || $_SESSION["error"] == "Question déjà validée"){
        header("Location: home");
    }
    else{
        header("Location: question/$theme/$question");
    }
    exit();
}