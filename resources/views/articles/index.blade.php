<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Article List</title>
</head>
<body>
	 <h1>Article List</h1>
	 <ul>
		 <?php foreach($articles as $article): ?>
		 <li><?php echo $article['item'] ?></li>
		 <?php endforeach ?>
	 </ul>
</body>
=======
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
 <meta charset="utf-8">
 <title>Article List</title>
</head>
<body>
	 <h1>Article List</h1>
	 <ul>
		 <?php foreach($articles as $article): ?>
		 <li><?php echo $article['items'] ?></li>
		 <?php endforeach ?>
	 </ul>
</body>
>>>>>>> 64754173b969fcbdff763dc4ebb5c450af842c16
</html>