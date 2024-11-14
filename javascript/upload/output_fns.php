<?php
function display_login_form(){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生登录</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
</head>
<body>
<div class="box">
    <form action="Stu_member.php" method="post">
        <h2>登录</h2>
        <div class="input-box">
            <label for="username">学号：</label>
            <input name="username" id="username" placeholder="请输入学号">
            <span class="icon"><i class="el-icon-user"></i></span>
        </div>
        <div class="input-box">
            <label for="password">密码：</label>
            <input name="password" id="password" type="password" placeholder="请输入密码">
            <span class="icon"><i class="el-icon-lock"></i></span>
        </div>
        <div class="remember-forget">
            <label>
                <input type="checkbox">记住密码
            </label>

        </div>
        <button type="submit">登录</button>
        <div class="change">
            <a href="tea_login.php">教师登录</a>
        </div>
    </form>
    <div>

    </div>
</div>
</body>
</html>
<?php
}

function display_tea_login_form(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>教师登录</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    </head>
    <body>
    <div class="box">
        <form action="Tea_member.php" method="post">
            <h2>登录</h2>
            <div class="input-box">
                <label for="username">工号：</label>
                <input name="username" id="username1" placeholder="请输入工号">
                <span class="icon"><i class="el-icon-user"></i></span>
            </div>
            <div class="input-box">
                <label for="password">密码：</label>
                <input name="password" id="password1" type="password" placeholder="请输入密码">
                <span class="icon"><i class="el-icon-lock"></i></span>
            </div>
            <div class="remember-forget">
                <label>
                    <input type="checkbox">记住密码
                </label>

            </div>
            <button type="submit">登录</button>
            <div class="change">
                <a href="login.php">学生登录</a>
            </div>
        </form>

    </div>
    </body>
    </html>
<?php
}

function display_log($username){
    $result=select_log($username);
    if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
    echo "<tr><td>" . $row["Table_name"]."</td><td>".$row["sname"]."</td><td>".$row["state"]."</td><td>".
            $row["credit"]."</td></tr>";
        }
    }
}


function display_home(){
    ?>
    <!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>创新创业管理网站</title>
        <link rel="stylesheet" href="../css/base.css">
        <link rel="stylesheet" href="../css/index.css">
        <style></style>
    </head>

    <body>
    <!--头部区域-->
    <h1 class="banner">
        <div class="wrapper">

        </div>

    </h1>

    <div class="header">
        <div class="wrapper">
            <!--logo-->
            <div class="logo">
                <h1><a href="#">创新创业</a></h1>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#" class="active">首页</a></li>
                    <li><a href="#">上传</a></li>
                    <li><a href="#">上传记录</a></li>
                    <li><a href="#">用户中心</a></li>
                    <li><a href="">通知</a> </li>
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="请输入关键词">
                <a href="#"></a>
            </div>

            <div class="user">
                <a href="#">
                    <img src="touxiang.jpg" alt="">
                    <span>学生名</span>
                </a>
            </div>
        </div>
    </div>
    <!--佐证材料及状态显示-->
    <div class="menu">
        <aside class="menu_aside">

        </aside>
        <div class="hm">
            <header class="menu_header">
                总分
            </header>
            <!--佐证材料条状显示-->
            <main class="menu_main">
                <table class="box" >
                    <tr class="t_head">
                        <th class="t1">项目名称</th>
                        <th class="t2">提交日期</th>
                        <th class="t3">审核状态</th>
                        <th class="t4">项目得分</th>
                    </tr>
                    <tr>
                        <?php
                        display_log("23434010411");
                        ?>
                    </tr>
                </table>
            </main>
        </div>
    </div>
    <div class="Race">
        <div class="R_box">
            <a href="#">
                <div class="box1">
                    <p>第一项赛事</p>
                </div>
            </a>
        </div>
    </div>
    </body>
    </html>
    <?php
}


?>