<html>
    <head></head>
    <body>
        <style>
            *{
    box-sizing: border-box;
    list-style: none;
}
body{
    margin: 0px;
}
header{
    padding: 50px;
    text-align: center;
    background-color: rgb(17 143 158);
    color: #edf1f2;

}
header h1{
    font-size: 40px;
}
nav{
    background-color: #333;
    overflow: hidden;
}
nav a{
    display: block;
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    float: left;
   
}
table,
tr,
th,
td{
    border: 2px solid black;
    border-collapse: collapse;
    padding: 10px;
    border-spacing: 5px;
    text-align:center;

}
th{
    background-color: #04AA6D;
    color:white;
}

        </style>
        <center>
            <header>
        <h1>Product Details</h1>
        </header>
         <nav>
        <a href="index.php">Home</a>
      
    </nav>
    <br><br><br><br>

        <?php
        include "config.php";
        $find=$_GET["search"];
        $sql="SELECT * FROM prod WHERE id=$find";
        $output=$conn->query($sql);
        if($output->num_rows>0)
        {
            echo "<table border=1 cellspacing=1 cellpadding=1><tr><th>Serial No</th><th>Product ID</th><th>Name of Product</th>
            <th>Count</th><th>Date of Arrival</th> <th>Date of Departure</th><th>place of Delivery</th></tr>";
            while($row=$output->fetch_assoc())

            {
                echo "<tr><td><font color=red>".$row["sno"]."</font></td>
                <td><font color=red>".$row["id"]."</font></td>
                <td><font color=red>".$row["nop"]."</font></td>
                <td><font color=red>".$row["ct"]."</font></td>
                <td><font color=red>".$row["doa"]."</font></td>
                <td><font color=red>".$row["dod"]."</font></td>
                <td><font color=red>".$row["place"]."</font></td>
                </tr>
                ";
            }
           
            echo"</table>";
        }
        else
        {
            echo "not found";
        }
        ?>
        </center>
    </body>
</html>
   
