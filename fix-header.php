<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title1; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, minimal-ui">

<!-- for fixed header in scrolling table -->
	<meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" />


	<LINK REL="SHORTCUT ICON" HREF="../image/favicon.ico" />
	<link rel="icon" href="../image/favicon.ico">
	<!-- Font Awesome -->
	<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Responsive Tables -->
	<link rel="stylesheet" href="css/rwd-table.min.css?v=5.2.6">
	<link rel="stylesheet" href="css/docs.min.css?v=5.2.6">


	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- generated export files on client side -->
	<script type="text/javascript" src="tableExport.jquery.plugin-master/libs/FileSaver/FileSaver.min.js"></script>
	<!-- Export HTML Table to Excel .XLSX (Excel 2007+ XML Format) -->
	<script type="text/javascript" src="tableExport.jquery.plugin-master/libs/js-xlsx/xlsx.core.min.js"></script>

	<!-- export table-->
	<script type="text/javascript" src="tableExport.jquery.plugin-master/tableExport.min.js"></script>

<!-- for fixed header in scrolling table -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/floatthead/2.1.4/jquery.floatThead.min.js"></script>



	<script>
		$(document).ready(function(){

/*for fixed header in scrolling table*/			
			var $table = $('.fixed-header');
			$table.floatThead({
				scrollContainer: function($table){
					return $table.closest('.wrapper');
				}
			});

	});

	</script>

<style>

/*for fixed header in scrolling table*/			
.wrapper {
    overflow: auto;
    position: relative;
    height: 400px;
    width: 400px;
}
.wrapper th,td{
	min-width: 100px;
}
</style>
</head>
<body>
<div class="container">
 
<div class="wrapper" data-pattern="priority-columns" style="">
    	<table class=' table fixed-header table-small-font table-hover table-bordered ' id='table_all' >
					<!-- <div style='position: relative; top: 0px'> -->
					<!-- <div style='position: absolute; top: 0px'>	 -->
					<thead >
					<tr bgcolor='#b3ffb3' >
						<th>Seq.</th>
						<th>Status</th>
						<th>表格編號<br>Form No</th>
						
						<th>中文姓名<br>Name in Chinese</th>
						<th>英文姓名<br>Name in English</th>

						<th data-priority='1'>性別<br>Sex</th>
						<th data-priority='1'>家長 / 監護人姓名</th>					
						<th data-priority='1'>CONTACT NO. </th>
						<th data-priority='1'>性別<br>Sex</th>
						<th data-priority='1'>家長 / 監護人姓名</th>					
				

					</tr>
					</thead>
					<!-- </div> -->
			<!-- </div> -->
					<tbody >
					<?php for ($i=0; $i < 21; $i++) { 
						echo "


						<tr>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>

							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>
							<td>1</td>

						</tr>



						";
					} ?>
					</tbody>
		</table>




	</div><br>
</div>
	
</body>
</html>