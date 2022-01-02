<html>
    <head></head>
    <body>
    
        <style>
            *{
                background-color:lightyellow;
            }
        
    input[type="text"]{
    width: 25%;
    padding: 12px;
    border:1px solid #ccc;
    border-radius: 5px;
    margin: 10px;
            }
            input[type="submit"]{
    background-color:#4daea1;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  
}
input[type="submit"]:hover{
    background-color: #4caf84;
}

        </style>
        <?php
        include "config.php";
        ?>
        <form action ="result.php">
            <center><br><br><br><br><br><br>
        <label>Product ID:</label> <input type="text" name="search" placeholder="123">
            <input type ="submit" value="submit">
</center>
</form>
<?php
$conn->close();
?>
</body>
</html>
