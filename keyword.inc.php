<link rel="stylesheet" href="css/codemirror.css">
<script src="js/codemirror.js"></script>
<script src="js/matchbrackets.js"></script>
<script src="js/htmlmixed.js"></script>
<script src="js/xml.js"></script>
<script src="js/javascript.js"></script>
<script src="js/css.js"></script>
<script src="js/clike.js"></script>
<script src="js/php.js"></script>
<?php
    error_reporting(0);
    $nf = "keyword.txt";
    if(isset($_POST['btnsubmit'])) {
        $keyword = $_POST['keyword'];
        if(!$fp = fopen($nf,"w")) die("Error membuka file $nf.");
        fwrite($fp,$keyword);
        fclose($fp);
        $strstatus = "Text keyword telah disimpan.";
    }
    if(!$fp = fopen($nf,"r")) {
        if(!$fp = fopen($nf,"w")) die("Error membuka file $nf.");
    }
    $fz = filesize($nf);
    if($fz > 0) $text = fread($fp,$fz);
    else $text = "<?php \$keyword = array('text keyword 1', 'text keyword2');";
    fclose($fp);
?>
<h3><strong>Keywords</strong></h3>
<?php
    if(!empty($strstatus)) {
?>
    <div class="alert alert-warning" role="alert"><?=$strstatus?></div>
<?php
    }
?>
<div class="panel panel-flat">
<div class="panel-body">
<form class="form-horizontal" method="post" action="index.php?m=<?=$m?>" name=f1>
    <div class="form-group">
      <textarea rows="5" cols="5" class="form-control" name="keyword" class="form-control" id="mstext"><?=$text?></textarea>
    </div>
    <!-- <div class="form-group">
        <label for="kategori" class="col-sm-2 control-label">Keywords</label>
        <div class="col-sm-9">
            <textarea cols=40 rows=15 name="keyword" class="form-control" id="mstext"><?=$text?></textarea>
        </div>
    </div> -->
    <button type="submit" name="btnsubmit" class="btn btn-primary"><i class=" icon-floppy-disk position-left"></i> Simpan</button>
    &nbsp;<button type=reset class="btn btn-default"><i class=" icon-sync position-left"></i> Reset</button>
</form>
<script>
var editor = CodeMirror.fromTextArea(document.getElementById("mstext"), {
  mode: "application/x-httpd-php",
  lineNumbers: true,
  lineWrapping: true
});
</script>
