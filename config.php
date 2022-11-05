<?php
    session_start();

    $langArray = array(
        array("Cesky", "cs", "./img/czech_flag.png"),
        array("Anglicky", "en", "./img/british_flag.png"),
    );

    $language = "";
    $langOne = "";
    $langTwo = "";
    $langMiniOne = "";
    $langMiniTwo = "";
    $langFlagOne = "";
    $langFlagTwo = "";
    $userLanguage = mb_substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);

    if(!isset($_SESSION['lang']) && !isset($_GET['lang']) || !isset($_GET['lang']) || $userLanguage == 'cs' && $_GET['lang'] != 'en'){
        $language = "cs";
        $_GET['lang'] = "cs";
        $_SESSION['lang'] = "cs";
    }
    else {
        if($_GET['lang'] == "cs"){
            $language = "cs";
            $_SESSION['lang'] = "cs";
        }
        else{
            $language = "en";
            $_SESSION['lang'] = "en";
        }
    }

    if ($language == "cs"){
        $langOne = $langArray[0][0];
        $langTwo = $langArray[1][0];
        $langMiniOne = $langArray[0][1];
        $langMiniTwo = $langArray[1][1];
        $langFlagOne = $langArray[0][2];
        $langFlagTwo = $langArray[1][2];
    }
    else if($language == "en"){
        $langOne = $langArray[1][0];
        $langTwo = $langArray[0][0];
        $langMiniOne = $langArray[1][1];
        $langMiniTwo = $langArray[0][1];
        $langFlagOne = $langArray[1][2];
        $langFlagTwo = $langArray[0][2];
    }
    else{
        $langOne = $langArray[1][0];
        $langTwo = $langArray[0][0];
        $langMiniOne = $langArray[1][1];
        $langMiniTwo = $langArray[0][1];
        $langFlagOne = $langArray[1][2];
        $langFlagTwo = $langArray[0][2];
    }

    include_once "./languages/" . $_SESSION['lang'] . ".php";
    
?>