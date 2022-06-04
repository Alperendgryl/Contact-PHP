<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <title>LIST ALL CONTACTS</title>
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
            <h1 style="margin-top: 10px">Contact List</h1>      
            <?php
            $dbname = "address_book";
            $conn = mysqli_connect("localhost", "root", "", $dbname);

            if ($conn->connect_errno) {
                echo "Failed to connect to MySQL: " . $conn->connect_error;
                exit();
            }
            $sql = "SELECT * FROM contacts ORDER BY fname ASC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) { //En az 1 tane sonuç varsa tablo oluştur ve göster. if($result > 0)'da çalışıyor fakat mysqli_num_rows daha doğru bir yöntem.
                echo "<br>"
                . "<table border='1' cellspacing='5' cellpadding='10'>"
                . "<tr>"
                . "<th>First name</th>"
                . "<th>Last name</th>"
                . "<th>Email</th>"
                . "<th>Details</th>"
                . "</tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>       
                    <tr> 
                        <td>
                            <?php echo $row['fname']; ?>
                        </td>      
                        <td>
                            <?php echo $row['lname']; ?>
                        </td>   
                        <td>
                            <?php echo $row['email']; ?>
                        </td>  
                        <td>
                            <a href="contactDetails.php?name=<?php echo $row['lname']; ?>">view details</a> 
                            <!--php?name= Kişiye özel details page'ine gidiyor. OnClick = DetailsPage.php?name=FirstName-->
                        </td>   
                    </tr>       
                    <?php 
                }
            }
            ?>     
            <!--Son <?ph?> koymulmadığı zaman hata veriyor.-->
        </table> 
    </div> 
</body> 
</html>