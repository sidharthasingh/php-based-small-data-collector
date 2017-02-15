<?php
	error_reporting(0);
	if($_POST['rd_name']!=false)
	{
				$filename="data/".$_POST['rd_name'];
				$filename.=".txt";
				$file=fopen($filename,"r");
				if($file==false)
				{
					echo <<< end
					<script type="text/javascript">
					alert("no records found");
					window.location="http://localhost:8080";
					</script>
end;
				}
				else
				{
					$size=filesize($filename);
					$text=fread($file,$size);
					echo "<pre>$text</pre>";
					fclose($file);
				}
	}
	if($_POST['ed_name']==true && $_POST['ed_data']==true)
			{
					$filename="data/".$_POST['ed_name'];
					$filename.=".txt";
					$file=fopen($filename,"w");
					if($file==false)
					{
						echo <<< end
						<script type="text/javascript">
						alert("unable to create records");
						window.location="http://localhost:8080";
						</script>
end;
					}
					else
					{
						$text=$_POST['ed_data'];
						fwrite($file,$text);
						echo <<< end
						<script type="text/javascript">
						alert("record created");
						window.location="http://localhost:8080";
						</script>
end;
						fclose();
					}
end;
			}
?>