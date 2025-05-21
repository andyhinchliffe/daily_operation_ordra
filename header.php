<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CSS -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/src/output.css" rel="stylesheet">

  <!-- WordPress Head Hook -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- wp_body_open Hook -->
  <?php wp_body_open(); ?>

  <!-- Header -->
  <header class="bg-white">
  <div class="mx-auto flex h-16 max-w-screen-xl items-center justify-between px-4 sm:px-6 lg:px-8">
    
    <!-- Logo + Title -->
<a href="#" class="flex items-center space-x-3">
  <img src="<?php echo get_template_directory_uri(); ?>/images/placeholderSQ.jpg" alt="Logo" class="h-10 w-auto rounded-lg" />
  <span class="text-sm font-semibold text-gray-600"><?php bloginfo('name'); ?></span>
</a>




    <!-- Desktop Navigation (Right Aligned) -->
    <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-600" aria-label="Global">
      <a href="#" class="hover:text-gray-900 transition">About</a>
      <a href="#" class="hover:text-gray-900 transition">Careers</a>
      <a href="#" class="hover:text-gray-900 transition">History</a>
      <a href="#" class="hover:text-gray-900 transition">Services</a>
      <a href="#" class="hover:text-gray-900 transition">Projects</a>
      <a href="#" class="hover:text-gray-900 transition">Blog</a>
    </nav>

    <!-- Mobile Menu Button -->
    <button type="button" class="md:hidden rounded-md bg-gray-100 p-2.5 text-gray-600 hover:text-gray-800 transition">
      <span class="sr-only">Toggle menu</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>

  </div>
</header>

  <!-- WordPress Footer Hook (place at end of body) -->
  <?php wp_footer(); ?>
</body>
</html>
