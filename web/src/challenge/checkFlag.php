<?php
session_start();
$flag1 = "VSL{select_is_so_easy}";
$flag2 = "VSL{condition_in_sql}";
$flag3 = "VSL{LIKE_in_sql_is_so_easy}";
$flag4 = "VSL{insert_is_not_hard_for_me}";
$flag5 = "VSL{bing_chi_ling_is_so_cute}";
$flag6 = "VSL{delete_my_info_please}";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flagInput = $_POST["flag"];
    $idChall = $_POST["idChall"];

    switch ($idChall) {
        case "1":
            if ($flagInput == $flag1) {
                $_SESSION['currentLevel'] = 2;
                echo $flag1;
            } else {
                echo false;
            }
            break;
        case "2":
            if ($flagInput == $flag2) {
                $_SESSION['currentLevel'] = 3;
                echo $flag2;
            } else {
                echo false;
            }
            break;
        case "3":
            if ($flagInput == $flag3) {
                $_SESSION['currentLevel'] = 4;
                echo $flag3;
            } else {
                echo false;
            }
            break;
        case "4":
            if ($flagInput == $flag4) {
                $_SESSION['currentLevel'] = 5;
                echo $flag4;
            } else {
                echo false;
            }
            break;
        case "5":
            if ($flagInput == $flag5) {
                $_SESSION['currentLevel'] = 6;
                echo $flag5;
            } else {
                echo false;
            }
            break;
        case "6":
            if ($flagInput == $flag6) {
                $_SESSION['currentLevel'] = 7;
                echo $flag6;
            } else {
                echo false;
            }
            break;

        default:
            echo false;
            break;
    }
    
}
echo false;