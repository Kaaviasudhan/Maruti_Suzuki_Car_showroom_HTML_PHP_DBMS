<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function 
    $query = "SELECT * FROM `newcardetail` WHERE CONCAT(`regno`, `carname`, `description`, `Model`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `newcardetail`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "carshowroom_db");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>MS - New Car List</title> 
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
            body {
         background-image: url('brandimg.png');
         background-repeat: no-repeat;
         background-attachment: fixed; 
         background-size: 100% 100%;
            }	
        </style>
    </head>
    <body>
        <font face="time new roman"><center><h1>New Model Available Car List</h1></font>
        <font face="time new roman"><h2>Maruthi Suzuki CarShowRoom</h2>
        <h3>Available SELL/ BUY Maruti Suzuki ARENA / NEXA / TRUE VALUE / COMMERCIAL</h3>		
            <table>
                <tr>
                    <th>rno</th>
                    <th>Car Name</th>
                    <th>Description</th>
                    <th>Model Plan</th>

                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
				    <td><?php echo $row['rno'];?></td>
                    <td><?php echo $row['carname'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo $row['model'];?></td>

                </tr>
                <?php endwhile;?>
            </table>
            <br><br>
        <button onclick="window.print();">Print</button>
        <a href="Main Home.html"><button>Back to Home</button></a>
        </font>
        </center> 
    </body>
</html>
