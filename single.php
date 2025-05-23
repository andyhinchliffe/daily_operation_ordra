<?php get_header(); ?>

<main class="bg-white py-16 flex-grow">
  <div class="mx-auto max-w-screen-md px-4 sm:px-6 lg:px-8">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- Begin Post Wrapper with post_class -->
      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

        <!-- Post Meta -->
        <div class="mb-6 text-sm text-gray-500">
          <time datetime="<?php echo get_the_date('c'); ?>">
            <?php echo get_the_date(); ?>
          </time>
          <span class="mx-2">·</span>
          <span><?php the_author(); ?></span>
        </div>

        <!-- Title -->
        <h1 class="text-4xl font-extrabold text-gray-900 mb-6">
          <?php the_title(); ?>
        </h1>

        <!-- Content -->
        <div class="prose max-w-none prose-lg prose-gray">
          <?php the_content(); ?>

          <?php
          wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'daily_operation_ordra'),
            'after'  => '</div>',
          ));
          ?>
        </div>

      </div> <!-- End Post Wrapper -->

      <?php
      // Display post tags
      if ( has_tag() ) {
          echo '<div class="post-tags mb-6 text-sm text-gray-600">';
          echo '<strong>' . __('Tags:', 'daily_operation_ordra') . '</strong> ';
          the_tags('', ', ', '');
          echo '</div>';
      }
      ?>

      <?php comments_template(); ?>

    <?php endwhile; else : ?>
      <p class="text-center text-gray-500">Sorry, no content found.</p>
    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
