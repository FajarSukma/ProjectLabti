    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

 <? foreach ($berita->result() as $key) {?>
        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Berita</h3>
                <h1 class="display-2 display-2--light"><? echo $key->judul;?></h1>
            </div>
        </div>
        <div class="row contact-content detail-margin" data-aos="fade-up">
          
            

              <!-- Isi berita -->
             
              <? echo $key->isi;?>

                  

                
               
             <!-- end contact-secondary -->

        </div> <!-- end contact-content -->
<?}?>
    </section> <!-- end s-contact -->
