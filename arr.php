<head><script type="text/javascript">
	
function setText(id,val){
	document.getElementById(id).value=val;
	
}

	function validate(){
		var temp=0;
	var arr=new Array(3)
for (i=0; i <3; i++)
arr[i]=new Array(3)

var brr=new Array(3)
for(i=0;i<3;i++)
brr[i]=new Array(3)

	var i=0;
	var j=0;
for(k=1;k<3;k++){	
alert(k);
for(i=0;i<3;i++)
{
	for(j=0;j<3;j++)
	{
		if(k==1)
		{var test="e"+i+""+j;}
		else{var test="f"+i+j;}
		console.log("Test value "+test);
		
		console.log("Tyu Value "+tyu);
		arr[i][j]=document.getElementById(test).value;
		
		var t=arr[i][j];
		
		if(k==1)
		{ 
			brr[i][j]=t;
			}
			
				
		}
		
	}
	
	
	//document.forms[0].submit();
}
for(k=0;k<3;k++)
{
	for(i=0;i<3;i++){
	for(j=0;j<3;j++){
		
		temp=temp+(brr[k][j]*arr[j][i]);
				}
				
		var tyu="r"+k+i;
		setText(tyu,temp);
		temp=0;
	}
	
	}

}



 </script></head>
 
 
 
<?php


for($k=1;$k<3;$k++){
	echo "<fieldset style=\"color:red;  width:250px;\"><legend>Array $k</legend>";
	echo "<form action=\"arr.php\" method=\"GET\" id=\"$k\">";	
for($j=0;$j<3;$j++){

for($i=0;$i<3;$i++)
{	
	if($k==1){
	 $v="e".$j.$i;}
	 else
	 {$v="f".$j.$i;
		 }
echo "<input type=\"text\" name=\"e\" id=\"$v\" size=\"5\">\n";
} 
echo "<br>";

}echo"<input type=\"button\" name=\"kou\" onclick=\"validate();\" value=\"button\">";
echo "</form>";
echo"</fieldset><br>";
echo "<hr>";
}


?>

<?php
for($k=0;$k<3;$k++){
	for($j=0;$j<3;$j++){
echo "<input type=\"text\" name=\"r$k$j\" id=\"r$k$j\" size=\"5\">\n";
}
echo "<br />";
}
?>

