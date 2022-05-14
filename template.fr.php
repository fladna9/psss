<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/custom.css" rel="stylesheet" />
    </head>

    <body>
	<div class="container">
		<h1><?= $title ?></h1> 
		<h4>Nombre de serveurs de jeux installés: <?= $arrobj->count() ?></h4>
        	<p>Attention : ce site permet juste de savoir si le serveur tourne, pas son état de mise à jour.</p>
        	<p><code>Si pas de précision, le serveur est <kbd><?= $serverFQDN ?></kbd> ou son adresse IP <kbd><?= $serverIP ?></kbd></code></p>

		<table class="table table-hover">
    			<thead>
    				<tr>
        				<th>Jeu</th>
					<th>Nom</th>
        				<th>Statut</th>
        				<th>Accès/Port</th>
        				<th>Verrou</th>
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
