<?php

function modula_duplicate_gallery_save_as_new_post( $status = '' ) {

	if ( ! ( isset( $_GET['post'] ) || isset( $_POST['post'] ) || ( isset( $_REQUEST['action'] ) && 'modula_duplicate_gallery_save_as_new_post' == $_REQUEST['action'] ) ) ) {
		wp_die( esc_html__( 'No gallery to duplicate has been supplied!', 'modula' ) );
	}

	// Get the original post
	$id = ( isset( $_GET['post'] ) ? $_GET['post'] : $_POST['post'] );

	check_admin_referer( 'duplicate-gallery_' . $id );

	$post = get_post( $id );

	// Copy the post and insert it
	if ( isset( $post ) && $post != null ) {
		$new_id = modula_duplicate_gallery_create_duplicate( $post, $status );

		if ( $status == '' ) {
			$sendback = wp_get_referer();
			if ( ! $sendback ||
			     strpos( $sendback, 'post.php' ) !== false ||
			     strpos( $sendback, 'post-new.php' ) !== false ) {
				if ( 'attachment' == $post_type ) {
					$sendback = admin_url( 'upload.php' );
				} else {
					$sendback = admin_url( 'edit.php' );
					if ( ! empty( $post_type ) ) {
						$sendback = add_query_arg( 'post_type', $post_type, $sendback );
					}
				}
			} else {
				$sendback = remove_query_arg( array( 'trashed', 'untrashed', 'deleted', 'cloned', 'ids' ), $sendback );
			}
			// Redirect to the post list screen
			wp_redirect( add_query_arg( array( 'cloned' => 1, 'ids' => $post->ID ), $sendback ) );
		} else {
			// Redirect to the edit screen for the new draft post
			wp_redirect( add_query_arg( array(
				'cloned' => 1,
				'ids'    => $post->ID
			), admin_url( 'post.php?action=edit&post=' . $new_id ) ) );
		}
		exit;

	} else {
		wp_die( esc_html__( 'Copy creation failed, could not find original:', 'modula' ) . ' ' . htmlspecialchars( $id ) );
	}
}


function modula_duplicate_gallery_get_clone_post_link( $id = 0, $context = 'display', $draft = true ) {

	if ( ! $post = get_post( $id ) ) {
		return;
	}

	$action_name = "modula_duplicate_gallery_save_as_new_post";

	if ( 'display' == $context ) {
		$action = '?action=' . $action_name . '&amp;post=' . $post->ID;
	} else {
		$action = '?action=' . $action_name . '&post=' . $post->ID;
	}

	$post_type_object = get_post_type_object( $post->post_type );
	if ( ! $post_type_object ) {
		return;
	}

	return wp_nonce_url( apply_filters( 'modula_duplicate_gallery_get_clone_post_link', admin_url( "admin.php" . $action ), $post->ID, $context ), 'duplicate-gallery_' . $post->ID );
}


/**
 * Display duplicate post link for post.
 *
 * @param string $link Optional. Anchor text.
 * @param string $before Optional. Display before edit link.
 * @param string $after Optional. Display after edit link.
 * @param int $id Optional. Post ID.
 */
function modula_duplicate_gallery_clone_post_link( $link = null, $before = '', $after = '', $id = 0 ) {
	if ( ! $post = get_post( $id ) ) {
		return;
	}

	if ( ! $url = modula_duplicate_gallery_get_clone_post_link( $post->ID ) ) {
		return;
	}

	echo $before . apply_filters( 'modula_duplicate_gallery_clone_post_link', $link, $post->ID ) . $after;
}

/**
 * Get original gallery .
 *
 * @param int $post Optional. Post ID or Post object.
 * @param string $output Optional, default is Object. Either OBJECT, ARRAY_A, or ARRAY_N.
 *
 * @return mixed Post data
 */
function modula_duplicate_gallery_get_original( $post = null, $output = OBJECT ) {
	if ( ! $post = get_post( $post ) ) {
		return;
	}
	$original_ID = get_post_meta( $post->ID, '_modula_original' );
	if ( empty( $original_ID ) ) {
		return null;
	}
	$original_post = get_post( $original_ID[0], $output );

	return $original_post;
}


/**
 * Create a duplicate from gallery
 */
