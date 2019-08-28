<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

		<meta charset="utf-8" />
	<title><?php echo $title1 ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, minimal-ui">
	<LINK REL="SHORTCUT ICON" HREF="../image/favicon.ico" />
	<link rel="icon" href="../image/favicon.ico">
	<!-- Font Awesome -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Latest compiled and minified Bootstrap CSS -->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Responsive Tables -->
	<link rel="stylesheet" href="../css/rwd-table.min.css?v=5.2.6">
<!-- 	<link rel="stylesheet" href="../css/docs.min.css?v=5.2.6">
 -->	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- generated export files on client side -->
	<script type="text/javascript" src="tableExport.jquery.plugin-master/libs/FileSaver/FileSaver.min.js"></script>
	<!-- Export HTML Table to Excel .XLSX (Excel 2007+ XML Format) -->
	<script type="text/javascript" src="tableExport.jquery.plugin-master/libs/js-xlsx/xlsx.core.min.js"></script>

	<!-- export table-->
	<script type="text/javascript" src="tableExport.jquery.plugin-master/tableExport.min.js"></script>

	<script type="text/javascript">



		$(document).ready(function(){


			// Excel 2000 html format 
			$('#export_table').click(function(){
				// $('#table_all').tableExport({type:'excel',escape:false,fileName: 'table_all'});

			// XML Spreadsheet 2003 file format with multiple worksheet support

			$('#table_all').tableExport({type:'excel', fileName: 'table_all',
			                        mso: {fileFormat:'xlsx',
			                              }});			
						})


			
		});


	</script>

