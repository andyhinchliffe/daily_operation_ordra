<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  

  <!-- WordPress Head Hook -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- wp_body_open Hook -->
  <?php wp_body_open(); ?>

  <!-- Header -->
  <header class="bg-white">
  <div class="mx-auto flex h-16 max-w-screen-xl items-center justify-between px-4 sm:px-6 lg:px-8">
    
    <!-- Logo -->
        <div class="flex items-center space-x-2"> 
            <a href="<?php echo esc_url(home_url()); ?>" class="flex items-center space-x-2 cursor-pointer">
                <?php
                if (function_exists('the_custom_logo') && has_custom_logo()) {
                    echo '<div class="w-10 h-10 rounded-full overflow-hidden shadow-lg">';
                    the_custom_logo();
                    echo '</div>';
                } else {
                    $custom_logo_url = get_theme_mod('dailyoperationdesigns_custom_logo');
                    if ($custom_logo_url) {
                        echo '<img src="' . esc_url($custom_logo_url) . '" alt="' . esc_attr__( 'Logo', 'daily_operation_designs' ) . '" class="w-10 h-10 rounded-full object-cover shadow-lg">';
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri() . '/images/placeholderSQ.jpg') . '" alt="' . esc_attr__( 'Default Logo', 'daily_operation_designs' ) . '" class="w-10 h-10 rounded-lg object-cover ">';
                    }
                }
                ?>
                <span class="text-gray-600 text-sm "><?php bloginfo('name'); ?></span>
            </a>
        </div>


<!-- Navigation Menu -->
        <nav class="relative text-white font-medium" x-data="{ open: false, showMobile: false }">

            <div class="flex items-center justify-between px-4 py-3 md:py-0">
            
                <!-- Desktop Menu -->
                <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-600" aria-label="Global">
                    <?php
                          wp_nav_menu(array(
                          'theme_location' => 'primary',
                          'container' => false,
                          'menu_class' => 'flex space-x-6',
                          'fallback_cb' => false
                          ));
                    ?>
                </nav>

                <!-- Right Side Icons -->
                <div class="flex items-center space-x-4">

                    <!-- Search Button -->
                    <button 
                        @click="open = !open" 
                        class="text-black hover:text-gray-300 transition w-8 h-8 flex items-center justify-center"
                        aria-label="<?php esc_attr_e( 'Toggle Search', 'daily_operation_designs' ); ?>"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg>
                    </button>

                    <!-- Burger Icon (Mobile Only) -->
                    <button 
                        @click="showMobile = !showMobile" 
                        class="md:hidden bg-black bg-opacity-10 p-2 rounded hover:bg-opacity-20 transition"
                        aria-label="<?php esc_attr_e( 'Toggle menu', 'daily_operation_designs' ); ?>"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                </div>
            </div>

            <!-- Mobile Fullscreen Dropdown Menu -->
            <div 
                x-show="showMobile" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-[-10%]"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-[-10%]"
                @click.outside="showMobile = false"
                class="fixed inset-0 bg-gray-900 text-gray-400 z-50 flex flex-col items-center justify-center space-y-6 text-base md:hidden"
            >

                <!-- Close Button -->
                <button 
                    @click="showMobile = false" 
                    class="absolute top-16 right-4 text-gray-400 hover:text-gray-300"
                    aria-label="<?php esc_attr_e( 'Close menu', 'daily_operation_designs' ); ?>"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke=white>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex flex-col space-y-6 items-center',
                    'fallback_cb' => false
                ));
                ?>
            </div>

            <!-- Expanding Search Form -->
            <div x-show="open" x-transition @click.outside="open = false">
                <?php get_search_form(); ?>
            </div>
        </nav>
  
</header>

  <!-- WordPress Footer Hook (place at end of body) -->
  <?php wp_footer(); ?>
</body>
</html>

