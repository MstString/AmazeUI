<?php
//设置文本的编码类型
header('Content-Type:text/html; charset=utf-8');
	if(isset($_POST["submit"]) && $_POST["submit"] == "登 录")
	{
		$user = $_POST["student_id"];
		$psw = $_POST["student_password"];
		if($user == "" || $psw == "")
		{
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
		}
		else
		{
			mysql_connect("localhost","root","root");
			mysql_select_db("moyun");
			mysql_query("set names 'utf-8'");
			$sql = "select student_id, student_password from student_data where student_id = '$_POST[student_id]' and student_password = '$_POST[student_password]'";
			$result = mysql_query($sql);
			$num = mysql_num_rows($result);
			if($num)
			{
				// $row = mysql_fetch_array($result);	//将数据以索引方式储存在数组中
				// echo $row[0];
				header("location: DATA.php ");
				//控制页面的跳转
				// echo '<script type="text/javascript">window.location.href="DATA.php"</script>';
			}
			else
			{
				echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
			}
		}
	}
	// else
	{
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";
	}

?>