</head>
<body>
	<div class="" style="margin: 5px;">
			
		        <button type="button" id="export_table" class="btn btn-primary " 
					>Excel
				</button>

	</div>

	<div class="table-responsive" data-pattern="priority-columns">
			<table cellspacing='0' class='table table-small-font table-hover table-bordered' id='table_all'>
					<thead>
					<tr bgcolor='#b3ffb3'>
						<th>Seq.</th>
						<th>Status</th>
						<th>表格編號<br>Form No</th>
						<th>姓名<br>Name</th>
						<th data-priority='1'>MFL Member<br>會員編號</th>
						<th data-priority='1'>聯絡電話<br>Tel phone no.</th>
						<th data-priority='1'>電郵地址 Email</th>
						<th data-priority='1'>時段選擇</th>
						<th data-priority='1'>門票</th>
						<th data-priority='1'>Amount(HK$)</th>
						<th data-priority='1'>Payment Type</th>
						<th data-priority='1'>Creation<br>Date/Time</th></tr></thead><tbody><tr><td>1</td>
						<td><span style='color:red;'>Paid<span></td>
						<td></td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td></td><td align=right>2</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-15 16:44:21</td></tr><tr><td>2</td>
						<td><span style='color:red;'>Paid<span></td>
						<td></td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td></td><td align=right>2</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-15 16:48:21</td></tr><tr><td>3</td>
						<td><span style='color:red;'>Paid<span></td>
						<td></td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td></td><td align=right>2</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-15 16:51:03</td></tr><tr><td>4</td>
						<td><span style='color:red;'>Paid<span></td>
						<td></td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td></td><td align=right>2</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-15 16:54:43</td></tr><tr><td>5</td>
						<td><span style='color:red;'>Paid<span></td>
						<td></td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td></td><td align=right>2</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-15 17:01:50</td></tr><tr><td>6</td>
						<td><span style='color:red;'>Paid<span></td>
						<td></td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td></td><td align=right>2</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-15 17:11:32</td></tr><tr><td>7</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190715171306001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td></td><td align=right>2</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-15 17:13:10</td></tr><tr><td>8</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190715220843001</td>
						<td>姓名 Name</td>
						<td></td>
						<td>dcdz</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>22/09/2019 (星期日) 17:00 - 17:30</td><td align=right>2</td><td align=right>600.00</td><td align=center></td><td>2019-07-15 22:11:44</td></tr><tr><td>9</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190716104321001</td>
						<td>name</td>
						<td></td>
						<td>tel</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>22/09/2019 (星期日) 17:00 - 17:30</td><td align=right>2</td><td align=right>600.00</td><td align=center></td><td>2019-07-16 10:43:35</td></tr><tr><td>10</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190716113217001</td>
						<td>Dickson</td>
						<td></td>
						<td>2737</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>22/09/2019 (星期日) 17:00 - 17:30</td><td align=right>2</td><td align=right>500.00</td><td align=center>Paypal</td><td>2019-07-16 11:32:31</td></tr><tr><td>11</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190716121438001</td>
						<td>Chan</td>
						<td></td>
						<td>2737</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>22/09/2019 (星期日) 16:30 - 17:00</td><td align=right>1</td><td align=right>500.00</td><td align=center></td><td>2019-07-16 12:14:49</td></tr><tr><td>12</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190716122211001</td>
						<td>姓名 Name</td>
						<td></td>
						<td>212345</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>22/09/2019 (星期日) 16:30 - 17:00</td><td align=right>1</td><td align=right>500.00</td><td align=center>WeChat</td><td>2019-07-16 12:22:21</td></tr><tr><td>13</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190716171904001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 10:00 - 10:30</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-16 17:19:11</td></tr><tr><td>14</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190716172930001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>22/09/2019 (星期日) 11:30 - 12:00</td><td align=right>1</td><td align=right>600.00</td><td align=center></td><td>2019-07-16 17:30:40</td></tr><tr><td>15</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190716173800001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 10:00 - 10:30</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-16 17:38:05</td></tr><tr><td>16</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190717142158001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 10:30 - 11:00</td><td align=right>1</td><td align=right>600.00</td><td align=center></td><td>2019-07-17 14:22:02</td></tr><tr><td>17</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190717142553001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 10:30 - 11:00</td><td align=right>1</td><td align=right>600.00</td><td align=center></td><td>2019-07-17 14:25:54</td></tr><tr><td>18</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190717150732001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 11:00 - 11:30</td><td align=right>1</td><td align=right>500.00</td><td align=center></td><td>2019-07-17 15:08:00</td></tr><tr><td>19</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190717160329001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 11:00 - 11:30</td><td align=right>1</td><td align=right>500.00</td><td align=center></td><td>2019-07-17 16:03:34</td></tr><tr><td>20</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190717160735001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 11:00 - 11:30</td><td align=right>1</td><td align=right>500.00</td><td align=center></td><td>2019-07-17 16:07:39</td></tr><tr><td>21</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190718165918001</td>
						<td>姓名</td>
						<td></td>
						<td>Tel No</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 10:30 - 11:00</td><td align=right>1</td><td align=right>500.00</td><td align=center>Paypal</td><td>2019-07-18 16:59:45</td></tr><tr><td>22</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190726094451001</td>
						<td>姓名 Nam</td>
						<td></td>
						<td>聯絡電話</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 10:30 - 11:00</td><td align=right>1</td><td align=right>500.00</td><td align=center>Paypal</td><td>2019-07-26 09:47:35</td></tr><tr><td>23</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190726104214001</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>27377659</td>
						<td>cathy.lam@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 15:00 - 15:30</td><td align=right>1</td><td align=right>600.00</td><td align=center></td><td>2019-07-26 10:43:58</td></tr><tr><td>24</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190726125620432</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>27377659</td>
						<td>cathy.lam@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 11:30 - 12:00</td><td align=right>1</td><td align=right>600.00</td><td align=center></td><td>2019-07-26 12:57:21</td></tr><tr><td>25</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190726130212001</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>27377659</td>
						<td>cathylam.tl@gmail.com</td>
						<td>21/09/2019 (星期六) 15:30 - 16:00</td><td align=right>1</td><td align=right>500.00</td><td align=center></td><td>2019-07-26 13:02:17</td></tr><tr><td>26</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190729141837001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 15:30 - 16:00</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-29 14:18:47</td></tr><tr><td>27</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190729142559001</td>
						<td>dd</td>
						<td></td>
						<td>88</td>
						<td>clare.chu@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 11:00 - 11:30</td><td align=right>1</td><td align=right>600.00</td><td align=center></td><td>2019-07-29 14:26:03</td></tr><tr><td>28</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190731111727001</td>
						<td>姓名 N</td>
						<td></td>
						<td>絡電話 Tel No</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 11:00 - 11:30</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-07-31 11:17:30</td></tr><tr><td>29</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190802094550001</td>
						<td>1</td>
						<td></td>
						<td>2</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 11:00 - 11:30</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-08-02 09:46:40</td></tr><tr><td>30</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190802122155001</td>
						<td>sef</td>
						<td></td>
						<td>dg</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 11:30 - 12:00</td><td align=right>1</td><td align=right>500.00</td><td align=center>Paypal</td><td>2019-08-02 12:22:00</td></tr><tr><td>31</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190802163101001</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>27377659</td>
						<td>cathylam.tl@gmail.com</td>
						<td>21/09/2019 (星期六) 11:30 - 12:00</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-08-02 16:34:51</td></tr><tr><td>32</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190802173345247</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>27377659</td>
						<td>cathylam.tl@gmail.com</td>
						<td>21/09/2019 (星期六) 12:00 - 12:30</td><td align=right>1</td><td align=right>500.00</td><td align=center></td><td>2019-08-02 17:34:05</td></tr><tr><td>33</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190802173953247</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>27377659</td>
						<td>cathylam.tl@gmail.com</td>
						<td>21/09/2019 (星期六) 12:00 - 12:30</td><td align=right>1</td><td align=right>500.00</td><td align=center>Paypal</td><td>2019-08-02 17:40:17</td></tr><tr><td>34</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190802174541001</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>27377659</td>
						<td>cathylam.tl@gmail.com</td>
						<td>21/09/2019 (星期六) 14:00 - 14:30</td><td align=right>1</td><td align=right>600.00</td><td align=center></td><td>2019-08-02 17:45:50</td></tr><tr><td>35</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190807105847001</td>
						<td>姓名</td>
						<td></td>
						<td>Tel No</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 12:00 - 12:30</td><td align=right>1</td><td align=right>500.00</td><td align=center>Paypal</td><td>2019-08-07 10:59:18</td></tr><tr><td>36</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190807113547001</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>2737 7659</td>
						<td>cathy.lam@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 14:00 - 14:30</td><td align=right>1</td><td align=right>500.00</td><td align=center></td><td>2019-08-07 11:40:43</td></tr><tr><td>37</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190807131443001</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>2737 7659</td>
						<td>cathy.lam@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 14:00 - 14:30</td><td align=right>1</td><td align=right>500.00</td><td align=center></td><td>2019-08-07 13:14:58</td></tr><tr><td>38</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190808095742238</td>
						<td>Test</td>
						<td></td>
						<td>66072662</td>
						<td>tityho129@gmail.com</td>
						<td>21/09/2019 (星期六) 14:00 - 14:30</td><td align=right>1</td><td align=right>500.00</td><td align=center></td><td>2019-08-08 09:57:50</td></tr><tr><td>39</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190808095949238</td>
						<td>Test</td>
						<td></td>
						<td>66072662</td>
						<td>tityho129@gmail.com</td>
						<td>21/09/2019 (星期六) 14:00 - 14:30</td><td align=right>1</td><td align=right>500.00</td><td align=center>WeChat</td><td>2019-08-08 09:59:54</td></tr><tr><td>40</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190808142354001</td>
						<td>Cathy Lam</td>
						<td></td>
						<td>2737 7659</td>
						<td>cathy.lam@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 15:00 - 15:30</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-08-08 14:24:43</td></tr><tr><td>41</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190808164014001</td>
						<td>Tel No 1</td>
						<td></td>
						<td>Tel No 1</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 14:00 - 14:30</td><td align=right>1</td><td align=right>500.00</td><td align=center>WeChat</td><td>2019-08-08 16:40:36</td></tr><tr><td>42</td>
						<td><span style='color:grey;'>Void<span></td>
						<td>F190809111000205</td>
						<td>Testing- Cathy Lam</td>
						<td></td>
						<td>2737 7659</td>
						<td>cathy.lam@gmail.con</td>
						<td>21/09/2019 (星期六) 17:30 - 18:00</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-08-09 11:10:23</td></tr><tr><td>43</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190812175120001</td>
						<td>姓名 1</td>
						<td></td>
						<td>2737</td>
						<td>dickson.chan@tomleemusic.com</td>
						<td>21/09/2019 (星期六) 14:30 - 15:00</td><td align=right>1</td><td align=right>500.00</td><td align=center>Paypal</td><td>2019-08-12 18:04:36</td></tr><tr><td>44</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190813110745001</td>
						<td>Tesing-Cathy Lam</td>
						<td></td>
						<td>2737 7659</td>
						<td>cathy.lam@tomleemusic.com</td>
						<td>22/09/2019 (星期日) 11:30 - 12:00</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-08-13 11:09:30</td></tr><tr><td>45</td>
						<td><span style='color:red;'>Paid<span></td>
						<td>F190813114913189</td>
						<td>Test- Cathy</td>
						<td></td>
						<td>2737  7659</td>
						<td>cathy.lam@tomleemusic.com</td>
						<td>22/09/2019 (星期日) 11:30 - 12:00</td><td align=right>1</td><td align=right>600.00</td><td align=center>Paypal</td><td>2019-08-13 11:49:47</td></tr></tbody></table><br>		</div><br>
	</div> <!-- end container -->



</body>
</html>