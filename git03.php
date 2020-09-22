<?php
$result = null;
if (!empty($_POST['start'])) {
	$result = 'git practice';
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
</body>
</html>
