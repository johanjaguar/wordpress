<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
    register_sidebar(array('name'=>'subfooterleft'));
add_theme_support( 'nav-menus' );
add_theme_support( 'post-thumbnails' );
add_custom_background();


if ( ! function_exists( 'my_pagination' ) ) {
  function my_pagination() {
    global $wp_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages
    ) );
  }
}
if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Sidebar 1',
        'id'            => 'sidebar-1',
    ));
}
if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Sidebar 2',
        'id'            => 'sidebar-2',
    ));
}
if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Sidebar 3',
        'id'            => 'sidebar-3',
    ));
}
if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Sidebar 4',
        'id'            => 'sidebar-4',
    ));
}
if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Sidebar 5',
        'id'            => 'sidebar-5',
    ));
}

if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Sidebar Footer',
        'id'            => 'sidebar-busqueda',
    ));
}
if(function_exists('register_sidebar')) {
    register_sidebar(array(
        'name'          => 'Sidebar Derecha Contenido',
        'id'            => 'sidebar_right',
    ));
}

/*
 * Define tamaños para diferentes largos del excerpt, se usa asi:
 * wpe_excerpt('wpe_excerptlength_index', 'wpe_excerptmore');
 */
 if ( ! function_exists( 'shape_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Shape 1.0
 */
function shape_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <li class="post pingback">
        <p><?php _e( 'Pingback:', 'shape' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Editar)', 'shape' ), ' ' ); ?></p>
    <?php
            break;
        default :
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <article id="comment-<?php comment_ID(); ?>" class="comment">
            <footer>
                <div class="comment-author vcard">
                    <div class="avatar_comentario"><?php echo get_avatar( $comment, 64 ); ?></div>


                    <div class="elcomentario">
                      <div id="quienycuando">
                        <?php printf( __( '%s <span class="says"> dijo el </span>', 'shape' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
                        <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
                        <?php
                            /* translators: 1: date, 2: time */
                            printf( __( '%1$s at %2$s', 'shape' ), get_comment_date(), get_comment_time() ); ?>
                        </time></a>
                        <?php edit_comment_link( __( '(Editar)', 'shape' ), ' ' );?>
                      </div>

                        <?php if ( $comment->comment_approved == '0' ) : ?>
                            <em><?php _e( 'Tu comentario esta pendiente de aprobación.', 'shape' ); ?></em>
                            <br />
                        <?php endif; ?>

                        <div class="comment-meta commentmetadata">



                        </div><!-- .comment-meta .commentmetadata -->
                        <div class="comment-content"><?php comment_text(); ?><div class="limpiador"></div></div>
                        <div class="reply">
                          <?php comment_reply_link(
                          array_merge( $args, array('reply_text' => 'Responder', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                        </div>
                      <div class="limpiador"></div>
                    </div>
                    </div><!-- .comment-author .vcard -->

            </footer>
            <div class="limpiador"></div>

           <!-- .reply -->
        </article><!-- #comment-## -->

    <?php
            break;
    endswitch;
}
endif; // ends check for shape_comment()




function wpe_excerptlength_teaser( $length ) {
    return 14;
}
function wpe_excerptlength_index( $length ) {
    return 200;
}
function wpe_excerpt($length_callback = '', $more_callback = '') {
    if (function_exists($length_callback))
        add_filter('excerpt_length', $length_callback);
    if (function_exists($more_callback))
        add_filter('excerpt_more', $more_callback);
    //$output = get_the_excerpt();
    $output = do_shortcode(wp_trim_words(get_the_content(), 100));
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>'; // maybe wpautop( $foo, $br )

    echo $output;
}
// Insertar Breadcrumb
function the_breadcrumb() {
    if (!is_home()) {
        echo '<a href="';
        echo get_option('home');
            echo '">';
        bloginfo('name');
        echo "</a> » ";
        if (is_category() || is_single()) {
            the_category('title_li=');
            if (is_single()) {
                echo " » ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
}
// fin breadcrumb
function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'index_rel_link');
remove_action( 'wp_head', 'parent_post_rel_link');
remove_action( 'wp_head', 'start_post_rel_link');
remove_action( 'wp_head', 'adjacent_posts_rel_link');
remove_action( 'wp_head', 'wp_generator');
function home_page_menu_args( $args ) { $args['show_home'] = true; return $args; } add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
add_filter( 'nav_menu_css_class', 'additional_active_item_classes', 10, 2 );

function additional_active_item_classes($classes = array(), $menu_item = false){

	if(in_array('current-menu-item', $menu_item->classes)){
		$classes[] = 'active';
	}

	return $classes;
}


function dimox_breadcrumbs() {

  $delimiter = '&raquo;';
  $home = 'Home'; // text for the 'Home' link
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb

  if ( !is_home() && !is_front_page() || is_paged() ) {

    echo '<div id="crumbs">';

    global $post;
    $homeLink = get_bloginfo('url');
    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</div>';

  }
} // end dimox_breadcrumbs()
function mi_inicio() {
	if (!is_admin()) {
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'mi_inicio');

function largo_extracto($length) {
return 25;
}
add_filter('excerpt_length', 'largo_extracto');
function cambiar_final_extracto($more) {
return ' <br/><a title="Ver Mas" href="'.get_permalink().'" rel="nofollow" class="vermas">Ver Mas&nbsp;&raquo;</a>';
}
add_filter('excerpt_more', 'cambiar_final_extracto');

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).' <a title="Ver Mas" href="'.get_permalink().'" rel="nofollow" id="vermas">Ver Mas&nbsp;&raquo;</a>';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
function extracto($content, $limit,$link) {
  $content = explode(' ', $content, $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content)." <a title='Ver Mas' href='$link' rel='nofollow' id='vermas'>Ver Mas&nbsp;&raquo;</a>";
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
   $content = preg_replace('`\[[^\]]*\]`','',$content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
function extracto2($content, $limit) {
  $content = explode(' ', $content, $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content)."";
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
   $content = preg_replace('`\[[^\]]*\]`','',$content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'full', 1920, 310, true  );
        add_image_size( 'miniatura', 150, 120, true  );
        add_image_size( 'carrusel', 405, 245, true  );
        add_image_size( 'servicios', 930, 310, true  );
        add_image_size( 'slide', 970, 390, true  );
        add_image_size( 'bloghome', 512, 310, true  );
        add_image_size( 'blogcontent', 300, 200, true  );
        add_image_size( 'blogcategoria', 640, 350, true  );

};
add_filter('the_content', 'addshadowboxrel', 12);
add_filter('get_comment_text', 'addshadowboxrel');
function addshadowboxrel ($content)
{   global $post;
	$pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 rel="shadowbox['.$post->ID.']"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}

//    menu bootstrap

require_once('wp_bootstrap_navwalker.php');

function get_post_meta_all($post_id){
    global $wpdb;
    $data   =   array();
    $wpdb->query("
        SELECT `meta_key`, `meta_value`
        FROM $wpdb->postmeta
        WHERE `post_id` = $post_id
    ");
    foreach($wpdb->last_result as $k => $v){
        $data[$v->meta_key] =   $v->meta_value;
    };
    unset($data['_edit_last']);
    unset($data['_edit_lock']);
    unset($data['_thumbnail_id']);
    unset($data['_wp_page_template']);
    return $data;
}

function make_bitly_url( $url , $format = 'xml' , $version = '2.0.1') {
  //create the URL
  $login = 'developermediatic';
  $appkey = 'R_d9b5de49c0c9476d9cba6abf83861b20';
  $bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$login.'&apiKey='.$appkey.'&format='.$format;

  //get the url
  //could also use cURL here
  $response = file_get_contents($bitly);

  //parse depending on desired format
  if(strtolower($format) == 'json'){
    $json = @json_decode($response,true);
    return $json['results'][$url]['shortUrl'];
  }
  else {
    $xml = simplexml_load_string($response);
    return 'http://bit.ly/'.$xml->results->nodeKeyVal->hash;
  }
}
function obtenerTituloPost($id) {
    $salidaHTML='';
    query_posts("p=$id");
            if (have_posts()) : while (have_posts()) : the_post();
                $salidaHTML .= the_title() ;
            endwhile;endif;
    return $salidaHTML;
}
function obtenerContentPage( $id ){ return ( obtenerPagina( $id )->post_content ) ; }
function obtenerTituloPage( $id ){ return ( obtenerPagina( $id )->post_title ) ; }
function obtenerPagina($id){return get_page( $id ); }
function obtenerURLThumb( $id ) {$url = wp_get_attachment_url( get_post_thumbnail_id($id) ); return $url; }
function obtenerCampo( $id, $campo ){return get_post_meta($id,$campo, true);}

function obtenerHijos($idPadre, $numPages ){
   $hijos=array();
   $elpost=array();
   $args = array(
        'post_type'      => 'page',
        'posts_per_page' => $numPages,
        'post_parent'    => $idPadre,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
     );
    $parent = new WP_Query( $args );

    if ( $parent->have_posts() ) : while ( $parent->have_posts() ) : $parent->the_post();
       $elpost=array("ID_Hijo"=>get_post()->ID,"Meta_array"=>get_post_meta_all( get_post()->ID ));
       array_push( $hijos, $elpost);
    endwhile; endif; wp_reset_query();
    return $hijos;
}

function obtenerArchivoyExtension( $descarga ){
   $posicionSlash = 1 + strrpos( $descarga,  "/" , -1 );

   $posicionPunto = strrpos( $descarga , "." , -1 );
   $Archivo = substr( $descarga , $posicionSlash , $posicionPunto - $posicionSlash );
   $Archivo = str_replace("_" , " " , $Archivo );
   $Archivo = str_replace("-" , " " , $Archivo );
   $extension  = strtoupper( substr ($descarga, 1 + $posicionPunto,3) );
   $elArchivo = array(
     'nombre' => $Archivo,
     'extension' => $extension
   );
   return $elArchivo;
}
function obtenerExcerptCorto( $id ){
  $posicionA = strrpos( get_the_excerpt ( $id ) , "<a ",0 ) ;
  $nuevoExcerpt = substr ( get_the_excerpt ( $id ) , 0 , $posicionA - 1);
  return $nuevoExcerpt;

}
function compartirFacebook( $id ){
  $cadena = 'http://www.facebook.com/sharer.php?s=100'.
            '&p[url]='.get_permalink( $id ) . '&' .
            //'&u='.get_permalink( $id ) ;
            'p[title]='. strip_tags( obtenerTituloPage ( $id ) )  . '&' .
            'p[summary]='. obtenerExcerptCorto ( $id ) . '&' .
            'p[images][0]='. obtenerURLThumb ( $id );

  return $cadena;
}

function compartirTwitter( $id ) {
  $cadena = 'http://twitter.com/intent/tweet?url='.
           make_bitly_url( get_permalink( $id ) ,'json') . '&' .
           'text='. substr( obtenerExcerptCorto ( $id ) , 0, 105 ). ' via @media_TIC' ;
  return $cadena;
}

function compartirGooglePlus( $id ) {
  $cadena = 'https://plus.google.com/share?url={' . get_permalink( $id ) . '}' ;
  return $cadena;
}

function traeMenu( $nombreMenu, $columnas ){
  $nombreEspacio= str_replace("_" , " " , $nombreMenu );
  $nombreEspacio= str_replace("-" , " " , $nombreEspacio );
  return wp_nav_menu( array(
  'container_class' => 'col-md-' . $columnas . ' ' . $nombreMenu,
  'theme_location' => 'primary',
  'menu' => $nombreMenu,
  'menu_class' => 'menu_mediatic',
  //'items_wrap' => '<ul><h4><a href="#' . $nombreMenu . '">' . $nombreEspacio . '</a></h4>%3$s</ul>'

  ));
}


function quitar_tildes($cadena) {
  $no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹");
  $permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E");
  $texto = str_replace($no_permitidas, $permitidas ,$cadena);
  return $texto;
}



//funcion que trae los hijos de la sección estrategia y los dibuja en la pantalla estrategia y creatividad.

function hijoEstrategia($id, $hijo, $fondo, $letras){

  $salidaHTML =   '<a href="' . get_permalink( $hijo[$id]["ID_Hijo"] ) . '">' .
                    '<div class="imgestra">' .
                      '<img src="' . obtenerURLThumb( $hijo[$id]["ID_Hijo"] ) . '" />' .
                    '</div>' .
                    '<p class="estrap ' . $fondo . ' ' . $letras . '">' .
                      obtenerTituloPage( $hijo[$id]["ID_Hijo"] ) .
                    '</p>' .
                  '</a>';
  return $salidaHTML;
}
