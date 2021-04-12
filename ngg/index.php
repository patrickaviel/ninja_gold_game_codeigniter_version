<!-- PATRICK AVIEL PERALTA -->
<?php
    session_start();
    
    if(!isset($_SESSION['gold'])){
        $_SESSION['gold']=0;
    }
    if(!isset($_SESSION['activities'])){
        $_SESSION['activities']=array();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Gold Game</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lekton&display=swap');
        *{
            margin: 0;
            border: 0;
            font-family: 'Lekton', sans-serif;
        }
        body{
            background-color: black;
        }
        .main-container{
            color: white;
            width: 90%;
            margin: auto;
            text-align: center;
            line-height: 50px;
        }
        .main-container h2{
            text-align: left;
        }
        .activities{
            color:black;
            text-align: left;
            border:1px solid #FFD700;
            background-color: white;
            height:120px;
            width:100%;
            margin:auto;
            overflow:scroll;
            line-height:20px;
        }
        form{
            display: inline-block;
            width: 20%;
            padding: 20px;
            border: 1px solid white;
        }
        .interface h2{
            text-align: left;
        }
        input[type="submit"]{
            border: 1px solid #FFD700;
            background-color: black;
            color: #FFD700;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <h1>Ninja Gold Game</h1>
        <div class="interface">
            <h2>Your Gold:
<?php           if(isset($_SESSION['gold'])){?>              
                <?=$_SESSION['gold']?>
<?php           }?>
            </h2>


            <form action="process.php" method="post">
                <input type="hidden" name="action" value="farm">
                <h3>Farm</h3>
                <h4>(earns 10-20 golds)</h4>
                <input type="submit" value="Find Gold!">
            </form>

            <form action="process.php" method="post">
                <input type="hidden" name="action" value="cave">
                <h3>Cave</h3>
                <h4>(earns 5-10 golds)</h4>
                <input type="submit" value="Find Gold!">
            </form>

            <form action="process.php" method="post">
                <input type="hidden" name="action" value="house">
                <h3>House</h3>
                <h4>(earns 2-5 golds)</h4>
                <input type="submit" value="Find Gold!">
            </form>

            <form action="process.php" method="post">
                <input type="hidden" name="action" value="casino">
                <h3>Casino</h3>
                <h4>(earns/takes 0-50 golds)</h4>
                <input type="submit" value="Find Gold!">
                
            </form>

        </div>
        <h2>Activities:</h2>
        <div class="activities">
<?php
        if(isset($_SESSION['activities'])){
           for($i=0;$i<count($_SESSION['activities']);$i++){
               echo "<p>{$_SESSION['activities'][$i]}</p>";
           }
        }
?>
        </div>
    </div>
</body>
</html>