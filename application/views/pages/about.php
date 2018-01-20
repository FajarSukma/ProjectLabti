<!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Halo</h3>
                <h1 class="display-1 display-1--light">Tentang Leo</h1>
            </div>
        </div> <!-- end section-header -->

<? foreach ($about->result() as $key) {?>

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                <? echo $key->isi;?>
                </p>
            </div>
        </div> <!-- end about-desc -->
        <? }?>

<? foreach ($stat->result() as $key) {?>
        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count"><? echo $key->gol;?></div>
                <h5>Goal</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->assist;?></div>
                <h5>Assist</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->trofi;?></div>
                <h5>Trofi</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->penghargaan;?></div>
                <h5>Penghargaan</h5> 
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->rasiogol;?></div>
                <h5>Rasio Gol</h5> 
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->kakikiri;?></div>
                <h5>Kaki Kiri</h5> 
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->kakikanan;?></div>
                <h5>Kaki Kanan</h5> 
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->pinalti;?></div>
                <h5>Pinalti</h5> 
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->pertandingan;?></div>
                <h5>Pertandingan</h5> 
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->menang;?></div>
                <h5>Menang</h5> 
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->seri;?></div>
                <h5>Seri</h5> 
            </div>
            <div class="col-block stats__col">
                <div class="stats__count"><? echo $key->kalah;?></div>
                <h5>Kalah</h5> 
            </div>

        </div> <!-- end about-stats -->
        <?}?>
        <div class="about__line"></div>

    </section> <!-- end s-about -->
