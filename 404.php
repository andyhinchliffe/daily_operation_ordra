<?php get_header(); ?>

<main class="bg-white py-16 flex-grow">
  <div class="mx-auto max-w-screen-md px-4 sm:px-6 lg:px-8 text-center">

    <h1 class="text-6xl font-extrabold text-gray-900 mb-6">404</h1>
    <p class="text-xl text-gray-600 mb-8">Oops! The page you're looking for doesn't exist.</p>

    <a href="<?php echo esc_url(home_url('/')); ?>" 
       class="inline-block px-6 py-3 bg-gray-900 text-white rounded-2xl shadow-md hover:bg-gray-700 transition">
      Go back home
    </a>

  </div>
</main>

<?php get_footer(); ?>
