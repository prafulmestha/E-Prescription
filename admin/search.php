<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `name`, `mobile`, `address`) LIKE '%".$valueToSearch."%'";
    $search_result = filtertable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filtertable($query);
}

// function to connect and execute the query
function filtertable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "e-pri");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="search.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Mobile</th>
                    <th>Address</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['address'];?></td>
                </tr>
                <!-- <?php endwhile;?> -->
            </table>
        </form>
        
    </body>
</html>