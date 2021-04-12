<!-- PATRICK AVIEL PERALTA -->
<?php
    session_start();
   $random=0;
    // $_SESSION['activities']=$activities;
    
    if(isset($_POST['action']) && $_POST['action'] == "farm"){  
        //do registration process
        $gold=rand(10,20);
        $date=date("F j, Y, h:i:sa");
        $act="You entered a farm and earned $gold. ($date)";
        array_push($_SESSION['activities'],$act);
        $_SESSION['gold']=$_SESSION['gold']+$gold;
        
    }else if(isset($_POST['action']) && $_POST['action'] == "cave"){  
        //do registration process
        $gold=rand(5,10);
        $date=date("F j, Y, h:i:sa");
        $act="You entered a cave and earned $gold. ($date)";
        array_push($_SESSION['activities'],$act);
        $_SESSION['gold']=$_SESSION['gold']+$gold;
    }else if(isset($_POST['action']) && $_POST['action'] == "house"){  
        //do registration process
        $gold=rand(2,5);
        $date=date("F j, Y, h:i:sa");
        $act="You entered a house and earned $gold. ($date)";
        array_push($_SESSION['activities'],$act);
        $_SESSION['gold']=$_SESSION['gold']+$gold;
    }else if(isset($_POST['action']) && $_POST['action'] == "casino"){  
        //do registration process
        
        $gold=rand(0,50);
        $random=rand(1,50);
        if($random<=25){
            $date=date("F j, Y, h:i:sa");
            $act="You entered a casino and earned $gold. ($date) ";
            array_push($_SESSION['activities'],$act);
            $_SESSION['gold']=$_SESSION['gold']+$gold;
        }else if($random>25){
            $date=date("F j, Y, h:i:sa");
            $act="You entered a casino and lost $gold.. Ouch.. ($date)";
            array_push($_SESSION['activities'],$act);
            $_SESSION['gold']=$_SESSION['gold']-$gold;
        }
        
    }
    header('Location:index.php');
?>