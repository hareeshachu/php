<html>
<head>
<title>insert</title>
</head>
<body>
        <style>
                *{
    box-sizing: border-box;
}
body{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin:15px 30px;
    font-size: 17px;
    padding: 8px;
}
.container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrays;
    border-radius: 4px;
}
input[type="text"],
input[type="date"]{
    width: 100%;
    padding: 12px;
    border:1px solid #ccc;
    border-radius: 5px;
    margin: 10px;
}
.main_heading{
    text-align: center;
    color: blue;
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
        <div class="container">

    
        <form action="config.php" method="POST">
        <h1 class="main_heading">Data Entry Page</h1>
        <hr>
        <p>Required Fileds are followed by *</p>
            <h2>Product Details</h2>
           <label>Serial Number:</label> *<input type="text" name="sno"  required placeholder="123"><br>
           <label>Product ID:</label> *<input type="text" name="id"  required placeholder="123"><br>
           <label> Name of Product:</label> *<input type="text"name="nop"  required placeholder="screw"><br>
           <label>Count:</label> *<input type="text" name="ct" required placeholder="123"><br>
           <label>Date of Arrival:</label> *<input type="date" name="doa"><br>
           <label>Date of Departure:</label> *<input type="date" name="dod" ><br>
           <label>Place of Delivery:</label>*  <input type="text"name="place"  required placeholder="Guruvayur"><br>
           <input type="submit"  name="submit" value="submit">
        </form>

    
</body>
</html>
