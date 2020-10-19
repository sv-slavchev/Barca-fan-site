<?php
session_start();
require_once("db_connection.php");
require_once('C:/xampp/htdocs/BarcaTrain/smarty/config.php');


mysqli_query($conn,"SET NAMES 'utf8'");

$smarty->display('add_review.html');

if(isset($_POST['btnAddReview'])){

$name = $_POST['yourname'];
$review = $_POST['review'];

//$sql = "SELECT id, code, reviews.code FROM tblproduct, reviews where tblproduct.id = reviews.id and  code = '$code'";

$sql = "INSERT INTO reviews ( code, name, review)
VALUES ('".$_SESSION['code']."', '$name', '$review' )";
// = '" . ($_SESSION['id']) ."'"; 

if ($result = mysqli_query($conn, $sql)) {

    echo '<script>alert("Вашият коментар е успешно добавен!")</script>';
	echo '<script>window.location="cart.php"</script>';

	}
 else {
    echo '<script>alert("Нещо се обърка. Моля, опитайте отново!")</script>';
	//echo '<script>window.location="cart.php"</script>';
  
	}
}
//}
//}
mysqli_close($conn);

?>