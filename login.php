<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once "util/db.php";
    $name = $_POST["name"];
    $password = $_POST["password"];
    $stmt = $mysql->prepare("select * from user where name=?");
    $stmt->bind_param('s',$name);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id,$username,$pwd);
    if($stmt->num_rows!=0){
        $stmt->fetch();
    }
    if($pwd == $password){
        $_SESSION['uid']=$id;
        $_SESSION['name']=$username;
        if(isset($_GET['next'])){
            header('Location:'.$_GET['next']);
        }else{
            header('Location:list.php');
        }
    }else{
        echo "<script>alert('用户名或密码错误');history.back();</script>";
    }
}else {
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>登陆</title>
    </head>
    <body>

    <form action="" method="post">
        用户名:<input type="text" name="name" required><br/>
        密码:<input type="password" name="password" required><br/>
        <input type="submit" value="登陆">
    </form>


    </body>
    </html>
<?php
}
?>