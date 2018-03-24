        <div class='row'>
          <div class="col-xs-12 col-md-12">
            <div id='slider1'>
               <p><span class="label label-danger">Keyword Research Tools <span></span>.</p>
            </div>
          </div>
        </div>

          <div class="row">
            <div class="col-xs-12 col-md-12">
                <?php
                	if (isset($_GET['submit'])) {
                    $sub = $_POST['sub'];
                    $pre = $_POST['pre'];
                    $ket1 = $_POST['ket1'];
                    $ket2 = $_POST['ket2'];
                	}
                ?>
                <div class="panel panel-flat">
                <div class="panel-body">
                <form class="form-horizontal" role="search" action="resultpk.php" method="post" name=f1>
                  <div class="form-group">
                    <textarea type="text" cols='100' row='100' class="form-control" name="sub" placeholder="Key awal. Contoh:jual, harga, dll"></textarea>
                  </div>
                  <div style='clear:both;'></div><br>
                  <div class="form-group">
                    <textarea type="text" cols='100' row='100' class="form-control" name="pre" placeholder="Key Utama. Tanpa kata jual, harga, dan semacamnya"></textarea>
                  </div>
                  <div style='clear:both;'></div><br>
                  <div class="form-group">
                    <textarea type="text" cols='100' row='100' class="form-control" name="ket1" placeholder="Ekor 1. Contoh:murah, berkualitas, dll"></textarea>
                  </div>
                  <div style='clear:both;'></div><br>
                  <div class="form-group">
                    <textarea type="text" cols='100' row='100' class="form-control" name="ket2" placeholder="Ekor 2. Contoh: jakarta, bandung, dll"></textarea>
                  </div>
                  <div style='clear:both;'></div><br>
                  <button type="submit" name="submit" class="btn btn-primary"><i class=" icon-floppy-disk position-left"></i> Submit</button>
                </form>
                <div class='col-xs-12 col-md-12'>
                  <? //include "resultkey.php";?>
                </div>
              </div>
            <div id="fitur" class="col-xs-12 col-md-3" style="margin-top:-15px;"><? //include "support.php";?></div>
          </div>
        </div>
