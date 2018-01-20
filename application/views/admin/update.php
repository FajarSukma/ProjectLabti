
      <div class="page-content">
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Data</h2>
          </div>
        </div>
        <div class="container-fluid">           
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<? echo base_url('admin_c')?>">Home</a></li>
            <li class="breadcrumb-item active">Data</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <!-- Berita -->
              
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Data berita</strong></div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                       
                        <th>Edit/Delete</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      <? foreach ($berita->result() as $key) {?>
                      <tr>
                        <th scope="row"><? echo $key->id;?></th>
                        <td><? echo $key->judul;?></td>                     
                        <td>
                            <a href="<?echo base_url('update_c/edit/'.$key->id);?>"><button class="btn btn-primary">Edit</button></a>
                            <a href="<?echo base_url('update_c/delete/'.$key->id);?>"><button class="btn btn-secondary">Delete</button></a>
                        </td>
                      </tr>
                      <?}?>
                    </tbody>
                    
                  </table>
                </div>
              </div>
              

              <!-- Stats -->
              
               
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Data Statistik</strong></div>
                  <table class="table table-responsive">
                    <thead>
                      
                      <tr>
                        <th>No</th>
                        <th>Gol</th>
                        <th>Assist</th>
                        <th>Trofi</th>
                        <th>Penghargaan</th>
                        <th>Rasio Gol</th>
                        <th>Kaki kiri</th>
                        <th>Kaki kanan</th>
                        <th>Pinalti</th>
                        <th>Pertandingan</th>
                        <th>Menang</th>
                        <th>Seri</th>
                        <th>Kalah</th>
                        <th>Edit/Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <? foreach ($stat->result() as $key) {?>
                      <tr>
                        
                        <th scope="row"><? echo $key->id;?></th>
                        <td><? echo $key->gol;?></td>
                        <td><? echo $key->assist;?></td>
                        <td><? echo $key->trofi;?></td>
                        <td><? echo $key->penghargaan;?></td>
                        <td><? echo $key->rasiogol;?></td>
                        <td><? echo $key->kakikiri;?></td>
                        <td><? echo $key->kakikanan;?></td>
                        <td><? echo $key->pinalti;?></td>
                        <td><? echo $key->pertandingan;?></td>
                        <td><? echo $key->menang;?></td>
                        <td><? echo $key->seri;?></td>
                        <td><? echo $key->kalah;?></td>
                        <td>
                            <a href="<?echo base_url('update_c/editstat/'.$key->id);?>"><button class="btn btn-primary">Edit</button></a>
                            <!-- <a href="#"><button class="btn btn-secondary">Delete</button></a> -->
                        </td>
                      </tr>
                      <?}?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
              
              
              
              
            </div>
          </div>
        </section>
