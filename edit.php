<?php

include_once("koneksi.php");
 
if(isset($_POST['update']))
{    
    $id_firda = $_POST['id_firda'];
    
    $nama_firda=$_POST['nama_firda'];
    $email_firda=$_POST['email_firda'];
    $alamat_firda=$_POST['alamat_firda'];
        
    $result = mysqli_query($mysqli, "UPDATE tbl_firda SET nama_firda='$nama_firda', email_firda='$email_firda', alamat_firda='$alamat_firda' WHERE id_firda=$id_firda");
    
    header("Location: index.php");
}
?>
<?php

$id_firda = $_GET['id_firda'];
 
$result = mysqli_query($mysqli, "SELECT * FROM tbl_firda WHERE id_firda=$id_firda");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama_firda = $user_data['nama_firda'];
    $email_firda = $user_data['email_firda'];
    $alamat_firda = $user_data['alamat_firda'];
    
}
?>
<html>
<head>    
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table width="20%" border="6" >
            <tr> 
                <td>Nama_firda</td>
                <td><input type="text" name="nama_firda" value=<?php echo $nama_firda;?>></td>
            </tr>
            <tr> 
                <td>email_firda</td>
                <td><input type="text" name="email_firda" value=<?php echo $email_firda;?>></td>
            </tr>
            <tr> 
                <td>alamat_firda</td>
                <td><input type="text" name="alamat_firda" value=<?php echo $alamat_firda;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_firda" value=<?php echo $_GET['id_firda'];?>></td>
                <td><input type="submit" name="update" value="Edit" style="background-color: LightBlue;"></td>
            </tr>
        </table>
    </form>
    
    
</body>
</html>