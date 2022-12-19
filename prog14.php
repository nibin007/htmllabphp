<?php 
$students = array("nibin", "nikhil", "mrudhul", "Akshay", "Akash", "Arjun", "Aswin","dheeraj"); 
echo "<b> Array : </b><br>"; 
print_r($students); 
echo "<br><br> <b>Ascending Sort : </b><br>"; 
asort($students); 
print_r($students); 
echo "<br><br> <b>Descending Sort : </b><br>"; 
arsort($students); 
print_r($students); 
?>
