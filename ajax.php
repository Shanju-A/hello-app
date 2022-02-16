<!DOCTYPE html>
<html>
<head>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
	<script >
		 const xhttp = new XMLHttpRequest();
   	  xhttp.onload = function() {
      const obj=JSON.parse(this.responseText);
       
       console.log(this.responseText);
         
        $(document).ready(function() {
        var t= $('#hello').DataTable()
        
       for(var i=0 ;i<20;i++){
            
         const n=obj.MRData.RaceTable.Races[0].Results[i];
    	 const h=obj.MRData.RaceTable.Races[0].Results[i].Driver;
        
        t.row.add([
            
            n.position,
            h.code,
            h.driverId,
            h.givenName,
            h.dateOfBirth,
            h.nationality

        	]).draw(false);
    	
       // $('#hello').append('<tr><th>'+n.position+'</th><th>'+h.code+'</th><th>'+h.driverId+'</th><th>'+h.givenName+'</th><th>'+h.dateOfBirth+'</th><th>'+h.nationality+'</th></tr>');
     
      
      }

       });
      	}
 	 
	 xhttp.open("GET", "manage1.json", true);
	 xhttp.send(); 
	</script>

</body>
</html>



