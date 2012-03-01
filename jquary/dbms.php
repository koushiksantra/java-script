<html>
	<head>
		<title>This is example of simple ajax</title>
		<script type="text/javascript" src="../jquery-1.7.1.min.js"></script>
		<script>
			$(document).ready(function(){
				
			});
		</script>
		<style>
		div{
			bg-color:red;
			width:200px,
			border:2,
		}
		</style>
	</head>
	<body>
		<?php
		if(isset($_REQUEST['search'])){
		echo "Request Found";
		}else{
		echo "Not Found";
		}
	    $uid=$_REQUEST['search'];
		echo $uid;
		?>
		<?php
		echo '<pre>';
			mysql_connect('localhost','root','rootwdp');
			mysql_select_db('test');
		//	if(isset($uid)>0){
				$query=("select * from login where username like '%$uid%'");
				$result=mysql_query($query);
				$num_field=mysql_num_fields($result);
				$num_rows=mysql_num_rows($result);
				//$sss=mysql_fetch_array($result);
				
				for($i=0;$i<$num_rows;$i++)
				$sss[$i]=mysql_fetch_array($result);
				
				
				
					echo '<table border="1" name="users" id="users">';	
					echo '<tr >';
				for($a=0;$a<$num_field;$a++){
					$field1=mysql_field_name($result,$a);
					echo'<th  >'.$field1.'</th>';
				}
					echo '</tr>';
				for($i=0;$i<$num_rows;$i++){
				
					echo '<tr>';
					for($limit=0;$limit<$num_field;$limit++)
						echo '<td>'.$sss[$i][$limit].'</td>';
					echo'</tr>';
				}
				echo '</table>';	
			//}
		?>
	</body>
</html>
