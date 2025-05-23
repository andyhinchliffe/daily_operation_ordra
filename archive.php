<?php get_header(); ?>


<body>
    <main class="bg-white py-16 flex-grow">
    










<!-- THE LOOP ---------------- -->
<div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold text-gray-900 mb-6">
        <?php the_archive_title(); ?>
      </h1>
  <section class="flex flex-wrap gap-6 justify-center sm:justify-between">

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
            src='<?php echo esc_url( get_template_directory_uri() . "/images/placeholder2.webp" ); ?>'
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









  

 
    </main>
</body>

<?php get_footer(); ?>
</html>