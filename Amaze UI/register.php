<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>MOYUN</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>MOYUN</h1>
    <p>Just For Dream<br/>交流 创新 为梦想而战！</p>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
    <h3>注册</h3>
    <hr>
    <!-- <div class="am-btn-group">
      <a href="#" class="am-btn am-btn-primary am-btn-sm"><i class="am-icon-qq am-icon-sm"></i> QQ</a>
      <a href="#" class="am-btn am-btn-success am-btn-sm"><i class="am-icon-weixin am-icon-sm"></i> 微信</a>
    </div>
    <br>
    <br> -->
    <!-- <form action="regcheck.php" method="post">
        <meta http-equiv="Content-Type" content = "text/html"; charset="utf-8"/>
    	用户名：<input type="text" name="username"/>
        <br/>
        密　码:<input type="password" name="password"/>
        <br/>
        确认密码：<input type="password" name="confirm"/>
        <br/>
        <input type="Submit" name="Submit" value="注册"/>
    </form> -->
    <form action="regcheck.php" method="post" class="am-form">
      <label for="text">学号:</label>
      <input type="text" name="student_id">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="student_password">
      <br>
      <label for="password">确认密码:</label>
      <input type="password" name="student_password_confirm">
      <br>
      <label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码
      </label>
      <br />
      <div class="am-cf">
        <input type="submit" name="submit" value="注 册" class="am-btn am-btn-primary am-btn-sm am-fr">
      </div>
    </form>
    <hr>
    <p>© 2016 by The MOYUN Team.</p>
  </div>
</div>
</body>
</html>
