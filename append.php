
<!DOCTYPE html>
<html>
<head>
	 <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<script>
		var settings = {
  "url": "http://ergast.com/api/f1/2004/1/results.json",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (response) {

var h=response.MRData.RaceTable.Races[0].Results;
console.log(h);
console.log(h.length);

for (var i = 0; i<h.length; i++) {
	
	console.log(h[i]);

}

});

// var settings = {

//   "url": "http://ergast.com/api/f1/2004/1/results.json",

//   "method": "GET",

//   "timeout": 0,

//   "headers": {

//     "x-api-key": "mmrvSzbovt8h8YuYoV3wT3Pvr5GL8r6J6SDi1Wq7"

//   },

// };

 

// $.ajax(settings).done(function (response) {

//   var h=JSON.parse(response);
//   console.log(h);

// });
</script>

</body>
</html>


