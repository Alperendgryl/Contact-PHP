<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>SEARCH CONTACT</title>
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
            <h2 class="text-uppercase">Search with name</h2>   
            <form method="post">        
                <h3>Enter A Name</h3>
                <input type="text" name="fname" style="width: 250px; height: 25px" required><br><br>         
                <button name="search" style="width: 250px">Find</button>         
            </form>      
            <?php
            if (isset($_POST['search'])) { //isset — Değişken bildirilmiş ve null değil mi diye bakar
                $fname = $_POST['fname'];
                $dbname = "address_book";
                $conn = mysqli_connect("localhost", "root", "", $dbname);

                if ($conn->connect_errno) {
                    echo "Failed to connect to MySQL: " . $conn->connect_error;
                    exit();
                }
                $sql = "SELECT * from contacts where fname='$fname'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) { //En az 1 tane sonuç varsa tablo oluştur ve göster. if($result > 0)'da bazen çalışıyor fakat mysqli_num_rows daha doğru bir yöntem.
                    echo "<br><table border='1' width='50' cellspacing='4' cellpadding='15'>"
                    . "<tr>"
                    . "<th>First Name</th>"
                    . "<th>Last Name</th>"
                    . "<th>Email</th>"
                    . "<th>homePhone</th>"
                    . "<th>cellPhone</th>"
                    . "<th>officePhone</th>"
                    . "<th>address</th>"
                    . "<th>comment</th>"
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
                                <?php echo $row['homePhone']; ?>
                            </td> 
                            <td>
                                <?php echo $row['cellPhone']; ?>
                            </td> 
                            <td>
                                <?php echo $row['officePhone']; ?>
                            </td> 
                            <td>
                                <?php echo $row['address']; ?>
                            </td> 
                            <td>
                                <?php echo $row['comment']; ?>
                            </td> 
                        </tr>  
                        <?php
                    }
                } else {
                    echo " <br> There Is No Person With That Name !";
                }
            }
            ?>  
        </table>  
    </div>
</body>
</html>