function modula_duplicate_gallery_create_duplicate( $post, $status = '', $parent_id = '' ) {

	do_action( 'modula_duplicate_gallery_pre_copy' );

	$new_post_status = ( empty( $status ) ) ? $post->post_status : $status;

	if ( $post->post_type != 'attachment' ) {

		$title = $post->post_title;

		if ( $title == '' ) {
			// empty title
			$title = __( 'Untitled' );
		}

		if ( 'publish' == $new_post_status || 'future' == $new_post_status ) {
			// check if the user has the right capability
			if ( is_post_type_hierarchical( $post->post_type ) ) {
				if ( ! current_user_can( 'publish_pages' ) ) {
					$new_post_status = 'pending';
				}
			} else {
				if ( ! current_user_can( 'publish_posts' ) ) {
					$new_post_status = 'pending';
				}
			}
		}
	}

	$new_post_author    = wp_get_current_user();
	$new_post_author_id = $new_post_author->ID;
	// check if the user has the right capability
	if ( is_post_type_hierarchical( $post->post_type ) ) {
		if ( current_user_can( 'edit_others_pages' ) ) {
			$new_post_author_id = $post->post_author;
		}
	} else {
		if ( current_user_can( 'edit_others_posts' ) ) {
			$new_post_author_id = $post->post_author;
		}
	}

	$menu_order = $post->menu_order;
	$post_name  = $post->post_name;

	$new_post = array(
		'menu_order'            => $menu_order,
		'comment_status'        => $post->comment_status,
		'ping_status'           => $post->ping_status,
		'post_author'           => $new_post_author_id,
		'post_content'          => $post->post_content,
		'post_content_filtered' => $post->post_content_filtered,
		'post_excerpt'          => $post->post_excerpt,
		'post_mime_type'        => $post->post_mime_type,
		'post_parent'           => $new_post_parent = empty( $parent_id ) ? $post->post_parent : $parent_id,
		'post_password'         => $post->post_password,
		'post_status'           => $new_post_status,
		'post_title'            => $title,
		'post_type'             => $post->post_type,
		'post_name'             => $post_name,
	);

	$new_post_id = wp_insert_post( wp_slash( $new_post ) );

	if ( $new_post_id !== 0 && ! is_wp_error( $new_post_id ) ) {

		do_action( 'modula_duplicate_gallery', $new_post_id, $post, $status );

		delete_post_meta( $new_post_id, '_modula_original' );
		add_post_meta( $new_post_id, '_modula_original', $post->ID );

		do_action( 'modula_duplicate_gallery_post_copy' );

	}

	return $new_post_id;
}


/**
 * Copy the meta information of a gallery to another gallery
 */
function modula_duplicate_gallery_copy_post_meta_info( $new_id, $post ) {
	$post_meta_keys = get_post_custom_keys( $post->ID );

	$post_meta_keys = apply_filters( 'modula_duplicate_gallery_meta_keys_filter', $post_meta_keys );

	foreach ( $post_meta_keys as $meta_key ) {
		$meta_values = get_post_custom_values( $meta_key, $post->ID );
		foreach ( $meta_values as $meta_value ) {
			$meta_value = maybe_unserialize( $meta_value );
			add_post_meta( $new_id, $meta_key, modula_duplicate_gallery_wp_slash( $meta_value ) );
		}
	}
}


/**
 * Copy the attachments
 */
function modula_duplicate_gallery_copy_attachments( $new_id, $post ) {
	// get thumbnail ID
	$old_thumbnail_id = get_post_thumbnail_id( $post->ID );
	// get children
	$children = get_posts( array(
		'post_type'   => 'any',
		'numberposts' => - 1,
		'post_status' => 'any',
		'post_parent' => $post->ID
	) );
	// clone old attachments
	foreach ( $children as $child ) {
		if ( $child->post_type != 'attachment' ) {
			continue;
		}
		$url = wp_get_attachment_url( $child->ID );
		// Let's copy the actual file
		$tmp = download_url( $url );
		if ( is_wp_error( $tmp ) ) {
			@unlink( $tmp );
			continue;
		}

		$desc = wp_slash( $child->post_content );

		$file_array             = array();
		$file_array['name']     = basename( $url );
		$file_array['tmp_name'] = $tmp;
		// "Upload" to the media collection
		$new_attachment_id = media_handle_sideload( $file_array, $new_id, $desc );

		if ( is_wp_error( $new_attachment_id ) ) {
			@unlink( $file_array['tmp_name'] );
			continue;
		}
		$new_post_author = wp_get_current_user();
		$cloned_child    = array(
			'ID'           => $new_attachment_id,
			'post_title'   => $child->post_title,
			'post_exceprt' => $child->post_title,
			'post_author'  => $new_post_author->ID
		);
		wp_update_post( wp_slash( $cloned_child ) );

		$alt_title = get_post_meta( $child->ID, '_wp_attachment_image_alt', true );
		if ( $alt_title ) {
			update_post_meta( $new_attachment_id, '_wp_attachment_image_alt', wp_slash( $alt_title ) );
		}
	}
}

function modula_duplicate_gallery_wp_slash( $value ) {
	return modula_duplicate_gallery_addslashes_deep( $value );
}

/*
 * Workaround for inconsistent wp_slash.
 * Works only with WP 4.4+ (map_deep)
 */
function modula_duplicate_gallery_addslashes_deep( $value ) {
	if ( function_exists( 'map_deep' ) ) {
		return map_deep( $value, 'modula_duplicate_gallery_addslashes_to_strings_only' );
	} else {
		return wp_slash( $value );
	}
}

function modula_duplicate_gallery_addslashes_to_strings_only( $value ) {
	return is_string( $value ) ? addslashes( $value ) : $value;
}