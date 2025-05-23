<?php get_header(); ?>


<body>
    



<section class="bg-white lg:grid lg:h-screen lg:place-items-center">
  <div class="mx-auto grid max-w-screen-xl items-center gap-12 px-4 py-16 sm:px-6 sm:py-24 md:grid-cols-2 lg:px-8 lg:py-32">
    
    <!-- Text Content -->
    <div class="text-left">
      <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">
        <?php bloginfo('name'); ?>
      </h1>

      <p class="mt-6 text-base text-gray-700 sm:text-lg">
        <?php bloginfo('description'); ?>
      </p>

      <div class="mt-6 flex flex-wrap gap-4">
        <style>
                    html {
                    scroll-behavior: smooth;
                    }
            </style>
        <a
          href="#explore"
          class="inline-block rounded-md bg-gray-800 px-6 py-3 text-sm font-medium text-white shadow-sm transition hover:bg-gray-900"
        >
          Latest Information
        </a>

        <?php 
            $button_url = get_theme_mod( 'front_page_button_url', get_permalink( get_page_by_path('about') ) );
        ?>
        <a
          href="<?php echo esc_url( $button_url ); ?>"
          class="inline-block rounded-md border border-gray-200 px-6 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-50 hover:text-gray-900"
        >
          Learn More
        </a>
      </div>
    </div>

    <!-- Image Content -->
<?php
  $image_choice = get_theme_mod( 'front_page_image_choice', 'image1.webp' );
  $image_path = esc_url( get_template_directory_uri() . '/images/' . $image_choice );
?>
<div class="mt-10 md:mt-0">
  <div class="grid gap-4">
    <img
      src="<?php echo $image_path; ?>"
      alt="Product demo or dashboard screenshot"
      class="w-full rounded-2xl object-cover"
    />
  </div>
</div>

</section>






<!-- THE LOOP ---------------- -->
<div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
  <section id="explore" class="flex flex-wrap gap-6 justify-center sm:justify-between">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="w-80 rounded-xl overflow-hidden bg-white shadow-sm hover:shadow-lg transition">
        
        <!-- Featured Image -->
        <?php if ( has_post_thumbnail() ) : ?>
          <img
            src="<?php the_post_thumbnail_url('large'); ?>"
            alt="<?php the_title_attribute(); ?>"
            class="w-full h-56 object-cover hover:scale-105 transition"
          />
        <?php else : ?>
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/placeholder2.webp"
            alt="Placeholder image"
            class="w-full h-56 object-cover hover:scale-105 transition"
          />
        <?php endif; ?>

        <!-- Content -->
        <div class="p-5 sm:p-6">
          <time datetime="<?php echo get_the_date('c'); ?>" class="block text-xs text-gray-500 mb-1">
            <?php echo get_the_date(); ?>
          </time>

          <a href="<?php the_permalink(); ?>" class="group">
            <h3 class="text-lg font-semibold text-gray-900 group-hover:underline">
              <?php the_title(); ?>
            </h3>
          </a>

          <p class="mt-3 text-sm text-gray-600 line-clamp-3">
            <?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?>
          </p>
        </div>
      </article>
    <?php endwhile; else : ?>
      <p class="text-center w-full text-gray-500">No posts found.</p>
    <?php endif; ?>

  </section>
</div>
<!-- ---------------- -->




<section class="bg-white py-16">
  <div class="container mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <!-- Text Content -->
      <div>
        <div class="max-w-xl">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            <?php echo esc_html( get_theme_mod( 'front_page_title', 'Edit this title in the Customizer.' ) ); ?>
          </h2>
          <p class="mt-6 text-lg text-gray-700">
            <?php echo esc_html( get_theme_mod( 'front_page_info_text', 'Edit this text in the Customizer along with uploading a new image for this section.' ) ); ?>
          </p>
        </div>
      </div>

      <!-- Image -->
      <div>
        <img
          src="<?php echo esc_url( get_theme_mod( 'front_page_image', get_template_directory_uri() . '/images/placeholder.webp' ) ); ?>"
          alt="Decorative nature scene"
          class="w-full rounded-2xl shadow-lg"
        />
      </div>
    </div>
  </div>
</section> 





  

 

</body>

<?php get_footer(); ?>
</html>