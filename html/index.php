<?php
	$link = mysqli_connect("database","priisoft_hcuconf","123456");
	mysqli_set_charset($link, "utf8");

	print  mysqli_error($link);

	if ( !$link)
	{
    print("Can't connect database");
    exit;
	}

	//step 2 เลือก database ที่จะใช้ สำหรับ connection 
	if( !mysqli_select_db($link,"priisoft_hcuconf"))	
	{
		print("Can't change database");
  } else {
    print("Connect database succuessful.");
	}
	mysqli_close($link);
