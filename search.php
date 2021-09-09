<?php
/**
 * Template name: Søk
 */

get_header(); 
?>
<section class="bodyarkiv">
    <div class="headlinearkiv"> <a href="https://itstud.hiof.no/uinv20gr2/nettsted/wordpress/torget/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/bilder/handlekurv-torget.jpg" class="torgetlogo" alt="torgetlogo" width="50" height="45" align="left">
                <?php
                    echo "<h1 id='titletorget'>".get_the_title(14)."</h1>";
                ?>
        </a> 
    </div>
	<div class="sorterannonser">
        <label for="sorterpå">Sorter på</label>
        <select id="selectsorterannonser" onchange="document.location.href = this.value">
            <option value="?orderby=date&order=asc">Nyeste først</option>
            <option value="?v_sortby=views&v_orderby=asc">Mest besøkt</option>
            <option value="?orderby=date&order=desc">Eldste først</option>
        </select>
	</div>

	<div class="mainarkiv">
    <h3 id="sokeresultat">Søkeresultater for: <?php echo "$s"; ?> </h3> </br> 
		<?php
		
			$query = new WP_Query( array( 'post_type' => 'Annonser' ) );
			echo "<div class='annonse-container'>";
			// The Loop
				if ( have_posts() ) {
				
				while ( have_posts() ) {
					the_post();

					echo '<div class="annonse-item">';
					
					if(has_post_thumbnail()) {
						?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php
						the_post_thumbnail('medium');
					} else {
						echo "Bilde kan ikke vises";
					}
					echo "<h2><a href='".get_permalink()."'>".get_the_title()."</a></h2>";
					echo '<p>'.get_field("pris").'kr / '.get_field("sted").'</p> </div>';	
				}
			} else {
				echo "<p>Prøv igjen...</p>";
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			echo "</div>";
		?>
	</div>

	<div class="asidearkiv">
		<?php 
		wp_list_categories($kategoriertorget); 
		wp_dropdown_categories($omradertorget);?>
		
		<script type="text/javascript">
			var dropdown = document.getElementById("cat");
			function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
					location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
				}
			}
			dropdown.onchange = onCatChange;
			-->
		</script>
	</div>
</section>

<?php get_footer(); ?>