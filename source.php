<?php 
include "conn.php"; 
 
$query = "select * from nikeproducts WHERE nike_id = ?"; 
$stmt = $con->prepare( $query );
 
// bind the id of the image you want to select
$stmt->bindParam(1, $_GET['nike_id']);
$stmt->execute();
 
// to verify if a record is found
$num = $stmt->rowCount();
 
if( $num ){
    // if found
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // specify header with content type,
    // you can do header("Content-type: image/jpg"); for jpg,
    // header("Content-type: image/gif"); for gif, etc.
    header("Content-type: image/png");
    
    //display the image data
    print $row['data'];
    exit;
}else{
    //if no image found with the given id,
    //load/query your default image here
}
?>