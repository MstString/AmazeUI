<?php
	// 设置显示为中文
	header('Content-Type:text/html; charset=utf-8;');
	if(isset($_POST["submit"]) && $_POST["submit"] == "注 册")
	{
		$user = $_POST["student_id"];
		$psw = $_POST["student_password"];
		$psw_confirm = $_POST["student_password_confirm"];
		if($user == "" || $psw == "" || $psw_confirm == "")
		{
			echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";
		}
		else
		{
			if($psw == $psw_confirm)
			{
				mysql_connect("localhost","root","root");	//连接数据库
				mysql_select_db("moyun");	//选择数据库
				mysql_query("set names 'utf-8'");	//设定字符集
				$sql = "select student_id from student_data where student_id = '$_POST[student_id]'";	//SQL语句
				$result = mysql_query($sql);	//执行SQL语句
				$num = mysql_num_rows($result);	//统计执行结果影响的行数
				if($num)	//如果已经存在该用户
				{
					echo "<script>alert('该学号已经注册！'); history.go(-1);</script>";
				}
				else	//不存在当前注册用户名称
				{
					$sql_insert = "insert into student_data (student_id,student_password) values('$_POST[student_id]','$_POST[student_password]')";
					$res_insert = mysql_query($sql_insert);
					//$num_insert = mysql_num_rows($res_insert);
					if($res_insert)
					{
						echo"<script type='text/javascript'>alert('注册成功！');location='forum.php';</script>";
						// echo "<script type='text/javascript'>alert('注册成功！'); history.go(-1);location : 'froum.php'；</script>";
						// header("location : froum.php");
					}
					else
					{
						echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
					}
				}
			}
			else
			{
				echo "<script>alert('密码不一致！'); history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}
?>
