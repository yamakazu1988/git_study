<?php
$result = null;
if (!empty($_POST['start'])) {
	$result = 'git test';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>git practice</title>
</head>
<body>
<?php if ($result): ?>
<?= $result; ?>
<?php endif; ?>
<form action="" method="post">
<input type="submit" value="送信">
<input type="hidden" name="start" value="start">
</form>
</body>
</html>
