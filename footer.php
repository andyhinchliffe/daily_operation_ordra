<footer class="bg-gray-900 text-gray-400">
  <div class="max-w-screen-xl mx-auto px-4 py-10 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
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
                <span class="text-gray-400 text-sm "><?php bloginfo('name'); ?></span>
            </a>
        </div>

      <!-- Footer Menu -->
        <div class="mt-3 space-x-6">
            <?php 
                if (has_nav_menu('footer')) :
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'flex justify-center space-x-6 text-sm ',
                        'link_class' => 'text-sm hover:text-gray-600 transition-colors'
                    ));
                else :
                    echo '<a href="#" class="text-sm hover:text-gray-600 transition-colors">' . esc_html__( 'Add a Footer menu in the Appearance section', 'daily_operation_designs' ) . '</a>';
                endif;
            ?>
        </div>
      

    <!-- Copyright Notice -->
        <div class="mt-4 text-xs text-gray-400">
            <p class="text-center text-xs text-gray-400">
                &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e( 'All rights reserved.', 'daily_operation_designs' ); ?>
            </p>
            <?php
            printf(
                __('Theme by <a href="%s" target="_blank" class="text-center text-xs text-gray-400 hover:underline">Daily Operation Designs</a>', 'daily_operation_designs'),
                esc_url('https://designs.dailyoperation.uk')
            );

            printf(
                __(' Licensed under <a href="%s" target="_blank" class="text-center text-xs text-gray-400   hover:underline">GPLv2</a>', 'daily_operation_designs'),
                esc_url('https://www.gnu.org/licenses/gpl-2.0.html')
            );
            ?>
        </div>
    </div>

    
  </div>
</footer>