<html>
    <head>
        <title>View Information</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="CheckOut.php" enctype="">
           
                <label for="search">Search User: </label>
                <input type="text" name="search" id="search" value=""/> 
                <br/> <br/>
                <table align="center" border="1" width="1500px">
                    <tr>
                        <th width="100px">Product No:</th>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Profit</th>
                        
                    </tr>
                    
                
                    <?php 
                        
                        foreach($userData as $user): 

                    ?>
                    <tr align="center">
                        <td><?php echo $count ?></td>
                        <td><?php echo $user[0]; ?></td>
                        <td><?php echo $user[1]; ?></td>
                        <td><?php echo $user[2]; ?></td>
                    </tr>
                    <?php 
                        $count++;
                    endforeach; 
                    ?>
                    </tr>
                </table>
        </form>
    </body>
</html>