<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>
<html>

   <head>
      <title>Search Management System</title>
   </head>
	
   <body>

      <table border = "1" width = "500" height = "350" align="center" >
<tr>
    <td>
            <form method="post" action="abc.html" enctype="">
            <fieldset>
                <legend>Search</legend>
                <form id="form"> 

                <h1>Search here....<h1>
                    <br>
                <input type="search" id="query" name="q" placeholder="Search Specification Management"><button>Search</button>

                <hr>
                <input type="search" id="query" name="q" placeholder="Search feature Management"><button>Search</button>
                <hr>
                <input type="search" id="query" name="q" placeholder="Search app Management"><button>Search</button>
</tr>
</td>
</form>



            
      </table>
   </body>
	
</html>