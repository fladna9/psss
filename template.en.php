<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/custom.css" rel="stylesheet" />
    </head>

    <body>
	<div class="container">
		<h1><?= $title ?></h1> 
		<h4>Game server currently installed: <?= $arrobj->count() ?></h4>
        	<p>Be aware: this website only informs you about the availability of a game server, not (yet) if it is up to date.</p>
        	<p><code>If not precised otherwise, the server is <kbd><?= $serverFQDN ?></kbd> or IP address <kbd><?= $serverIP ?></kbd></code></p>

		<table class="table table-hover">
    			<thead>
    				<tr>
        				<th>Game</th>
					<th>Nom</th>
        				<th>Name</th>
        				<th>Access/Port</th>
        				<th>Lock</th>
    				</tr>
    			</thead>
    			<tbody>
			<?= $content ?>
			</tbody>
		</table>
	</div>
	<div class="footer container">
		<p style="text-align: center;"><a href="https://github.com/fladna9/psss">PHPSimpleServerStatus aka PSSS</a> - (c) fladnaG.net - Apache 2.0 License</p>
	</div>
    </body>
</html>
