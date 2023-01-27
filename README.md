# my-all-php-program
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>


<body>
        <form method="post">


                <input type="checkbox" name="f1" id="" value="20">panipuri 20rs <br>
                <input type="checkbox" name="f2" id="" value="30">bhelpuri 30rs <br>
                <input type="checkbox" name="f3" id="" value="35">dahipuri 35rs <br>
                <input type="checkbox" name="f4" id="" value="25">sevpuri 25rs <br>
                <input type="checkbox" name="f5" id="" value="20">ragdapuri 20rs <br>


                <button name="click" type="submit">submit</button>

        </form>

        <?php
        if (isset($_POST['click'])) {

                $s = 0;
                if (isset($_POST['f1'])) {
                        $s += 20;
                } 
                if (isset($_POST['f2'])) {
                        $s += 30;
                } 
                if (isset($_POST['f3'])) {
                        $s += 35;
                } 
                if (isset($_POST['f4'])) {
                        $s += 25;
                } 
                if (isset($_POST['f5'])) {
                        $s += 20;
                } 

                echo $s;
        }

        ?>

</body>

</html>
