<!-- Form -->

<?
$id=""; $judul=""; $isi="";

if($pil =='edit'){
  foreach ($berita->result() as $key) {
    $pil='edit';
    $id =$key->id;
    $judul=$key->judul;
    $isi=$key->isi;
  }
}  
?>
      <div class="page-content form-page">
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Berita</h2>
          </div>
        </div>
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<? echo base_url('admin_c');?>">Home</a></li>
            <li class="breadcrumb-item active">Tambah Berita</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Tambah  Berita</strong></div>
                  <div class="block-body">
                    
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>berita_c/simpan">

                      <div class="form-group row">
                        <input type="hidden" name="pil" value="<? echo $pil;?>" class="form-control"/>
                        <input type="hidden" name="id" value="<? echo $id;?>" class="form-control"/>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Judul</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="judul" value="<? echo $judul;?>" />
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Isi Berita</label>
                        <div class="col-sm-9">
                          <textarea type="text" class="form-control" rows="25" name="isi"> <? echo $isi;?> </textarea>
                        </div>
                      </div>
                      
                      <div class="line"></div>
                    
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <a href="<?php echo base_url();?>form_c" class="btn btn-secondary">Batal</a>                          
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <script>
      CKEDITOR.replace('isi');
    </script>
        