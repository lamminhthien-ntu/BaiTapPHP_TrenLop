	elseif (!is_numeric) 
		echo "Đây không phải là kiểu số";
	else
	{
		if (($_GET['n']>=10) && ($_GET['n']<=1000)
		{
			$n = $_GET['n'];
			echo "Số bạn nhập nằm trong phạm vi từ 10 đến 1000";
		}
		else
			echo "Số bạn nhập nằm ngoài phạm vi từ 10 đến 1000";
	}