<?php

// Cabeçalho para compartilhamento
function fb_opengraph() {
    global $post;

    if(is_single()) {
        if(has_post_thumbnail($post->ID)) {
            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', true );
            $img_src = $img_src[0];
        } else {
            $img_src = get_stylesheet_directory_uri() . '/assets/img/logotipo.png';
        }
        if($excerpt = get_the_excerpt()) {
            $excerpt = strip_tags(get_the_excerpt());
            $excerpt = str_replace("", "'", $excerpt);
        } else {
            $excerpt = get_bloginfo('description');
        }
?>
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:title" content="<?php echo the_title(); ?>"/>
    <meta property="og:description" content="<?php echo $excerpt; ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
    <meta property="og:image" content="<?php echo $img_src; ?>"/>
    <meta name="twitter:title" content="<?php echo the_title(); ?>">
    <meta name="twitter:description" content="<?php echo $excerpt; ?>">
    <meta name="twitter:image" content="<?php echo $img_src; ?>">
    <meta name="msapplication-TileImage" content="<?php echo $img_src; ?>">

<?php
    } else {
        return;
    }
}
add_action('wp_head', 'fb_opengraph', 5);

//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype');

//Analisar com o de cima

// function insert_fb_in_head() {

//     global $post;
//     if($excerpt = $post->post_excerpt) {
//             $excerpt = strip_tags($post->post_excerpt);
//             $excerpt = str_replace("", "'", $excerpt);
//     } else {
//         $excerpt = get_bloginfo('description');
//     }
//     if ( !is_singular()) //if it is not a post or a page
//         return;

//         echo '<meta property="og:title" content="' . get_the_title() . '"/>';

//         echo '<meta property="og:description" content="' . $excerpt . '"/>';

//         echo '<meta property="og:type" content="article"/>';

//         echo '<meta property="og:url" content="' . get_permalink() . '"/>';

//         echo '<meta property="og:site_name" content="'. get_bloginfo('name') . '"/>';
//     if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
//         $default_image="http://igostore.com.br/wp-content/themes/igo/img/logotipo-igo.png"; //replace this with a default image on your server or an image in your media library
//         echo '<meta property="og:image" content="' . $default_image . '"/>';
//     }
//     else{
//         $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'img-facebook' );
//         echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
//     }
//     echo "";
// }
// add_action( 'wp_head', 'insert_fb_in_head', 5 );

/* Adicionando EXCERPT nas páginas */
//add_post_type_support( 'page', 'excerpt' );

/* LOGO DO LOGIN PERSONNALIZADO
----------------------------------------------- */
function page_login_logo(){
    echo "<style>body.login #login h1 a { background: url('".get_stylesheet_directory_uri()."/assets/img/logotipo.png') center center no-repeat; height:136px; width:320px;margin:0; background-size: 11rem; position:relative; top:-2rem;}</style>\n";
}
add_action("login_head", "page_login_logo");

/* LINK DO LOGO DO LOGIN PARA PÁGINA INICIAL
----------------------------------------------- */
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

/* TITULOS DO LOGO NO LINK
----------------------------------------------- */
function my_login_logo_url_title() {
    $nomeSite = get_bloginfo('name');
    return $nomeSite;
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* LOGO DO PAINEL PERSONALIZADO
----------------------------------------------- */
// add_action('admin_head', 'my_custom_logo');
// function my_custom_logo() {
// echo '<style>
// #wp-admin-bar-wp-logo .ab-icon {background: url('.get_bloginfo('template_directory').'/img/favicon/favicon.ico) no-repeat center top !important; }</style>';
// }

/* SAUDAÇÃO PERSONALIZADA
----------------------------------------------- */
function replace_howdy( $wp_admin_bar ) {
    $my_account=$wp_admin_bar->get_node('my-account');
    $newtitle = str_replace( 'Olá', 'Bem vindo', $my_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $newtitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );

/* REMOVE BARRA DO ADMIN
----------------------------------------------- */
add_filter( 'show_admin_bar', '__return_false' );

/* REMOVE ITENS DESNECESSARIOS
----------------------------------------------- */
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
    //Recent Comments
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    //Incoming Links
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    //Plugins - Popular, New and Recently updated WordPress Plugins
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    //Wordpress Development Blog Feed
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    //Other WordPress News Feed
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    //Quick Press Form
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    //Recent Drafts List
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
}

/* REMOVE ITENS DO HEAD
----------------------------------------------- */
remove_action('wp_head', 'rel_canonical'); //remove links canonicos
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Removes the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Removes links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link'); // Removes the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link'); // Removes the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link'); // Removes the index link
remove_action( 'wp_head', 'parent_post_rel_link'); // Removes the prev link
remove_action( 'wp_head', 'start_post_rel_link'); // Removes the start link
remove_action( 'wp_head', 'adjacent_posts_rel_link'); // Removes the relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator'); // Removes the WordPress version i.e. 
remove_action('wp_head', 'print_emoji_detection_script', 7); // remove wp Eemoji
remove_action('wp_print_styles', 'print_emoji_styles'); // remove wp Eemoji
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); // remove wp Eemoji
remove_action( 'admin_print_styles', 'print_emoji_styles' ); // remove wp Eemoji

