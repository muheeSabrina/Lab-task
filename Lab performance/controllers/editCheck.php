<?php

    session_start();
    require_once("../models/sql_project_all.php");
    require_once("../models/validations.php");
    require_once("../models/sql_spec_all.php");

   
        $Name = $_REQUEST['name'];
        $ProductId = $_COOKIE['Product_id'];
        $Buyingprice = $_REQUEST['Bprice'];
        $Sellingprice = $_REQUEST['Sprice'];

      
            $Product = ['name' => $Name];
            $found = find_feature_sql($Product);

            if($found)
            {
                $row = mysqli_fetch_assoc($found);
                $ProductID = $row['Product_id'];
                $Product = ['name'=> $Name, 'Bprice' => $, 'Sprice'=> $Sellingprice];
                $status = update_spec_sql($Product);

                if($status)
                {
                    header('location: ../views/spec_list.php?msg=specSuccess');
                }
                else
                {
                    header('location: ../views/spec_list.php?msg=spectFailed');
                }
            }
        
    
   

?>