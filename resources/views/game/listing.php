<html>
<head>
	<title>Games | Evx</title>
</head>
<body>

	<?php if(empty($games) === false) { ?>
		<ul>
			<?php foreach($games as $game) { ?>
				<li><a href="<?php echo route('game.index', ['id' => $game->getId()]); ?>"><?php echo $game->getName(); ?></a></li>
			<?php } ?>
		</ul>
	<?php } ?>

</body>
</html>