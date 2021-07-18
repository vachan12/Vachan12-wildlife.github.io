<?php $name=mysqli_connect("localhost","root","root","wild");
if($name)
{
    echo "hello world!";
}
else{
        die(mysqli_connect_erorr());
}

$fullname=$_POST['fullname'];
$uname=$_POST['username'];
$pwd=$_POST['password'];
$pwdc=$_POST['confirmpassword'];
$mail =$_POST['email'];
$phone =$_POST['phone'];
$pan =$_POST['pannumber'];
$sname =$_POST['sanctuaryname'];
$amt =$_POST['amount'];
$animal =$_POST['animal'];
$sql1="insert into wild values('".$fullname."','".$uname."','".$pwd."','".$pwdc."','".$mail."',".$phone.",'".$pan."','".$sname."',".$amt.",'".$animal."')";
if(mysqli_query($name,$sql1))
{
    ?><script>
        alert("form updated");
        window.location.replace("adoptionform.html");
        
        </script><?php 
}
else{
    echo "failure nimmaji hogo".mysqli_error($name);
}

?>

