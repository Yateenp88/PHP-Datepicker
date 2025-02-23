<html>
<head>
  <title>Date Formatting with Date Picker using JavaScript</title>
  
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script>

 
  
  <script>
  $(document).ready(function() {
    $( "#date_picker" ).datepicker(
	{
	changeMonth: true, 
    changeYear: true, 
	dateFormat: "yy-mm-dd",
    yearRange: "-90:+00"
	}
	);
	
  });
  function change_DateFormat(date_format) {
	  $( "#date_picker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
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