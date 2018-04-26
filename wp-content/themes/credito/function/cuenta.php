<?php


//Esta funcion nos crea un Random
function creditoRan($length = 5)
{
    return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

// apartir de aqui el codigo sirve para añadir la venta como un post
if(isset($_POST['submitted']) && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce')) {

    $des_page   = trim($_POST['des_page']);
    $can_page   = trim($_POST['can_page']);
    $fecha_page = trim($_POST['fecha_page']);
    $id_page    = trim($_POST['id_page']);
    $sumar_page = trim($_POST['sumar_page']);
    $ram_page   = trim($_POST['ram_page']);

    $new_post = array(
    'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
    'post_type' => 'post',
    'post_status' => 'publish'
    );

    $post_id = wp_insert_post($new_post);

    if($post_id)
        {

        // Update Custom Meta
        update_post_meta($post_id, 'des_page', $des_page);
        update_post_meta($post_id, 'can_page', $can_page);
        update_post_meta($post_id, 'fecha_page', $fecha_page );
        update_post_meta($post_id, 'id_page', $id_page );
        update_post_meta($post_id, 'sumar_page', $sumar_page);
        update_post_meta($post_id, 'ram_page', $ram_page);

        // Redirect
        wp_redirect( get_permalink( $post->post_parent ) ); exit;

        }

}

