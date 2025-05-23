<?php
if ( post_password_required() ) {
  return;
}
?>

<div id="comments" class="bg-white max-w-screen-md mx-auto px-4 sm:px-6 lg:px-8 py-10">

  <?php if ( have_comments() ) : ?>
    <h2 class="text-2xl font-semibold text-gray-900 mb-6">
      <?php
        $comments_number = get_comments_number();
        if ( $comments_number === 1 ) {
          printf( _x( 'One Comment', 'comments title', 'daily_operation_ordra' ) );
        } else {
          printf(
            /* translators: %s: number of comments */
            _nx( '%s Comment', '%s Comments', $comments_number, 'comments title', 'daily_operation_ordra' ),
            number_format_i18n( $comments_number )
          );
        }
      ?>
    </h2>

    <ol class="list-disc list-inside space-y-6 text-gray-700">
      <?php
        wp_list_comments( array(
          'style'       => 'ol',
          'short_ping'  => true,
          'avatar_size' => 48,
          'callback'    => null, // Use default markup
        ) );
      ?>
    </ol>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
      <nav class="flex justify-between mt-8 text-sm text-gray-600" aria-label="Comments navigation">
        <div>
          <?php previous_comments_link( '&larr; Older Comments' ); ?>
        </div>
        <div>
          <?php next_comments_link( 'Newer Comments &rarr;' ); ?>
        </div>
      </nav>
    <?php endif; ?>

  <?php endif; ?>

  <?php
  // If comments are closed and there are comments, show a note.
  if ( ! comments_open() && have_comments() ) :
  ?>
    <p class="text-center text-gray-500 mt-6">Comments are closed.</p>
  <?php endif; ?>

  <?php
    comment_form(array(
      'class_form' => 'mt-10 space-y-6',
      'comment_field' => '<p class="mb-4"><label for="comment" class="block text-gray-700 font-medium mb-2">Comment</label><textarea id="comment" name="comment" rows="5" class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-gray-400" required></textarea></p>',
      'fields' => array(
        'author' => '<p><label for="author" class="block text-gray-700 font-medium mb-2">Name</label><input id="author" name="author" type="text" class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-gray-400" required></p>',
        'email'  => '<p><label for="email" class="block text-gray-700 font-medium mb-2">Email</label><input id="email" name="email" type="email" class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-gray-400" required></p>',
        'url'    => '<p><label for="url" class="block text-gray-700 font-medium mb-2">Website</label><input id="url" name="url" type="url" class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-gray-400"></p>',
      ),
      'title_reply' => '<h3 class="text-xl font-semibold text-gray-900 mb-4">Leave a Comment</h3>',
      'label_submit' => 'Post Comment',
      'class_submit' => 'bg-gray-900 text-white px-6 py-3 rounded-2xl shadow-md hover:bg-gray-700 transition',
    ));
  ?>

</div>
