<?php

if (isset($_POST['submit'])){
	
	
$orderid = $_POST['orderid']; 
$status = $_POST['status'];
$name = $_POST['name'];
$description = $_POST['description'];
$shop = $_POST['shop'];
$driver = $_POST['driver'];
$status = $_POST['status'];

$stmt = $conn->prepare("SELECT * FROM `orders` where status ='Ready For Collection' ");

$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // output data of each row
while($row = $result->fetch_assoc()) {


$date = strtotime($row['pickup_date']);
$rr  =  date('Y-m-d', $date);

$dcountry = $row['dcountry'];
$dregion = $row['dregion'];
$droptown = $row['droptown'];
$drop_off_address = $row['drop_off_address'];
$contactpick = $row['contactpick'];
$contactphone_pick = $row['contactphone_pick'];
$delivery_notes = $row['delivery_notes'];
$insurance = $row['insurance'];
$rewards = $row['rewards'];

$address = $dcountry.", ".$dregion.", ".$droptown.", ".$drop_off_address;
$size = "";
$documents = "";
$cost = "";
$lockerdate = date('Y-m-d');
$alternate_contact = "";
$stmt = $conn->prepare("INSERT INTO `locker` (
 `parcelid`,
  `parcel_desc`,
  `locker_date`,
  `delivery_address`,
  `size`,
  `status`,
  `notes`,
  `contact_person`,
  `contact_number`,
  `documents`,
  `insurance`,
  `promotion`,
  `cost`,
  `alternate_contact`
)

VALUES
  (
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?
    

  );");
$stmt->bind_param("ssssssssssssss", 
$orderid,
$description,
$lockerdate,
$address,
$size,
$status,
$delivery_notes,
$contactpick,
$contactphone_pick,
$documents,
$insurance,
$rewards,
$cost,
$alternate_contact
);
//$stmt->execute();

//echo "New records created successfully";
if ($stmt->execute()) { 
   echo '<script>
alert("Done Successfully");
window.location.href="dnew.php";
</script>';
} else {
   echo '<script>
alert("There was an error, Please try again");
window.location.href="dnew.php";
</script>';
}
$stmt->close();
//$conn->close();
}else{
//	echo "Submit not initialiazed";
}


}
}else{

}




?>