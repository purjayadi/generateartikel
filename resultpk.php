<?
    $sub = $_POST['sub'];
    $pre = $_POST['pre'];
    $ket1 = $_POST['ket1'];
    $ket2 = $_POST['ket2'];
?>
<?
$longtail = explode(", ", $sub);
$bid = count($longtail);
#print_r($longtail);
?>
<?
$longtail1 = explode(", ", $pre);
$bid1 = count($longtail1);
  //print_r($longtail);
?>
<?
$longtail2 = explode(", ", $ket1);
$bid2 = count($longtail2);
  //print_r($longtail);
?>
<?
$longtail3 = explode(", ", $ket2);
$bid3 = count($longtail3);
  //print_r($longtail);
?>
<textarea rows="150000" cols="500">

<?
for ($j=0;$j<=$bid-1;$j++) {
for ($j1=0;$j1<=$bid1-1;$j1++) {
for ($j2=0;$j2<=$bid2-1;$j2++) {
for ($j3=0;$j3<=$bid3-1;$j3++) {
?>

'<? echo $longtail[$j]; ?> <? echo $longtail1[$j1]; ?> <? echo $longtail2[$j2]; ?> <? echo $longtail3[$j3]; ?>', 

 <? } } } } ?>
</textarea>
