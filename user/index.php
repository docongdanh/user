<?php
include 'connect.php';
$sql="select * from user";
$result=  mysqli_query($link, $sql);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title></title>
    </head>
    <body >
        <h1 align="center">DANH SÁCH USER</h1>
        <table align="center">
            <tr >
                <th>
                    User name
                </th>
                <th>
                    Password
                </th>
                <th>
                    Full name
                </th>
                <th>Thao tác</th>                
            </tr>

            <?php
            while ($rs = mysqli_fetch_array($result)) 
            { ?>
                   <tr>
                       <td class="xanh">
                    <?php echo $rs['username']; ?>
                </td>
                <td>
                    <?php echo $rs['password']; ?>
                </td>
                <td>
                    <?php echo $rs['fullname']; ?>
                </td>
                <td>
                    <a href="sua.php?user=<?php echo $rs['username']; ?>">Sửa/</a>              
                    <a href="xoa.php?user=<?php echo $rs['username']; ?>">Xóa</a>
                </td>
            </tr>
        <?php    
            } 
        ?>
            <tr>
                <td colspan="5"><a href="them.php">Thêm mới</a></td>
            </tr>
        </table>
    </body>
</html>
