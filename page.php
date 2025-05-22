<?php get_header(); ?>

<main class="bg-white py-16 flex-grow">
  <div class="mx-auto max-w-screen-md px-4 sm:px-6 lg:px-8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        

      <!-- Featured Image -->
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="mb-10">
          <img 
            src="<?php the_post_thumbnail_url('large'); ?>" 
            alt="<?php the_title_attribute(); ?>" 
            class="w-full rounded-2xl object-cover shadow-md"
          />
        </div>
      <?php endif; ?>

      

      <!-- Title -->
      <h1 class="text-4xl font-extrabold text-gray-900 mb-6">
        <?php the_title(); ?>
      </h1>

      <!-- Content -->
      <div class="prose max-w-none prose-lg prose-gray">
        <?php the_content(); ?>
      </div>

    <?php endwhile; else : ?>
      <p class="text-center text-gray-500">Sorry, no content found.</p>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
