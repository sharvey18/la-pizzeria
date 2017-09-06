<aside class="col col-4 sidebar">
  <!-- add widget into sidebar -->
  <?php
  if( is_active_sidebar('blog_sidebar') ):
    dynamic_sidebar( 'blog-sidebar' );
  endif;
  ?>
</aside>
