<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гра "Орел чи Решка"</title>
    <link rel="stylesheet" href="css/style-rel.css">
</head>
<body>
<?php
    

         
        if(isset($_POST['disabled'])){
            $disabled = $_POST['disabled'];
        }else{
            $disabled = 0;
        }
        
        ?>
        
    <div class="wrapper">
    
            <h2>Зробіть вибір</h2>
            <form method="POST" action="game.php">
                <p>
                    <label>
                        <input type="radio" name="level" value="easy" checked> Easy
                    </label>
                    <label>
                        <input type="radio" name="level" value="medium" <?php if($disabled == 0){echo("disabled");} ?>> medium
                    </label>
                    <label>
                        <input type="radio" name="level" value="hard" <?php if($disabled == 0 || $disabled == 1){echo("disabled");}?>> hard
                    </label>
                </p>
                

                <input type="hidden" name="win" value="0">
                <input type="hidden" name="lose" value="0">
                <input type="hidden" name="numberGame" value="0">
                
                <input type="hidden" name="disabled" value="<?php echo($disabled); ?>">
                <input type="hidden" name="action" value="game.php">

                <input type="submit" value="game">
            
            </form>
    </div>
</body>
