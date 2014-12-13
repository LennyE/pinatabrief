<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Piñatabrief &alpha;</title>

	<!-- stilmallar --> 
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/alter_stylesheet.js"></script>
	<link href="css/style.css" rel="stylesheet" type="text/css" id="stl" />

</head>
<body>
<span style="position:fixed;">
    <button id="vaxlaBtn">Växla CSS [v]</button>
	<button data-href="data.php" class="randomizerButton">Slumpa Brief [r]</button>
	
<form action="index.php" method="get">
	<select name="yrke" onchange="this.form.submit()">
	
<!-- 		create an array of yrken and loop out the options instead -->
		<option value=""<?=$_GET['yrke'] == '' ? ' selected="selected"' : '';?>>Alla yrken</option>
		<option value="designer"<?=$_GET['yrke'] == 'designer' ? ' selected="selected"' : '';?>>Designer</option>
		<option value="illustrator"<?=$_GET['yrke'] == 'illustrator' ? ' selected="selected"' : '';?>>Illustratör</option>
		<option value="utvecklare"<?=$_GET['yrke'] == 'utvecklare' ? ' selected="selected"' : '';?>>Utvecklare</option>
		
	</select>
</form>
</span>


<div class="readable">
	<br>
	
	<div id="results">
	
	<?php include('data.php'); ?>

		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript">
		    $(document).ready(function(){
		        $('button.randomizerButton').click(function(){
		            scriptUrl = $(this).attr('data-href');
		            $.get('data.php?yrke='+encodeURIComponent($('[name=yrke]').val()), function(response){
						$('#results').html(response);
		            });
		        });
		    });
		</script>
		
		<script type="text/javascript">
			$(document).keypress(function(randomizerKey) {
				if (randomizerKey.which === 114) {
		            $.get('data.php?yrke='+encodeURIComponent($('[name=yrke]').val()), function(response){
						$('#results').html(response);
		            });
			    }
			});
		</script>

	</div>
	
</div>

</body>
</html>