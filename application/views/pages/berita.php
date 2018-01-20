<!--services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Update Berita</h3>
                <h1 class="display-2">Informasi Terkini Tentang Messi</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">


            <? foreach ($berita->result() as $key) {?>
            
            <div class="col-block service-item" data-aos="fade-up">
                
                <div class="service-text">
                    <h3 class="h2"><? echo $key->judul;?></h3>
                    <p>

                        <?
                        $lengkap = $key->isi;
                        $potong = substr($lengkap, 0, 300);
                        echo $potong.'.....';

                        ?>
                    </p>
                    <a href="<? echo base_url('berita_c/selengkapnya/'.$key->id);?>"><button class="btn--stroke">Selengkapnya</button></a>

                </div>
            </div>
            <?}?>
         
        </div> <!-- end services-list -->

    </section> <!-- end s-services