<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>

    <head><title>PHP Forms</title></head>
    <body>
        <h1> Processing Form using GET</h1>
        <form method = "post" action="forms.php">
            <fieldset>
                <legend>
                    Login
                </legend>
                <label for="email">Email: </label>
                <input type="text" name = "txtEmail" /><br />
                <label for="passwd">Password: </label>
                <input type = "password" name = "txtpass" /><br />
                <input type = "submit" value = "submit" name = "loginSubmit" />
                <input type = "reset" value = "clear" />
            </fieldset>
        </form>

        <?php
    

        if(isset($_POST['loginSubmit']))
        {

        
            //$email = $_GET['txtEmail'];
            //$password = $_GET['txtpass'];
            echo "Email: " . $_POST["txtEmail"] . " Password: " . $_POST["txtpass"];
            
        }else{};
        

        ?>

        <form method = "POST" action="forms.php">
            <fieldset>
                <legend>
                    Comments
                </legend>
                <label for="email2">Email: </label>
                <input type="text" name = "Email" value ="" /><br />
                <textarea rows="4" cols="50" name="comments"></textarea> <br />
                <label for ="confirm"> Click to confirm: </label>
                <input type = "checkbox" name = "checked" value = "agree" /><br />
                <input type = "submit" value = "Submit" name = "submission"/> 
                <input type = "reset" value = "clear" />
            </fieldset>
        </form>
        <?php
            $email2 = $_POST["email2"];
            $confirm = $_POST["confirm"];
            if (isset($_POST["checked"])) {
                $confirm = 'Agreed <br />';
            }else{
                $confirm = 'Not Agreed';
            }

        

        ?>
    </body>
</html>
