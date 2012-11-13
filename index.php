<html>
<head>
	<title></title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(function() {
			function loadResult() {

				$('#result').load('ajax.php', {
					func: $('#func').val(),
					regex: $('#regex').val(),
					text: $('#text').val()
				});
			}

			$('#regex').keyup(function() {
				loadResult();
			});
			$('#text').keyup(function() {
				loadResult();
			});
			$('#func').change(function() {
				loadResult();
			});
			$('form').submit(function() {
				loadResult();
				return false;
			});
		});
	</script>
</head>
<body>
<form>
	<select id="func">
		<option>preg_match</option>
		<option>preg_match_all</option>
		<option>preg_split</option>
	</select><br />
	<input id="regex"><br />
	<textarea id="text"></textarea><br />
	<input type="submit"><br />

	<p id="result"></p>
</form>
</body>
</html>

