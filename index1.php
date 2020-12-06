<html>
<head>
  <title>Date Formatting with Date Picker using JavaScript</title>
  
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

<style type="text/css">
body {
	width:800px;
	margin:auto;
}
 
#date_Format_Style {
	padding: 20px 40px;
	background: #0079B3;
	border:2px solid #222;
	color: #FFF;
	font-size: 1.2em;
	margin-top:100px;
	text-align:center;
}

.input-style {
	margin-bottom: 20px;
}

.form-input-style {
	padding: 10px;
	width: 250px;
	border:1px solid blue;
	font-size: 18px;
	border-radius:8px;
}
</style>
  
  <script>
  $(document).ready(function() {
    $( "#date_picker" ).datepicker();
  });
  function change_DateFormat(date_format) {
	  $( "#date_picker" ).datepicker( "option", "dateFormat", date_format );
  }
  </script>
  
</head>
<body> 

<div id="date_Format_Style">
<h2>
	Date Formatting with Date Picker using JavaScript
</h2>
	<div class="input-style">
		<div class="frm-label">Select Date:</div>
		<div><input type="text" id="date_picker" size="30" class="form-input-style"></div> 
	</div>
	<div class="input-style">
		<div>Formats:</div>
		<div>
			<select id="date-format" onchange="change_DateFormat(this.value);" class="form-input-style">
				<option value="mm/dd/yy">mm/dd/yy</option>
				<option value="dd/mm/yy">dd/mm/yy</option>
				<option value="yy-mm-dd">yy-mm-dd</option>
				<option value="M d, y">M d, y</option>
			</select>
		</div>
	</div>
</div>

</body>
</html>