<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <title>ADD CONTACT</title>
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
            <h2 class="text-uppercase">Add contact information</h2>  
            <form action="contactSave.php" method="post">
                <table>
                    <div >
                        <tr>           
                            <td>First Name : *</td>                
                            <td><input type="text" name="fname" required></td>    
                        </tr>       
                        <tr>             
                            <td>Last Name : *</td>              
                            <td><input type="text" name="lname" required></td>  
                        </tr>          
                        <tr>              
                            <td>E-mail : *</td>                  
                            <td><input type="text" name="email" required></td>     
                        </tr>        
                        <tr>                
                            <td>Home Phone : *</td>
                            <td><input type="text" name="homePhone" required></td>              
                        </tr>    
                        <tr>                
                            <td>Cell Phone : </td>                  
                            <td><input type="text" name="cellPhone"></td>              
                        </tr> 
                        <tr>                
                            <td>Office Phone :</td>                  
                            <td><input type="text" name="officePhone"></td>              
                        </tr> 
                        <tr>                
                            <td>Address : *</td>                  
                            <td><input type="text" name="address" style="width: 200px; height:75px" required></td>              
                        </tr> 
                        <tr>                
                            <td>Comment :</td>                  
                            <td><input type="text" name="comment" style="width: 200px; height:75px"></td>              
                        </tr> 
                        <tr>                
                            <td><button type="reset" style="width: 155px">Reset</button></td>                  
                            <td><button type="submit" style="width: 155px">Submit</button></td>              
                        </tr> 
                    </div>
                </table>   
            </form> 
        </div> 
    </body>
</html>