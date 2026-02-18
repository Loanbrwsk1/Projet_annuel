<?php
session_start();

require "controllers/controller.php";

if(isset($_GET["page"]) && !empty($_GET["page"]) && isset($_SESSION["pseudo"]) && !empty($_SESSION["pseudo"])){
    $page = htmlspecialchars($_GET["page"]);
}
else{
    $page = "login";
}

if(isset($_GET["action"]) && !empty($_GET["action"])){
    if($_GET["action"] == "check-connect"){
        CheckConnect();
    }
    if($_GET["action"] == "check-create"){
        CheckCreate();
    }
    else if($_GET["action"] == "logout"){
        LogOut();
    }
    else if($_GET["action"] == "delete"){
        CheckDelete();
    }
    else if($_GET["action"] == "change-pwd"){
        CheckChangePwd();
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
else{
    Display404();
}