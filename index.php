<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form action="/Chat.php" method="POST">
			<input name="first_name" type="text"><br>
			<textarea name="message"></textarea><br>
			<button>Send me</button>
		</form>
		
		<?php
			$filePath = 'SavedMessages.txt';
			$handler = fopen($filePath, 'r');
			
			while($line = fgets($handler)) {
				$decodeLine = json_decode($line, true);
		?>
			<div class="Messages">
				<div class="Name"><?=$decodeLine['first_name']; ?></div>
				<div class="Text"><?php echo $decodeLine['message']; ?></div>
				<div class="Date"><?php echo $decodeLine['date']; ?><div>
			</div>
		<?php
			}
			
			fclose($handler);
		?>
	</body>
</html>