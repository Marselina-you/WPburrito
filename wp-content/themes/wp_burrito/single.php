<?php
get_header(); 

 $loop = new WP_Query( array(
  'post_type' => 'product',
  'posts_per_page' => get_field('products_per_page'),
  'taxonomy'   => 'product_cat',
  //'product_cat' => 'appetizers',
  'orderby' => 'menu_order',
  'order' => 'ASC',
  )); 
  
  while ( $loop->have_posts() ): $loop->the_post(); ?>
       <div class="menu__content">
       <?php global $post;
  
  $category = get_the_terms( $post->ID, 'product_cat' );
  $cat_link = get_category_link($category[0]);
  
  //$nterms = get_the_terms( $post->ID, 'product_tag'  );
  //echo $category[0]->name;
  $links = get_the_terms( get_the_ID(), 'product_cat' );
  
  //echo get_term_link( $terms[0] );
  
  foreach ($category  as $term  ) {
  
  $product_cat_id = $term->term_id;
  
  $product_cat_name = $term->name;
  
  
  break;
  
  }
  
  
  ?>
  <div class="menu-content-text">
        <a href="<?php echo $cat_link; ?>"><?php  echo $product_cat_name; ?><?php  echo $product_cat_id; ?></a>
      
        <h3 class="menu-content-text__title"><span>
        <a href="<?php the_permalink(); ?>">
        
        <?php the_title(); ?></a></div>
 <?php endwhile; wp_reset_postdata(); ?>
		  