<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <title>CONTACT DETAILS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="bgcolor">     
        <div class="left text-uppercase">         
            <h2>Address Book</h2>         
            <ul>             
                <li><a href="addPage.php">Add</a> </li>
                <li><a href="deletePage.php">Delete</a></li> 
                <li><a href="searchPage.php">Search</a></li>  
                <li><a href="listAllPage.php">List All</a></li>        
            </ul>   
        </div>    
        <div class="right">  
            <h2 class="text-uppercase">Details Page</h2> 
            <?php
            $lname = $_GET['name']; //Kişinin adını get etmek için
            $dbname = "address_book";
            $conn = mysqli_connect("localhost", "root", "", $dbname);

            if ($conn->connect_errno) {
                echo "Failed to connect to MySQL: " . $conn->connect_error;
                exit();
            }
            $sql = "SELECT * from contacts where lname='$lname'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) { //mysqli_num_rows = Returns the number of rows in the result set

                echo "<br><table>";
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>      
                    <tr>    
                        <td>First Name: 
                        </td>   
                        <td>
                            <?php echo $row['fname']; ?>
                        </td>          
                    </tr>      
                    <tr>      
                        <td>Last Name: </td>  
                        <td>
                            <?php echo $row['lname']; ?>
                        </td>      
                    </tr>     
                    <tr>            
                        <td>Email: </td>   
                        <td>
                            <?php echo $row['email']; ?>
                        </td>     
                    </tr>     
                    <tr>       
                        <td>Home Phone: </td>
                        <td>
                            <?php echo $row['homePhone']; ?>
                        </td>   
                    </tr>    
                    <tr>       
                        <td>Cell Phone: </td>
                        <td>
                            <?php echo $row['cellPhone']; ?>
                        </td>   
                    </tr> 
                    <tr>       
                        <td>Office Phone: </td>
                        <td>
                            <?php echo $row['officePhone']; ?>
                        </td>   
                    </tr> 
                    <tr>       
                        <td>Address: </td>
                        <td>
                            <?php echo $row['address']; ?>
                        </td>   
                    </tr> 
                    <tr>       
                        <td>Comment: </td>
                        <td>
                            <?php echo $row['comment']; ?>

                        </td>        
                    </tr> 
                    <?php
                }
            } else {
                echo "No result";
            }
            ?>
        </table>    
    </div> </body> </html>