<?php

    session_start();
    require_once("../models/sql_project_all.php");


   
        $Name = $_REQUEST['name'];
        $BuyingPrice = $_REQUEST['Bprice'];
        $SellingPrice = $_REQUEST['Sprice'];

       
         
            $project = ['name' => $Name];
            $found = find_sql($Name);
            if($found)
            {
                $row = mysqli_fetch_assoc($found);
                $ProductID = $row['Product_id'];
                $ProductID = generateCode();
                $all = [ ' ' ,'name'=> $Name, 'Bprice' => $BuyingPrice, 'Sprice' => $SellingPrice];
                $status = insert_sql($all);

                if($status)
                {
                    header('location: ../views/Add.php?msg=featureSuccess');
                }
                else
                {
                    header('location: ../views/Add.php?msg=featureFailed');
                }
            }
        

   

?>