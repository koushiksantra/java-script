<html>
	<head>
		<title>This is example of simple ajax</title>
		<script type=text/javascript src="../jquery-1.7.1.min.js"></script>
		<script>
			$(document).ready(function(){
				  
				   $('body').click(function(e){
					
					  window.mouseXPos = e.pageX;
					  window.mouseYPos = e.pageY;
					  var x= window.mouseXPos ;
					  var y=window.mouseYPos
					  console.log(x,y);
				   }); 
			   
			})
		</script>
		
		</head>
	<body>
		<div id='search_box'>
			<form id='search1'>
				<input type="text" name="search" id="search_text"> 
				
			</form>
		</div>
		<div id='result'>
		</div>
	</body>
</html>