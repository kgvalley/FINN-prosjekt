<?php
get_header(); ?>

<div class="wrapperannonse">
<section class="bodyannonse">

            <?php
            //The loop
            if(have_posts()) {
                while(have_posts()) {
                    the_post();

                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }

                    the_title('<h1>', '</h1>');

                    echo "<p>".get_field('pris')." kr <br />".get_field('sted')."</p>";
                    //echo "<p>Ny eller brukt: ".the_field('ny_eller_brukt')."</p>";
                    echo "<p>".the_field('ny_eller_brukt')."</p>";
                    


                    the_content();
                }
            } else {
                echo "<p>Det finnes ingen annonse</p>";
            }
            ?>
</section>

<section class="sidemeny">
    <a class="tilbakeknapp" href="https://itstud.hiof.no/uinv20gr2/nettsted/wordpress/torget/">Tilbake til Torget</a>
    <p id="favoritt">&#9825; Legg til favoritt</p>
    <div id="brukerid">

            <p id="navnbruker">Ole Olsen</p>
            <p>&#9989; Verifisert</p>
            <p id="finnsiden">På FINN siden 2013</p>
            
    </div>

    <div id="vurdering">
            <p>8,8 Veldig bra</p>
            <p>&#128172; Veldig bra kommunikasjon<br>&#128179; Problemfri betaling<br>&#128591; Problemfri overlevering</p>
            

    </div>

    <a href="https://itstud.hiof.no/uinv20gr2/nettsted/wordpress/send-melding/" id="sendmelding">Send melding</a><br><br>
</section>

</div>

<?php get_footer(); ?>

