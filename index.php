<?php
session_start();

require "controllers/controller.php";

if(isset($_GET["page"]) && !empty($_GET["page"]) && isset($_SESSION["pseudo"]) && !empty($_SESSION["pseudo"])){
    $page = htmlspecialchars($_GET["page"]);
    if($page == "question" && (isset($_GET["theme"]) && !empty($_GET["theme"]) && isset($_GET["question"]) && !empty($_GET["question"]))){
        $theme = htmlspecialchars($_GET["theme"]);
        $question = htmlspecialchars($_GET["question"]);
    }
}
else{
    $page = "login";
}

if(isset($_GET["action"]) && !empty($_GET["action"])){
    $action = htmlspecialchars($_GET["action"]);
    if($action == "check-connect"){
        CheckConnect();
    }
    if($action == "check-create"){
        CheckCreate();
    }
    else if($action == "logout"){
        LogOut();
    }
    else if($action == "delete"){
        CheckDelete();
    }
    else if($action == "change-pwd"){
        CheckChangePwd();
    }
    else if($action == "check-answer"){
        if(isset($_GET["theme"]) && !empty($_GET["theme"]) && isset($_GET["question"]) && !empty($_GET["question"])){
            CheckAnswer(htmlspecialchars($_GET["theme"]), htmlspecialchars($_GET["question"]));
        }
    }
}

if($page == "login"){
    DisplayLoginPage();
}
else if($page == "home"){
    DisplayHome();
}
else if($page == "create"){
    DisplayCreate();
}
else if($page == "account"){
    DisplayAccount();
}
else if($page == "question" && (int)$question <= 5){
    DisplayQuestion($theme, $question);
}
else if($page == "theme_finished"){
    DisplayThemeFinished();
}
else{
    Display404();
}

