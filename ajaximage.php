<?php
session_start();
$session_id='1'; //$session id
$path = "images/img_user/";

	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
                                                                                                                            $sql="select * from tb_userpic where `usr_id`='".$UsrId."' ";
                                                                                                                            var_dump($sql);
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								mysql_query("UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");
									
									echo "<img src='images/img_user/".$actual_image_name."'  class='preview'>";
								}
							else
								echo "failed";
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			exit;
		}
?>