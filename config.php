<?php
$server="localhost";
$username="root";
$password="";
$dbname="dbm";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['sno']) && !empty($_POST['id']) && !empty($_POST['nop']) && !empty($_POST['ct']) && !empty($_POST['doa']) && !empty($_POST['dod']) && !empty($_POST['place']) ){
        $sno=$_POST['sno'];
        $id=$_POST['id'];
        $nop=$_POST['nop'];
        $ct=$_POST['ct'];
        $doa=$_POST['doa'];
        $dod=$_POST['dod'];
        $place=$_POST['place'];
        $query="INSERT INTO prod(sno,id,nop,ct,doa,dod,place)values('$sno','$id','$nop','$ct','$doa','$dod','$place')";
        $run=mysqli_query($conn,$query) or (mysqli_error());
        if($run){
            echo "<br><br><br><br><br><center>Insertion Sucessfully Completed</center>";
        }
        else{
            echo "<br><br><br><br><br><center>Insertion Failed</center>";
        }
    }
    else{
        echo "All Fields are Required";
    }
}
?>
