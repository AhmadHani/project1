<?php
// Edit By Ahmad Hani Version 9
# Connect To the DataBase

$connect = mysqli_connect("localhost","root","root","blog");

# VAR

$txt_search = htmlspecialchars($_POST['text_search']);


# Search in the DataBase

$search_db = mysqli_query($connect,"SELECT * FROM users WHERE email LIKE '%$txt_search%'"); 

// % = search 0,9 and a,z11

# For Loop all the DataBase


while($fetch_search_db = mysqli_fetch_assoc($search_db)) {
	
echo 'email:'.$fetch_search_db['email'];	
}
?>
