                       <?php
                       
                        
session_start();
include('connect.php');
 $user=$_SESSION['SESS_MEMBER_ID'];

$a = $_POST['email'];
$b = $_POST['name'];
$c = $_POST['address'];
// query

$sql = "UPDATE user SET 
        `email`=?,`name`=?,`address`=?
        WHERE id='$user'";


$q = $db->prepare($sql);
$q->execute(array($a,$b,$c));{
if($q){
      header("location:user.php?success=true");
        }else{
            header("location:user.php?failed=true");
        } 
		}


?>