 <?
$id=""; $gol=""; $assist=""; $trofi=""; $penghargaan=""; $rasiogol=""; $kakikiri=""; $kakikanan=""; $pinalti=""; $pertandingan=""; $menang=""; $seri=""; $kalah="";

if($pil =='edit'){
  foreach ($stat->result() as $key) {
    $pil='edit';
    $id =$key->id;
    $gol=$key->gol;
    $assist=$key->assist;
    $trofi =$key->trofi;
    $penghargaan =$key->penghargaan;
    $rasiogol =$key->rasiogol;
    $kakikiri =$key->kakikiri;
    $kakikanan =$key->kakikanan;
    $pinalti =$key->pinalti;
    $pertandingan =$key->pertandingan;
    $menang =$key->menang;
    $seri =$key->seri;
    $kalah =$key->kalah;
  }
}  
?>


 <div class="page-content form-page">
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Statistik</h2>
          </div>
        </div>
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<? echo base_url('admin_c');?>">Home</a></li>
            <li class="breadcrumb-item active">Update Statistik</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Update Statistik</strong></div>
                  <div class="block-body">
                    
                    <form class="form-horizontal" method="post" action="<? echo base_url('update_c/updatestat');?>">

                      <div class="form-group row">
                        <input type="hidden" name="pil"  class="form-control" value="<? echo $pil;?>" />
                        <input type="hidden" name="id" class="form-control" value="<? echo $id;?>"/>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Gol</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="gol" value="<? echo $gol;?>" />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Assist</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="assist" value="<? echo $assist;?>" />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Trofi</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="trofi" value="<? echo $trofi;?>"  />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Penghargaan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="penghargaan" value="<? echo $penghargaan;?>" />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Rasio Gol</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="rasiogol" value="<? echo $rasiogol;?>" />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Kaki Kiri</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="kakikiri" value="<? echo $kakikiri;?>" />
                        </div> 
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Kaki Kanan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="kakikanan" value="<? echo $kakikanan;?>" />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Pinalti</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="pinalti" value="<? echo $pinalti;?>"  />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Pertandingan</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="pertandingan" value="<? echo $pertandingan;?>"  />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Menang</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="menang" value="<? echo $menang;?>" />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Seri</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="seri" value="<? echo $seri;?>" />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Kalah</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="kalah" value="<? echo $kalah;?>" />
                        </div>
                      </div>
                     
                      <div class="line"></div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="<?php echo base_url();?>formstat_c" class="btn btn-secondary">Batal</a>                          
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        