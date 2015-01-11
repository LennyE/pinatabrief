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
	<button id="downloadLink">Ladda ner Brief</button>
		
	<form action="index.php" method="get">
		<select name="yrke" onchange="this.form.submit()">
		
	<!-- 		create an array of yrken and loop out the options instead -->
			<option value=""<?=$_GET['yrke'] == '' ? ' selected="selected"' : '';?>>Alla yrken</option>
			<option value="designer"<?=$_GET['yrke'] == 'designer' ? ' selected="selected"' : '';?>>Designer</option>
			<option value="illustrator"<?=$_GET['yrke'] == 'illustrator' ? ' selected="selected"' : '';?>>Illustratör</option>
			<option value="utvecklare"<?=$_GET['yrke'] == 'utvecklare' ? ' selected="selected"' : '';?>>Utvecklare</option>
			
		</select>
			<button href="http://index.php" class="">Ladda om sida</button>
	</form>

</span>


<div class="readable">
	<br>
	
	<div id="results">
	<?php include('data.php'); ?>
	</div>

</div>

</body>
</html>


	<!-- slumpa med knapp & klick -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript">
	        $('button.randomizerButton').click(function(){
	        	randomizerCallback();
	        });
	        
	        $(document).keypress(function(randomizerKey) {
				if (randomizerKey.which === 114) {
		        	randomizerCallback();
			    }
			});

	        var randomizerCallback = function(){
/* 	            scriptUrl = $(this).attr('data-href'); vet inte vad den gör för nytta längre... */
	            $.get('data.php?yrke='+encodeURIComponent($('[name=yrke]').val()), function(response){
					$('#results').html(response);
	            });
	        };	        
	</script>

		
	<!-- temporär nedladdningsfunktion -->
	<script type="text/javascript">
		$('#downloadLink').click(function(){
		    downloadInnerHtml(fileName, 'results','text/html');
		});
		
		
		function downloadInnerHtml(filename, elId, mimeType) {
		    var elHtml = document.getElementById(elId).innerHTML;
		    var link = document.createElement('a');
		    mimeType = mimeType || 'text/plain';
		
		    link.setAttribute('download', filename);
		    link.setAttribute('href', 'data:' + mimeType  +  ';charset=utf-8,' + encodeURIComponent(elHtml));
		    link.click(); 
		}
		
		var fileName =  'Piñatabrief.txt'; // You can use the .txt extension if you want
	</script>