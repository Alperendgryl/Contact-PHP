<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>DELETE CONTACT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="bgcolor">     
        <div class="left text-uppercase">         
            <h2>Address Book</h2>         
            <ul>             
                <li><a href="addPage.php">Add</a></li>
                <li><a href="deletePage.php">Delete</a></li> 
                <li><a href="searchPage.php">Search</a></li>  
                <li><a href="listAllPage.php">List All</a></li>        
            </ul>  
        </div>    
        <div class="right">      
            <h2 class="text-uppercase">Delete Contact Information</h2>   
            <?php
            $dbname = "address_book";
            $conn = mysqli_connect("localhost", "root", "", $dbname);

            if ($conn->connect_errno) {
                echo "Failed to connect to MySQL: " . $conn->connect_error;
                exit();
            }

            $sql = "SELECT * FROM contacts ORDER BY fname ASC";
            $result = mysqli_query($conn, $sql); //mysqli_query = Performs a query on the database

            if (mysqli_num_rows($result) > 0) {
                echo "<br><table><form action='contactDelete.php' method='post'>";
                while ($row = mysqli_fetch_assoc($result)) { // mysqli_fetch_assoc = fetches a result row as an associative array.
                    ?>   
                    <tr>       
                        <td>
                            <input type="checkbox" value="<?php echo $row['fname']; ?>" name="fname">
                            <?php echo $row['fname']; ?> 
                            <?php echo $row['lname']; ?>
                            <br><br>
                        </td>      
                    </tr>       
                    <?php
                }
            }
            ?>   
            <td>
                <button style="width: 155px; margin-top: 20px">Delete</button>
            </td> 
        </form> 
    </table>    
</div>
</body>
</html>