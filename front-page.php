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
        <a
          href="#"
          class="inline-block rounded-md bg-gray-800 px-6 py-3 text-sm font-medium text-white shadow-sm transition hover:bg-gray-900"
        >
          Get Started
        </a>
        <a
          href="#"
          class="inline-block rounded-md border border-gray-200 px-6 py-3 text-sm font-medium text-gray-700 transition hover:bg-gray-50 hover:text-gray-900"
        >
          Learn More
        </a>
      </div>
    </div>

    <!-- Image Content -->
    <div class="mt-10 md:mt-0">
      <div class="grid gap-4">
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/image1.jpg"
          alt="Product demo or dashboard screenshot"
          class="w-full rounded-2xl object-cover "
        />
      </div>
    </div>
    
  </div>
</section>




<!-- ---------------- -->
 <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">


<section class="flex  gap-10 ">

    <article class="rounded-xl overflow-hidden bg-white shadow-sm hover:shadow-lg transition">
  
  <!-- Image -->
  <img
    src="<?php echo get_template_directory_uri(); ?>/images/placeholder2.jpg"
    alt="Modern living room setup"
    class="w-full h-56 object-cover hover:scale-105 transition"
  />

  <!-- Content -->
  <div class="p-5 sm:p-6">
    <time datetime="2022-10-10" class="block text-xs text-gray-500 mb-1">October 10, 2022</time>

    <a href="#" class="group">
      <h3 class="text-lg font-semibold text-gray-900 group-hover:underline">
        How to Position Your Furniture for Positivity
      </h3>
    </a>

    <p class="mt-3 text-sm text-gray-600 line-clamp-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
      mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
      dignissimos.
    </p>
  </div>
</article>





<!-- --------CARD  ----     -->

<article class="rounded-xl overflow-hidden bg-white shadow-sm hover:shadow-lg transition">
  
  <!-- Image -->
  <img
    src="<?php echo get_template_directory_uri(); ?>/images/placeholder2.jpg"
    alt="Modern living room setup"
    class="w-full h-56 object-cover hover:scale-105 transition"
  />

  <!-- Content -->
  <div class="p-5 sm:p-6">
    <time datetime="2022-10-10" class="block text-xs text-gray-500 mb-1">October 10, 2022</time>

    <a href="#" class="group">
      <h3 class="text-lg font-semibold text-gray-900 group-hover:underline">
        How to Position Your Furniture for Positivity
      </h3>
    </a>

    <p class="mt-3 text-sm text-gray-600 line-clamp-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
      mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
      dignissimos.
    </p>
  </div>
</article>


<article class="rounded-xl overflow-hidden bg-white shadow-sm hover:shadow-lg transition">
  
  <!-- Image -->
  <img
    src="<?php echo get_template_directory_uri(); ?>/images/placeholder2.jpg"
    alt="Modern living room setup"
    class="w-full h-56 object-cover hover:scale-105 transition"
  />

  <!-- Content -->
  <div class="p-5 sm:p-6">
    <time datetime="2022-10-10" class="block text-xs text-gray-500 mb-1">October 10, 2022</time>

    <a href="#" class="group">
      <h3 class="text-lg font-semibold text-gray-900 group-hover:underline">
        How to Position Your Furniture for Positivity
      </h3>
    </a>

    <p class="mt-3 text-sm text-gray-600 line-clamp-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem,
      mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque
      dignissimos.
    </p>
  </div>
</article>

</section>
</div>
<!-- ----------------- -->



<section class="bg-white py-16">
  <div class="container mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <!-- Text Content -->
      <div>
        <div class="max-w-xl">
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </h2>
          <p class="mt-6 text-lg text-gray-700">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur doloremque saepe
            architecto maiores repudiandae amet perferendis repellendus, reprehenderit voluptas
            sequi.
          </p>
        </div>
      </div>

      <!-- Image -->
      <div>
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg"
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