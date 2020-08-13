<?php /* Template Name: Events*/ get_header(); ?>

  <div class="page-img-header d-flex" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/wine1'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <div class="container d-flex flex-column justify-content-center">
    <div class="white-content-box">
      
        <h1>Promo</h1>
        <p>Info about promo</p>
        <button>Press</button>
      
      </div>
    </div>
  </div>



<!--<section class="page-img-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/wine1'); background-repeat: no-repeat; background-position: center; background-size: cover;">
<div class="row mask rgba-black-light d-flex" style="height: 100%">
<div class="container" 
 <h1>Hello</h1>
</div>
</div>

</section>-->

<main id="primary" class="site-main container">

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!--Grid row-->
<div class="row wow fadeIn">
<?php
// The Query
$the_query = new WP_Query( 'cat=1&posts_per_page=24' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


    <!--Grid column-->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex flex-column">
        <!--Featured image-->
        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4 ">
            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
            <a href="<?php echo get_permalink() ?>">
                <div class="mask"></div>
            </a>
        </div>

     
        <h4 class="mb-3 font-weight-bold dark-grey-text">
            <strong><?php the_title(); ?></strong>
        </h4>
       
       
        <p class="grey-text"><?php the_excerpt(); ?></p>
        <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-white btn-rounded"><i class="fa fa-info-circle aria-hidden="true"></i> More Information </button></a>

    </div>
    <!--Grid column-->

  <?php
  
  $counter++;
  } // end while
  } // end if
  ?>
  </div>
  <!--Grid row-->
</main>
<?php get_footer(); ?>