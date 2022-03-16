<!DOCTYPE html>
<html>
<head>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>
  <h1>RESULT</h1>
    <table id="hello"  class="display" style="width:100%">
    <thead>
      <tr>
        <th>Position</th>
        <th>DRIVER CODE</th>
        <th>DRIVERID</th>
        <th>Given Name</th>
      </tr>
    </thead>
    </table>
	<script >
    alert = function() {};
		 const xhttp = new XMLHttpRequest();
   	  xhttp.onload = function() {
      const obj=JSON.parse(this.responseText);
       
       console.log(this.responseText);
         
        $(document).ready(function() {
        var t= $('#hello').DataTable();
        
       for(var i=0 ;i<20;i++){
            
         const n=obj.MRData.RaceTable.Races[0].Results[i];
    	 const h=obj.MRData.RaceTable.Races[0].Results[i].Driver;
        
        t.row.add([
            n.position,
            h.code,
            h.driverId,
            h.givenName,
            

        	]).draw(false);
    	
     
      
      }

       });
      	}
 	 
	 xhttp.open("GET", "http://ergast.com/api/f1/2004/1/results.json", true);
	 xhttp.send(); 
	</script>

</body>
</html>



