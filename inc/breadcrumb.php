<?php
// breadcrumb
function the_breadcrumb()
{
  $showOnHome       = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter        = '&gt;'; // delimiter between crumbs
  $fontawesome_post = new WP_Query(
    array(
      'posts_per_page' => 1,
      'post_status'    => 'publish',
      'orderby'        => 'date',
      'order'          => 'DESC',
      'meta_query'     => array(
        array(
          'key'     => 'fa-home',
          'value'   => '',
          'compare' => '!=',
        ),
      ),
    )
  );
  $fontawesome_custom = array();
  if ($fontawesome_post->have_posts()) :
    while ($fontawesome_post->have_posts()) :
      $fontawesome_post->the_post();
      $fontawesome_custom = get_post_custom();
    endwhile;
  endif;
  wp_reset_postdata();
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before      = '<li><p class="current">'; // tag before the current crumb
  $after       = '</p></li>'; // tag after the current crumb

  global $post;
  $homeLink = get_bloginfo('url');

  if (is_home() || is_front_page()) :
    if ($showOnHome == 1) :
      echo '<div id="breadcrumb" class="breadcrumb"><div class="m-width900"><ul class="crumb-ls cFix"><li><a href="' . $homeLink . '">TOP</a></li></ul></div></div>';
    endif;
  else :
    echo '<div id="breadcrumb" class="breadcrumb"><div class="m-width900"><ul class="crumb-ls cFix"><li><a href="' . $homeLink . '">TOP</a>';

    if (is_category()) :
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) :
        echo get_category_parents($thisCat->parent, true, ' ');
      endif;
      echo $before . single_cat_title('', false) . $after;

    elseif (is_search()) :
      echo $before . '「' . get_search_query() . '」で検索した結果' . $after;

    elseif (is_day()) :
      echo '<a href="' . get_year_link(get_the_time('Y 1')) . '">' . get_the_time('Y') . '年</a> ';
      echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ';
      echo $before . get_the_time('j') . '日' . $after;

    elseif (is_month()) :
      echo '<a href="' . get_year_link(get_the_time('Y 1')) . '">' . get_the_time('Y') . '年</a> ';
      echo $before . get_the_time('F') . $after;

    elseif (is_year()) :
      echo $before . get_the_time('Y') . '年' . $after;

    elseif (is_single() && !is_attachment()) :
      if (get_post_type() != 'post') :
        $post_type = get_post_type_object(get_post_type());
        $post_type_name = get_post_type();
        $slug      = $post_type->rewrite;
        echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li>';
        if ($showCurrent == 1) :
          echo ' ' . $before . get_the_title() . $after;
        endif;
      else :
        $cat  = get_the_category();
        $cat  = $cat[0];
        $cats = get_category_parents($cat, true, ' ');
        if ($showCurrent == 0) :
          $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        endif;
        echo $cats;
        if ($showCurrent == 1) :
          echo $before . get_the_title() . $after;
        endif;
      endif;

    elseif (is_attachment()) :
      $parent = get_post($post->post_parent);
      $cat    = get_the_category($parent->ID);
      $cat    = $cat[0];
      echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
      if ($showCurrent == 1) :
        echo ' ' . $before . get_the_title() . $after;
      endif;

    elseif (is_page() && !$post->post_parent) :
      if ($showCurrent == 1) :
        echo $before . get_the_title() . $after;
      endif;

    elseif (is_page() && $post->post_parent) :
      $parent_id   = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) :
        $page          = get_page($parent_id);
        $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id     = $page->post_parent;
      endwhile;
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) :
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs) - 1) :
          echo ' ';
        endif;

      endfor;
      if ($showCurrent == 1) :
        echo ' ' . $before . get_the_title() . $after;
      endif;

    elseif (is_tag()) :
      echo $before . '「' . single_tag_title('', false) . '」タグのついた記事' . $after;

    elseif (is_author()) :
      global $author;
      $userdata = get_userdata($author);
      echo $before . '「' . $userdata->display_name . '」による記事' . $after;

    elseif (is_404()) :
      echo $before . '404エラー' . $after;
    endif;

    if (get_query_var('paged')) :
      if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) :
        echo ' (';
      endif;

      echo get_query_var('paged') . 'ページ目';
      if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) :
        echo ')';
      endif;

    endif;
    echo '</li></ul></div></div>';
  endif;
} // end qt_custom_breadcrumbs()
