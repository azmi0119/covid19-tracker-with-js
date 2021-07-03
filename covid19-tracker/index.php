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


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

	$.ajax({
		url : "https://api.covid19api.com/summary",
		type : "GET",
		dataType : "JSON",
		success : function(data){
			console.log(data); // print data in console

			console.log(data.Global); 	// Print Global Data 

			console.log(data.Countries); 	// Print Global Data 

			//console.log(data.Global.NewConfirmed); // Particular One field data fetch 

			// Fetch all Global data with each loop NewConfirmed,TotalConfirmed,NewDeaths,TotalDeaths,NewRecovered,TotalRecovered
			$.each(data.Global, function(key,value){

				// make a selector and print all Global Data
				$("#global-wise").append("<tr><td>" + key +"</td><td>"+ value +"</td></tr>");
			});



			// Fetch all Countries data with each loop NewConfirmed,TotalConfirmed,NewDeaths,TotalDeaths,NewRecovered,TotalRecovered
			var sno =1; // S.N print 
			$.each(data.Countries, function(key,value){

				// make a selector and print all Global Data
				$("#country-wise").append("<tr>"+

					"<td>" + sno +"</td>" +
					"<td>"+ value.Country +"</td>" +
					"<td>" + value.NewConfirmed +"</td>" +
					"<td>"+ value.NewDeaths +"</td>" +
					"<td>" + value.NewRecovered +"</td>" +
					"<td>"+ value.TotalConfirmed +"</td>" +
					"<td>" + value.TotalDeaths +"</td>" +
					"<td>"+ value.TotalRecovered +"</td>" +

					"</tr>");

				sno++;
				
			});

		}
	});
	 
</script>
</body>
</html>