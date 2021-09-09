<?php

get_header();
?>
<section class="bodyarkiv">
    <div class="headlinearkiv"> <a href="https://itstud.hiof.no/uinv20gr2/nettsted/wordpress/torget/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/bilder/handlekurv-torget.jpg" alt="torgetlogo" class="torgetlogo" width="50" height="45" align="left">
                <?php
                    echo "<h1 id='titlearkiv'>".get_the_title(14)."</h1>";
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

    <div class="asidearkiv">
        <?php
        $current_child = $wp_query->get_queried_object();
        $current_parent = $current_child->parent;

        if($current_parent == 8) {
            wp_list_categories($kategori1);
        } else if($current_parent == 9) {
            wp_list_categories($kategori2); 
        } else if($current_parent == 10) {
            wp_list_categories($kategori3);
        } else if($current_parent == 11) {
            wp_list_categories($kategori4);
        } else if($current_parent == 12) {
            wp_list_categories($kategori5);
        } else if($current_parent == 13) {
            wp_list_categories($kategori6);
        } else if($current_parent == 14) {
            wp_list_categories($kategori7);
        } else if($current_parent == 15) {
            wp_list_categories($kategori8);
        } else if($current_parent == 16) {
            wp_list_categories($kategori9);
        } else if($current_parent == 17) {
            wp_list_categories($kategori10);
        } else if($current_parent == 18) {
            wp_list_categories($kategori11);
        } else if($current_parent == 132) {
            wp_list_categories($kategoriertorget);
        };

        wp_dropdown_categories($omradertorget);
        ?>

        <script type="text/javascript">
		var dropdown = document.getElementById("cat");
		function onCatChange() {
			if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
				location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
			}
		}
		dropdown.onchange = onCatChange;
	    </script>
    </div>

    <div class="mainarkiv">
    <?php 
        echo "<div class='annonse-container'>";
    
        if ($current_parent) {
            $subcategories = get_categories($current_child);  
            foreach  ($subcategories as $category) {
                foreach (get_posts('cat='.$category->term_id) as $post) {

                echo '<div class="annonse-item">';
                setup_postdata( $post ); 

                    if(has_post_thumbnail()) {
                        ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php
                        the_post_thumbnail('medium');
                    } else {
                        echo "Bilde kan ikke vises";
                    }
                    echo "<h2><a href='".get_permalink($post->ID)."'>".get_the_title()."</a></h2>";
                    echo '<p>'.get_field("pris").'kr / '.get_field("sted").'</p> </div>';  
                }
            } 
        };
        echo "</div>";
    ?>
    </div>
</section>

<?php
get_footer();

?>