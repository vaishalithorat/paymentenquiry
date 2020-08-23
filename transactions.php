<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM `table222` where `payment_id` LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}

//else {
//    $query = "SELECT * FROM `trans_details`";
//    $search_result = filterTable($query);
//}


function filterTable($query)
{
    $connect = mysqli_connect("ebdb.cexprcw7x35j.us-east-1.rds.amazonaws.com", "admin", "password", "eddb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


<!DOCTYPE html>
<html>
    <head>
    <title> Purity Bank Ltd. </title>
        <style>
        body {
            background-color: lightblue ;
        }
        table,th,td {
            border: 2px solid brown;
            width: 1100px;
            background-color: lightskyblue;
        }
        .btn {
            width: 10%;
            height: 5%;
            font-size : 15px;
            padding: 0px;
        }
        </style>

        <center>
            <h1>Purity Bank Ltd. </h1>
            <h2>Transaction status</h2>
            <div class ="container">

        <form action="transactions.php" method="post">
            <input type="text" name="valueToSearch" class="btn" placeholder="Enter the payment id"><br><br>
            <input type="submit" name="search" class = "btn" value="Submit"><br><br>

            <table>
                <tr>

		    <th>Payment id</th>
		    <th>From Account</th>
		    <th>To Account</th>
                    <th>Amount</th>
                    <th>Currency</th>
                    <th>Transaction type</th>
                    <th>Account type</th>
                    <th>Payment status</th>
                    <th>Date</th>

                </tr>


      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['payment_id'];?></td>
		    <td><?php echo $row['from_account'];?></td>
		    <td><?php echo $row['to_account'];?></td>
                    <td><?php echo $row['amount'];?></td>
                    <td><?php echo $row['currency'];?></td>
                    <td><?php echo $row['transaction_type'];?></td>
                    <td><?php echo $row['account_type'];?></td>
                    <td><?php echo $row['payment_status'];?></td>
                    <td><?php echo $row['txn_date'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
                </div>
                </center>
        </form>
    <a href="action_page.php" style="position:bottom"; >Back Home</a>
    </body>
</html>


