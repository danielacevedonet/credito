<?php

/*
  Theme: Credito
  Template name: Página Agregar
  Author: Daniel Acevedo <daniel@aquivamos.org>
*/



if(isset($_POST['submitted']) && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce')) {

$postTitle = trim($_POST['postTitle']);
$fecha_page = trim($_POST['fecha_page']);
$id_page = trim($_POST['id_page']);
$sumar_page = trim($_POST['sumar_page']);

$new_post = array(
'post_title' => wp_strip_all_tags( $_POST['postTitle'] ),
'post_type' => 'post',
'post_status' => 'publish'

);

$post_id = wp_insert_post($new_post);

if($post_id)
{

// Update Custom Meta
update_post_meta($post_id, 'can_page', $postTitle );
update_post_meta($post_id, 'fecha_page', $fecha_page );
update_post_meta($post_id, 'id_page', $id_page );
update_post_meta($post_id, 'sumar_page', $sumar_page);

// Redirect
wp_redirect( get_permalink( $post->post_parent ) ); exit;
}

} ?>


<form action="" id="primaryPostForm" method="POST">

<label for="postTitle">Titulo</label>
<input type="text" name="postTitle" id="postTitle" value="" class="required" />
<input type="text" name="fecha_page" id="fecha_page" value="<?php echo date('l jS F Y'); ?>"  />
<input type="text" name="id_page" id="id_page" value="<?php echo get_the_ID(); ?>"  />
<input type="text" name="sumar_page" id="sumar_page" value=""  />




<?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>
<input type="hidden" name="submitted" id="submitted" value="true" />
<button type="submit"><?php _e('Add Post', 'framework') ?></button>

</form>



