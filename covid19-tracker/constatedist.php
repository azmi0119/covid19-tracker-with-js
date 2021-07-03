<!DOCTYPE html>
<html>
<head>
	<title>Corona Virus Tracker</title>
</head>
<body>

	<table width="500px" border="1px" align="center">
		<tr>
			<td colspan="2"><h2 align="center">Global Wise Data</h2></td>
		</tr>
		<tbody id="global-wise">
			
		</tbody>
	</table>
	<br>

	<table width="60p%" border="1px" align="center">
		<tr>
			<td colspan="8"><h2 align="center">Country Wise Data</h2></td>
		</tr>

		<tr>
			<th>S.N</th>
			<th>Country</th>
			<th>NewConfirmed</th>
			<th>NewDeaths</th>
			<th>NewRecovered</th>
			<th>TotalConfirmed</th>
			<th>TotalDeaths</th>
			<th>TotalRecovered</th>
			 
		</tr>
		<tbody id="country-wise">
			
		</tbody>
	</table>

	<br>

	<table width="60p%" border="1px" align="center">
		<tr>
			<td colspan="8"><h2 align="center">Country Wise Data</h2></td>
		</tr>

		<tr>
			<th>S.N</th>
			<th>Country</th>
			<th>NewConfirmed</th>
			<th>NewDeaths</th>
			<th>NewRecovered</th>
			<th>TotalConfirmed</th>
			<th>TotalDeaths</th>
			<th>TotalRecovered</th>
			 
		</tr>
		<tbody id="state-wise">
			
		</tbody>
	</table>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

		$.ajax({
		url : "https://api.covid19india.org/data.json",
		type : "GET",
		dataType : "JSON",
		success : function(data){
			console.log(data.statewise);
		}
	});


	 
</script>
</body>
</html>