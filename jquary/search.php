<html>
	<head>
		<title>This is example of simple ajax</title>
		<script type=text/javascript src="../jquery-1.7.1.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#search1').click(function(){
				
					$('#search_text').keypress(function(e){
						
							
							if(e.keyCode == 13) {
								
								var val=$('#search_text').serialize();
								alert(val);
								$.post('dbms.php',val,function(kou){
								alert(kou);
											$('#result').html(kou);
										});	
									
							}
							else{
							var valu=$('#search_text').serialize()
								$.post('dbms.php',valu,function(kou){
								//alert(kou)
											$('#result').html(kou)
										});	
							
							}
					});
					
					
					/*$.get('dbms.php',valu,function(kou){
					
					
					});*/
				});
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
		<div id='search_box'>
			<form id='search1'>
				<input type="text" name="search" id="search_text"> 
				
			</form>
		</div>
		<div id='result'>
		</div>
	</body>
</html>