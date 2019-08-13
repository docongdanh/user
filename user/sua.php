<?php

    include 'connect.php';
    if(isset($_POST['cmdSua']))
    {
        $txtUser=$_POST['txtUser'];
        $txtPass=$_POST['txtPass'];
        $txtFullName=$_POST['txtFullName'];
        //kiem tra trung khoa
        $sql="select * from user where username='$txtUser'";
        $result=  mysqli_query($link, $sql);
        $sql="Update  user set password='$txtPass', fullname='$txtFullName' where username='$txtUser'";
        mysqli_query($link, $sql);
        header("location: index.php");
    }
    $txtUser=$_GET['user'];
    $sql="select * from user where username='$txtUser'";
    $result=  mysqli_query($link, $sql);
    if($rs=mysqli_fetch_array($result))
    {
        $txtUser=$rs['username'];
        $txtPass=$rs['password'];
        $txtFullName=$rs['fullname'];
   
        ?>
        <html>
            <head>
                <meta charset="UTF-8">
                <link rel="stylesheet" type="text/css" href="styles.css">
                <title></title>
            </head>
            <body >
                <h1 align="center">SỬA USER </h1>
            
                <form action="sua.php" method="POST">
                <table >
                    <tr>
                        <td>User name:</td>
                        <td>
                            <input  type="text" class="text" value="<?php echo $txtUser?>" disabled="true">
                            <input name="txtUser" type="hidden" value="<?php echo $txtUser?>" >
                        </td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td>
                            <input name="txtPass" type="password" class="text" value="<?php echo $txtPass?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Full name:</td>
                        <td>
                            <input name="txtFullName" type="text" class="text" value="<?php echo $txtFullName?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" class="text" name="cmdSua" value="Sửa đổi">
                    </tr>
              </table>
                </form>
        <?php
        }
        ?>
    </body>
</html>
