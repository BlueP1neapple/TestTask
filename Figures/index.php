

<?php
require_once 'Dmitry/Classes/SortedObject.php';
use Dmitry\Classes\SortedObject as SorObj;
include 'Dmitry/Functions/saveFile.php';

$ro = new SorObj();
$ro->sortObject();
\Dmitry\Functions\saveFile($ro->rObj());


?>