/* Ativar miniatura de posts
----------------------------------------------- */
add_theme_support('post-thumbnails');

/* Resumo para páginas
----------------------------------------------- */
add_action( 'init', 'bl_excerpts_pages' );
function bl_excerpts_pages() {
    add_post_type_support( 'page', 'excerpt' );
}
/* REMOVE SCRIPTS E CSS CONTACT FORM NÃO UTILIZADOS
----------------------------------------------- */
add_filter( 'wpcf7_validate_configuration', '__return_false' );
add_action( 'wp_enqueue_scripts', 'ac_remove_cf7_scripts' );
function ac_remove_cf7_scripts() {
    wp_deregister_style( 'contact-form-7' );
    wp_deregister_script( 'contact-form-7' );
} 

/* LIMITAÇÃO DO RESUMO DOS POSTS
----------------------------------------------- */
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}















/* MENUS   
----------------------------------------------- */
add_action( 'after_setup_theme', 'tema_setup' );   

function tema_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    if ( function_exists( 'register_nav_menus' ) ) {
        register_nav_menus(
            array(
                'menu-principal' => 'Menu Principal',
            )
        );
    }
    /* THUMBS
    ----------------------------------------------- */
    add_image_size( 'img-painel', 1920, 940, true ); // painel
    add_image_size( 'img-institucional', 1280, 800, true ); // institucional
}

/* LIMITAÇÃO DO RESUMO DOS POSTS
----------------------------------------------- */
/* function tamanho_resumo($length) {
    return 15; // Altere este número pelo número de palavras do resumo
}
add_filter('excerpt_length', 'tamanho_resumo');*/


/* MULTIPLOS THUMBS POR POST
-----------------------------------------------
if (class_exists('MultiPostThumbnails')) {
    
    // Imagem do painel 
    $painel = new MultiPostThumbnails(array(
            'label' => 'Imagem do painel (532 x 460)',
            'id' => 'img-painel',
            'post_type' => 'painel'
        )
    );
    add_image_size('post-img-painel', 532, 460, true);
} */

/* Retorna o nome ou slug da taxonomia  */
// echo $taxname = taxname('categorias');
function taxname($taxonomia){
    $terms = get_the_terms( $post->ID , $taxonomia);
    if($terms) {
        foreach( $terms as $term ) {
            $resultado = $term->name;
        }
    }
    return $resultado;
} 
function taxslug($taxonomia){
    $terms = get_the_terms( $post->ID , $taxonomia);
    if($terms) {
        foreach( $terms as $term ) {
            $resultado = $term->slug;
        }
    }
    return $resultado;
}




  /**
 * FUNÇÃO ANÔNIMA PARA MONTAR ELEMENTO SINGLE IMGs OU LINKs VINDOS DO ACF WP
 * Monta o link obtido pelo ACF, retornando ele pronto.
 * @param $type_element - Array ACF do link fornecido pelo WP 
 * @param $array_data - Array ACF do link fornecido pelo WP 
 * @param $array_class - Array de classes atribuidas para estilos CSS
 */
    $mont_element = function( $type_element = "", $array_data = [], $array_class = [] ){
        if( !empty( $type_element ) ){
            if($type_element === "link" ){
                if( $array_data ){
                    $link_url = $array_data['url'];
                    $link_title = $array_data['title'];
                    $link_target = $array_data['target'] ? $array_data['target'] : '_self';
          
                    if( $array_class ){
                        $class_return = implode(', ',$array_class);
                        echo "<a class=\" $class_return \" href=\" $link_url \" target=\" $link_target \"> $link_title </a>";
                    }else{
                        echo "<a href=\" $link_url \" target=\" $link_target \"> $link_title </a>";
                    }
                } 
            }



            if($type_element === "img" ){
                if( $array_data ){
                    $result_url   = $array_data['url'];
                    $result_title = $array_data['alt'];
                    
                    if( $array_class ){
                        $class_return = implode(', ',$array_class);
                        echo "<img class=\" $class_return \" src=\" $result_url \" title=\"$result_title\" >";
                    }else{
                        echo "<img src=\" $result_url \" title=\"$result_title\" >";
                    }
                } 
            }

        }
    }


?>
