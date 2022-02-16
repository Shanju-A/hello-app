<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	
</head>
<body>
	<table id="table"  class="display" style="width:100%">
		<thead>
			<tr>
				<th>Position</th>
				<th>DRIVER CODE</th>
				<th>DRIVERID</th>
				<th>Given Name</th>
			<!-- 	<th>Date Of Birth</th>
				<th>Nationality</th>	 -->
			</tr>
		</thead>
 		</table>
	<script >
		alert=function(){};
	$(document).ready(function() {
   var t=  $('#table').DataTable();
   var settings = {
   	
  "url": "http://ergast.com/api/f1/2004/1/results.json",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (data) {
    	 
           	console.log(data);
           	  for(var i=0 ;i<20;i++){
            
         const n=data.MRData.RaceTable.Races[0].Results[i];
    	 const h=data.MRData.RaceTable.Races[0].Results[i].Driver;
        
        t.row.add([
            
            n.position,
            h.code,
            h.driverId,
            h.givenName,
            h.dateOfBirth,
            h.nationality

        	]).draw(false);
    	

         }
           })

    } )
	</script>

</body>
</html>