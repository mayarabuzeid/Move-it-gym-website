<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<?php

$user = auth()->user();

  ?>

print($user->id);

print($user->name);

print($user->email);?>
</body>
</html>

