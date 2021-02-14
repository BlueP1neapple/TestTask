

<?php
require_once 'Dmitry/Classes/SortedObject.php';
require_once 'Dmitry/Classes/Save.php';
use Dmitry\Classes\SortedObject as SorObj;
use Dmitry\Classes\Save as SaveF;

if(isset($_POST['save']))
{
    $sf = new SaveF();
    $sf->saveFile();
}
$ro = new SorObj();
$ro->sortObject();

?>



