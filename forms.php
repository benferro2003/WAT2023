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
                <input type="text" name = "Email" value ="<?php
                    if(isset($_POST['txtEmail'])){
                        echo $_POST['txtEmail'];                                          
                    }                    
                ?>" /><br />
                <textarea rows="4" cols="50" name="comments"></textarea> <br />
                <label for ="confirm"> Click to confirm: </label>
                <input type = "checkbox" name = "checked" value = "agree" /><br />
                <input type = "submit" value = "Submit" name = "submission"/> 
                <input type = "reset" value = "clear" />
            </fieldset>
        </form>
        <?php
            if(isset($_POST['submission']))
            {            


                if(!empty($_POST['Email']))
                {
                    $email2 = $_POST["Email"];
                    $comment = $_POST["comments"];
                    $email2 = filter_var($email2, FILTER_SANITIZE_EMAIL)  ;
                    if (!filter_var($email2, FILTER_VALIDATE_EMAIL) === false){                                  
                        echo "Email: " . $email2 . "<br />";
                        echo "Comments: " . $comment . "<br />";
                    }else {echo "not a valid email address";}
                    if (isset($_POST["checked"])) {
                        $confirm = 'Agreed <br />';
                        echo "Confirm: " . $confirm;
        
                    }else{
                        $confirm = 'Not Agreed';
                        echo "Confirm: " . $confirm;
                    }
                    
                }else{ echo "email must not be empty";};
            }else{};
        ?>

        <h1> Tax Calculator</h1>
        <form method = "post" action="forms.php">
            <fieldset>
                <legend>
                    without TAX calcuator
                </legend>
                <label for="After_Tax">After Tax Price: </label>
                <input type="text" name = "After" />
                <label for="Tax_Rate">Tax Rate: </label>
                <input type = "text" name = "Rate" />
                <input type = "submit" value = "submit" name = "loginSubmit" />
                <input type = "reset" value = "clear" />
            </fieldset>
        </form>


        <?php
           
        if(!empty($_POST['After']) && !empty($_POST['Rate'])) 
        {
            $afterTax = $_POST["After"];
            $taxRate = $_POST["Rate"];
            if (!filter_var($afterTax, FILTER_VALIDATE_FLOAT) === false && !filter_var($taxRate, FILTER_VALIDATE_INT) === false){                                  
                $beforeTax = (100*$afterTax) / (100 + $taxRate);
                echo "Price before tax = £" . $beforeTax;}
            }else if (filter_var($afterTax, FILTER_VALIDATE_FLOAT) === false){
                echo "please enter the price in the format 9.99";
            }else if (filter_var($taxRate, FILTER_VALIDATE_INT) === false) {
                echo "please enter a whole number for tax rate";
            }
        ?>












    </body>
</html>
