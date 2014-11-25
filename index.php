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
			loadResult();
		});
	</script>
	<style>
		* {
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			color: gray;
			font-family: sans-serif;
			font-weight: normal;
			font-size: 12px;
		}
		h1 {
			color: black;
			font-size: 14px;
		}
		form {
			border: 1px solid lightgray;
			width: 400px;
			padding: 15px;
			margin: 20px auto;
		}

		select, input, textarea, p {
			width: 100%;
			border: 1px solid lightgray;
			min-height: 17px;
			padding: 4px;
			outline: none;
		}
		form textarea {
			min-height: 51px;
		}
		form *:not(:last-child) {
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<form>
		<h1>Regexr</h1>
		<select id="func">
			<option>preg_match</option>
			<option>preg_match_all</option>
			<option>preg_split</option>
		</select>
		<input id="regex" placeholder="/.*/">
		<textarea id="text" placeholder="Lorem Ipsum"></textarea>
		<p id="result"></p>
	</form>
</body>
</html>
