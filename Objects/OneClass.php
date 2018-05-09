<?php
$servername="localhost";
$username="root";
$password="";
//Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "CONNECTED TO YOUR DATABASE";
echo "</br>";

//Create Database
$sql = "CREATE DATABASE OOP";
if (mysqli_query($conn, $sql)){
  echo " YOU HAVE SUCCESSFULLY CREATED YOUR DATABASE";
}else{
echo " THERE HAS BEEN AN ERROR WHILE CREATING YOUR DATABASE: " . $conn->error;
echo "</br>";
}
echo "</br>";

//Creating table Ucer
$user="CREATE TABLE OOP.User(
  user_id INT(8) AUTO_INCREMENT PRIMARY KEY,
  Name TEXT NOT NULL,
  Phone_Number VARCHAR(30) NOT NULL,
  Country_ID INT NOT NULL
)";

if(mysqli_query($conn, $user)){
  echo "USER TABLE HAS BEEN SUCCESSFULLY CREATED";
}else{
  echo "THERE HAS BEEN AN ERROR WHILE CREATING YOUR USER TABLE: " . $conn->error;
  echo "</br>";
}
echo "</br>";

//Create table Role
$role="CREATE TABLE OOP.Role(
  role_id INT(8) AUTO_INCREMENT PRIMARY KEY,
  Name TEXT NOT NULL
)";

if(mysqli_query($conn, $role)){
  echo "ROLE TABLE HAS BEEN SUCCESSFULLY CREATED";
}else{
  echo "THERE HAS BEEN AN ERROR WHILE CREATING YOUR ROLE TABLE: " . $conn->error;
  echo "</br>";
}
echo "</br>";

//Create table Permission
$permission="CREATE TABLE OOP.Permission(
  permission_id INT(8) AUTO_INCREMENT PRIMARY KEY,
  Name TEXT NOT NULL
)";

if(mysqli_query($conn, $permission)){
  echo "PERMISSION TABLE HAS BEEN SUCCESSFULLY CREATED";
}else{
  echo "THERE HAS BEEN AN ERROR WHILE CREATING YOUR PERMISSION TABLE: " . $conn->error;
  echo "</br>";
}
echo "</br>";


//Create table Role_Permission
$role_permission="CREATE TABLE OOP.Role_Permission(
  role_permission_id INT(8) AUTO_INCREMENT PRIMARY KEY

)";

if(mysqli_query($conn, $role_permission)){
  echo "ROLE_PERMISSION TABLE HAS BEEN SUCCESSFULLY CREATED";
}else{
  echo "THERE HAS BEEN AN ERROR WHILE CREATING YOUR ROLE_PERMISSION TABLE: " . $conn->error;
echo "</br>";
}
echo "</br>";

//add foreign keys to role permission
$role_permissionF="ALTER TABLE OOP.Role_Permission(
   ADD CONSTRAINT FK_Role_PermissionRole
   FOREIGN KEY (role_id) REFERENCES Role(role_id),
  ADD CONSTRAINT FK_Role_PermissionPermission
   FOREIGN KEY (permission_id) REFERENCES Permission(permission_id),
  ADD CONSTRAINT FK_Role_PermissionUser
  FOREIGN KEY (user_id) REFERENCES User(user_id)
)";

if(mysqli_query($conn, $role_permissionF)){
  echo "ROLE_PERMISSION TABLE HAS BEEN SUCCESSFULLY ALTERED";
}else{
  echo "THERE HAS BEEN AN ERROR WHILE ALTERING YOUR ROLE_PERMISSION TABLE: " . $conn->error;
echo "</br>";
}
echo "</br>";

$conn->close();

?>
