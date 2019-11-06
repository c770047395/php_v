<?php
session_start();
require_once "util/db.php";
if(isset($_SESSION['uid'])){
    ?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>商品列表</title>
    </head>
    <body>
    <h1>欢迎您,<?php echo $_SESSION['name'];?></h1><a href="logout.php">退出登陆</a>
        <table>
            <thead>
            <tr>
                <th>序号</th>
                <th>商品名</th>
                <th>商品数量</th>
                <th>商品价格</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>冬瓜茶</td>
                <td>20</td>
                <td>50.0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>菊花茶</td>
                <td>20</td>
                <td>50.0</td>
            </tr>
            <tr>
                <td>3</td>
                <td>橙汁</td>
                <td>20</td>
                <td>50.0</td>
            </tr>
            <tr>
                <td>4</td>
                <td>冰红茶</td>
                <td>20</td>
                <td>50.0</td>
            </tr>
            </tbody>
        </table>
    </body>
    </html>
<?php
}else{
    header("Location:login.php?next=".$_SERVER['REQUEST_URI']);
    exit(0);
}


?>
