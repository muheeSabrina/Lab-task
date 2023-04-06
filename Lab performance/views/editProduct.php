<?php

  
        require_once("../models/sql_project_all.php");
        require_once("../models/sql_feature_all.php");
        require_once("../models/sql_spec_all.php");


?>

<html>
    <head>
        <title>Edit</title>
    </head>

    <body>
        <form align="center" menthod="POST" action="../controllers/update_specification_check.php" enctype="">
        <h1 align="center">Update</h1>
            <fieldset>
            <?php 
            $ProductId = $_REQUEST['Product_id'];
            echo "Spec ID: ".$specId; 
            setcookie('spec_id', $specId, time() + 300, '/');
            ?>
                <legend>Specifications Panel</legend>
                <table align="center">
                 
                     <tr>   
                        <th>
                            <input type="text" name="Pname" id="pname" value="">
                        </th>
                    </tr>
                    <tr>   
                        <th>
                            <input type="number" name="Bprice" id="Bprice" value="">
                        </th>
                    </tr>
                    <tr>   
                        <th>
                            <input type="number" name="Sprice" id="Sprice" value="">
                        </th>
                    </tr>

                    
                </table>

                <br/>
                <input type="submit" name="submit" value="Updated"/>
               
            </fieldset>
        </form>
    </body>
</html>