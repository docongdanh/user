<?php
$txtUser="";
$txtPass="";
$txtFullName="";
$error="";
if(isset($_POST['cmdThem']))
{
    include 'connect.php';
    $txtUser=$_POST['txtUser'];
    $txtPass=$_POST['txtPass'];
    $txtFullName=$_POST['txtFullName'];
    //kiem tra trung khoa
    $sql="select * from user where username='$txtUser'";
    $result=  mysqli_query($link, $sql);
    if(mysqli_num_rows($result)>0)
    {
        $error= "Trung user name";
                
    }else{

        //them moi
        $sql="insert into user values('$txtUser','$txtPass','$txtFullName')";
        mysqli_query($link, $sql);
        header("location: index.php");
    }
    echo $error;
}
//else if(!isset($_POST['cmdThem'])|| ($error!="")){
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title></title>
    </head>
    <body >
        <h1 align="center">THÊM USER </h1>
        <h1>
            <?php echo $error ?>
        </h1>
        <form action="them.php" method="POST">
        <table align="center">
            <tr>
                <td>User name:</td>
                <td>
                    <input name="txtUser" type="text" class="text" value="">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input name="txtPass" type="password" class="text" value="">
                </td>
            </tr>
            <tr>
                <td>Full name:</td>
                <td>
                    <input name="txtFullName" type="text" class="text" value="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" class="text" name="cmdThem" value="Thêm mới">
                    <input type="Reset" class="text" name="cmdReset" value="Reset">
                </td>
            </tr>
      </table>
        </form>
        <?php
       // }
?>
    </body>
</html>
