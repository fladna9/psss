<?php
require('config.php');

define("UNKNOWN", 0);
define("RUNNING", 1);
define("NOTTODATE", 2);
define("STOPPED", 3);

ob_start();

$arrobj = new ArrayObject($gamegrep);
$it = $arrobj->getIterator();

while ($it->valid())
{

	if($it->current() == NULL) { 
	// If no check defined, put unknown
		$status = UNKNOWN;
		$rowclass = 'warning';
		$imgstatus = '<img width="40" height="40" src="imgs/unknown.png" alt="Inconnu" />';
	} else if ( $it->current() != EXTERNAL ) { 
	// Else If search by process name
		$search = shell_exec('ps -ax | grep "' . $it->current() . '"');
		$linecount = substr_count($search, "\n");
		$status = STOPPED;
		$rowclass = 'danger';
		$imgstatus = '<img width="40" height="40" src="imgs/ko.png" alt="KO" style="filter: background-color:red;" />';
		if($linecount > 2) { 
			$status = RUNNING;
			$imgstatus = '<img width="40" height="40" src="imgs/ok.png" alt="OK" />';
			$rowclass = 'success';
		}
	} else {
	// Else (external grep check)
		if($gameexternalcheckcommand[$it->key()] == NULL) {
		// If no check given, status is UNKNOWN
			$status = UNKNOWN;
			$rowclass = 'warning';
			$imgstatus = '<img width="40" height="40" src="imgs/unknown.png" alt="?" />';
		} else {
			$search = shell_exec($gameexternalcheckcommand[$it->key()]);
			$linecount = substr_count($search, "\n")+2;
			$status = STOPPED;
			$rowclass = 'danger';
			$imgstatus = '<img width="40" height="40" src="imgs/ko.png" alt="KO" style="filter: background-color:red;" />';
			if($linecount > 2) {
				$status = RUNNING;
				$imgstatus = '<img width="40" height="40" src="imgs/ok.png" alt="OK" />';
				$rowclass = 'success';
			}
		}
	}
?>

	<tr class="<?= $rowclass ?> align-middle">
		<td>
			<img width="230" height="107" src="<?= $gameimg[$it->key()] ?>" alt="<?= $gamename[$it->key()] ?>" \>
		</td>
		<td>
			<p><?= $gamename[$it->key()] ?></p>
		</td>
		<td>
			<?= $imgstatus ?>
		</td>
		<td>
			<?= $gameaccess[$it->key()] ?>
		</t/d>
		<td>
			<?= $gamepasswd[$it->key()] ?>
		</td>
	</tr>


<?php
	$it->next();
}

// Fill up the template
$content = ob_get_clean();
require('template.fr.php');

?>
