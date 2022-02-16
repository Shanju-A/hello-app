<html lang="en">
  
<head>
    <!-- <meta charset="UTF-8"> -->
    <title>GFG User Details</title>
  
    <script src=
"https://code.jquery.com/jquery-3.5.1.js">
    </script>
  
   
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans',
				'Gill Sans MT', ' Calibri',
				'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>GeeksForGeeks</h1>
		<table id='table'>
			<tr>
				<th>GFG UserHandle</th>
				<th>Practice Problems</th>
				<th>Coding Score</th>
				<
			</tr>

			<script>
				$(document).ready(function () {

				
					$.getJSON("j.json",function (data) {
						var student = '';
						$.each(data, function (key, value) {

							student += '<tr>';
							student += '<td>' +
								value.fruit + '</td>';

							student += '<td>' +
								value.size + '</td>';

							student += '<td>' +
								value.color + '</td>';

							student += '</tr>';
						});
						
						$('#table').append(student);
					});
				});
			</script>
	</section>
</body>

</html>
