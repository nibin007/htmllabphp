<html>
<body>
<h1>Indian cricket Players</h1>
</body>
<form method="post" action="#"
 <td>Name of the cricketer: <input type="text" name="name"></td><br>
  <input value="addname" type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
extract($_POST);    
   $con = Mysqli_Connect("localhost","root","","nib");
    if(!$con){
        echo "Connection error !";
    }
   else{
   $sql = "INSERT INTO players (name) VALUES ('$name')";
  if($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}	

$con->close();
};
 }
 $con = Mysqli_Connect("localhost","root","","nib");
    if(!$con){
        echo "Connection error !";
    }
    else{
        $query = "select * from players";
        $values = mysqli_query($con,$query);
        echo '<table border="1" style="margin-left:auto;margin-right:auto;margin-top:3em;border-collapse:collapse;"><th>Player-Name</th>';
        if(mysqli_num_rows($values)){
                while($row=mysqli_fetch_assoc($values)){
                    echo '<tr>';
                        echo '<td>';
                            echo $row["name"];
                        echo '</td>';}}
          
        else{
                echo "error".$query.mysqli_error($con);
        }
    }
?>
</html>