<?php
session_start();
include '../html/config.php';



if (isset($_SESSION['log'])) {
    $email = $_POST['email'];
    $state = $_POST['state'];
    $me = $_SESSION['who'];

    if ($state == 'block') {

        $q = "SELECT * FROM `teams_block` WHERE `team_email`='$me'";
        
        $r = mysqli_fetch_array(mysqli_query($c, $q));
        
        $list = (array) json_decode($r['list']);
        
        $exist = false;
        
        for ($i=0; $i < sizeof($list) ; $i++) { 
            if ($list[$i] == $email) {
                
                $exist = true;
                break;
                
            }
        }
        
        if ($exist == false) {
            array_push($list, $email);
            
            $list = (String)json_encode($list);
            $q = "UPDATE `teams_block` SET `list`='$list' WHERE `team_email`='$me'";
            
            mysqli_query($c, $q);

        }
        
        echo $q ;
    
    } else {

        
        $q = "SELECT * FROM `teams_block` WHERE `team_email`='$me'";
        
        $r = mysqli_fetch_array(mysqli_query($c, $q));
        
        $list = (array) json_decode($r['list']);

        for ($i=0; $i < sizeof($list) ; $i++) { 
            if ($list[$i] == $email) {
                
                array_splice($list, $i, 1);
                break;
                
            }
        }
    
        $list = json_encode($list);

        $q = "UPDATE `teams_block` SET `list`='$list' WHERE `team_email`='$me'";
        
        mysqli_query($c, $q);
        

    }
    
    
    
}