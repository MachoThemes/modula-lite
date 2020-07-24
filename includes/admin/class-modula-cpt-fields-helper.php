<?php

/**
 *
 */
class Modula_CPT_Fields_Helper {

	public static function get_tabs() {

		$general_description = '<p>' . esc_html__( 'Choose between creative or custom grid (build your own) and easily design your gallery.', 'modula-best-grid-gallery' ) . '</p>';
		$caption_description = '<p>' . esc_html__( 'The settings below adjust how the image title/description will appear on the front-end.', 'modula-best-grid-gallery' ) . '</p>';
		$social_description = '<p>' . esc_html__( 'Here you can add social sharing buttons to your the images in your gallery.', 'modula-best-grid-gallery' ) . '</p>';
		$loadingeffects_description = '<p>' . esc_html__( 'The settings below adjust the effect applied to the images after the page is fully loaded.', 'modula-best-grid-gallery' ) . '</p>';
		$hover_description = '<p>' . esc_html__( 'Select how your images will behave on hover. Hover styles for your images.', 'modula-best-grid-gallery' ) . '</p>';
		$style_description = '<p>' . esc_html__( 'Here you can style the look of your images.', 'modula-best-grid-gallery' ) . '</p>';
		$customizations_description = '<p>' . esc_html__( 'Use this section to add custom CSS to your gallery for advanced modifications.', 'modula-best-grid-gallery' ) . '</p>';
		$filters_description = sprintf( '<p><strong>%s</strong><br><br>%s</p>',
			esc_html__( 'Easily let website visitors sort photos in your gallery by adding filters.', 'modula-best-grid-gallery' ),
			esc_html__( 'Use this tab to create new filters which you can then start assigning filters to by editing images individually or by using the bulk edit option.', 'modula-best-grid-gallery' )
		);

		return apply_filters( 'modula_gallery_tabs', array(
			'general' => array(
				'label'       => esc_html__( 'General', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'General Settings', 'modula-best-grid-gallery' ),
				'description' => $general_description,
				"icon"        => "dashicons dashicons-admin-generic",
				'priority'    => 10,
			),
            'lightboxes' => array(
                'label' => esc_html__('Lightbox & Links','modula-best-grid-gallery'),
                'title' => esc_html__('Lightbox & Links settings','modula-best-grid-gallery'),
                'description' => '',
                'icon' => 'dashicons dashicons-layout',
                'priority'    => 10,
            ),
			'filters' => array(
				'label'    => esc_html__( 'Filters', 'modula-best-grid-gallery' ),
				'title'    => esc_html__( 'Filters', 'modula-best-grid-gallery' ),
				'description' => $filters_description,
				"icon"     => "dashicons dashicons-filter",
				'badge'    => esc_html__( 'PRO', 'modula-best-grid-gallery' ),
				'priority' => 15,
			),
			'captions' => array(
				'label'       => esc_html__( 'Captions', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Caption Settings', 'modula-best-grid-gallery' ),
				'description' => $caption_description,
				"icon"        => "dashicons dashicons-text",
				'priority'    => 20,
			),
			'social' => array(
				'label'       => esc_html__( 'Social', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Social Settings', 'modula-best-grid-gallery' ),
				'description' => $social_description,
				"icon"        => "dashicons dashicons-admin-links",
				'priority'    => 30,
			),
			'image-loaded-effects' => array(
				'label'       => esc_html__( 'Loading effects', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Loading Effects Settings', 'modula-best-grid-gallery' ),
				'description' => $loadingeffects_description,
				"icon"        => "dashicons dashicons-image-rotate",
				'priority'    => 40,
			),
			'hover-effect' => array(
				'label'       => esc_html__( 'Hover effects', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Hover Effect Settings', 'modula-best-grid-gallery' ),
				'description' => $hover_description,
				"icon"        => "dashicons dashicons-layout",
				'priority'    => 50,
			),
			'video' => array(
				'label'       => esc_html__( 'Video', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Video Settings', 'modula-best-grid-gallery' ),
				"icon"        => "dashicons dashicons-video-alt3",
				'badge'       => esc_html__( 'PRO', 'modula-best-grid-gallery' ),
				'priority'    => 60,
			),
			'style' => array(
				'label'       => esc_html__( 'Style', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Style Settings', 'modula-best-grid-gallery' ),
				'description' => $style_description,
				"icon"        => "dashicons dashicons-admin-appearance",
				'priority'    => 70,
			),
			'speedup' => array(
	    		'label'       => esc_html__( 'Speed Up', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Optimize your images', 'modula-best-grid-gallery' ),
				"icon"        => "dashicons dashicons-dashboard",
				'priority'    => 80,
	    	),
			'exif' => array(
				'label'       => esc_html__('EXIF', 'modula-best-grid-gallery'),
				'title'       => esc_html__( "Exif Settings", "modula-best-grid-gallery" ),
				'description' => esc_html__( "The settings bellow adjust what type of picture information is displayed in the lightbox.", "modula-best-grid-gallery" ),
				'icon'        => "dashicons dashicons-camera-alt",
				'badge'       => esc_html__('PRO', 'modula-best-grid-gallery'),
				'priority'    => 85,
			),
			'download' => array(
				'label'       => esc_html__( "Download", "modula-best-grid-gallery" ),
				'title'       => esc_html__( "Download Settings", "modula-best-grid-gallery" ),
				'description' => esc_html__( "The settings bellow adjust the download options .", "modula-best-grid-gallery" ),
				'icon'        => "dashicons dashicons-download",
				'badge'       => esc_html__('PRO', 'modula-best-grid-gallery'),
				'priority'    => 86,
			),
			'zoom' => array(
				'label'       => esc_html__( "Zoom", "modula-best-grid-gallery" ),
				'title'       => esc_html__( "Zoom Settings", "modula-best-grid-gallery" ),
				'description' => esc_html__( "The settings bellow adjust what type of zoom is displayed in the lightbox.", "modula-best-grid-gallery" ),
				'icon'        => "dashicons dashicons-search",
				'badge'       => esc_html__('PRO', 'modula-best-grid-gallery'),
				'priority'    => 87,
			),
	    	'responsive' => array(
				'label'       => esc_html__( 'Responsive', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Responsive Settings', 'modula-best-grid-gallery' ),
				"icon"        => "dashicons dashicons-smartphone",
				'priority'    => 90,
			),
			'customizations' => array(
				'label'       => esc_html__( 'Custom CSS', 'modula-best-grid-gallery' ),
				'title'       => esc_html__( 'Custom CSS', 'modula-best-grid-gallery' ),
				'description' => $customizations_description,
				"icon"        => "dashicons dashicons-admin-tools",
				'priority'    => 90,
			),
            'misc' => array(
                'label'       => esc_html__('Misc', 'modula-best-grid-gallery'),
                'title'       => esc_html__('Miscellaneous', 'modula-best-grid-gallery'),
                "icon"        => "dashicons dashicons-image-filter",
                'badge'       => esc_html__('PRO', 'modula-best-grid-gallery'),
                'priority'    => 100,
            ),
            'slideshow' => array(
                'label'       => esc_html__('Slideshow', 'modula-best-grid-gallery'),
                'title'       => esc_html__( 'Lightbox slideshow settings', 'modula-best-grid-gallery' ),
                'description' => esc_html__( 'Here you can modify the settings for lightbox slideshow like : autoplay / autoplay time / pause on hover', 'modula-best-grid-gallery' ),
                "icon"        => "dashicons dashicons-images-alt2",
                'badge'       => esc_html__('PRO', 'modula-best-grid-gallery'),
                'priority'    => 110,
            ),
            'password_protect' => array(
                'label'       => esc_html__('Pass Protect', 'modula-best-grid-gallery'),
                'title'       => esc_html__('Password protect your galleries', 'modula-best-grid-gallery'),
                "icon"        => "dashicons dashicons-shield",
                'badge'       => esc_html__('PRO', 'modula-best-grid-gallery'),
                'priority'    => 120,
            ),
            'watermark' => array(
                'label'       => esc_html__('Watermark', 'modula-best-grid-gallery'),
                'title'       => esc_html__('Watermark settings to protect your galleries', 'modula-best-grid-gallery'),
                "icon"        => "dashicons dashicons-id-alt",
                'badge'       => esc_html__('PRO', 'modula-best-grid-gallery'),
                'priority'    => 130,
            ),

		) );

	}

	public static function generate_more_help_links() {

		$output = '<p>' . esc_html__( 'Still stuck ?', 'modula-best-grid-gallery' ) . ' <a class="modula-tab-link" href="#" target="_blank"><span class="dashicons dashicons-sos"></span>' . esc_html__( 'Explore our documentation', 'modula-best-grid-gallery' ) . '</a> or <a href="https://wp-modula.com/contact-us/" class="modula-tab-link" target="_blank><span class="dashicons dashicons-email-alt"></span>' . esc_html__( 'Contact our support team.', 'modula-best-grid-gallery' ) . '</a></p>';

		return $output;

	}

	public static function get_fields( $tab ) {

		$fields = apply_filters( 'modula_gallery_fields', array(
			'general' => array(
				'type'           => array(
					"name"        => esc_html__( 'Gallery Type', 'modula-best-grid-gallery' ),
					"type"        => "select",
					"description" => esc_html__( 'Choose the type of gallery you want to use.', 'modula-best-grid-gallery' ),
					'default'     => 'creative-gallery',
					"values"      => array(
						'creative-gallery' => esc_html__( 'Creative Gallery', 'modula-best-grid-gallery' ),
						'custom-grid'      => esc_html__( 'Custom Grid', 'modula-best-grid-gallery' ),
						'grid'             => esc_html__( 'Columns', 'modula-best-grid-gallery' )
					),
					"disabled" => array(
						'title'  => esc_html__( 'Gallery types with PRO license', 'modula-best-grid-gallery' ),
						'values' => array(
							"slider"     => esc_html__( 'Slider', 'modula-best-grid-gallery' ),
						),
					),
					'priority' => 10,
				),
				"grid_type" => array(
					"name"        => esc_html__( 'Column Type', 'modula-best-grid-gallery' ),
					"type"        => "select",
					"description" => esc_html__( 'Select the grid type. Automatic will fully fill each row .', 'modula-best-grid-gallery' ),
					'values'      => array(
						'automatic' => esc_html__( 'Automatic', 'modula-best-grid-gallery' ),
						'1'         => esc_html__( 'One Column(1)', 'modula-best-grid-gallery' ),
						'2'         => esc_html__( 'Two Columns(2)', 'modula-best-grid-gallery' ),
						'3'         => esc_html__( 'Three Columns(3)', 'modula-best-grid-gallery' ),
						'4'         => esc_html__( 'Four Columns(4)', 'modula-best-grid-gallery' ),
						'5'         => esc_html__( 'Five Columns(5)', 'modula-best-grid-gallery' ),
						'6'         => esc_html__( 'Six Columns(6)', 'modula-best-grid-gallery' ),
					),
					'default'     => 'automatic',
					'priority'    => 26,
				),

				"grid_row_height" => array(
					"name"        => esc_html__( 'Row Height.', 'modula-best-grid-gallery' ),
					"type"        => "number",
					"after"       => "px",
					"description" => esc_html__( 'Set the height of each row.', 'modula-best-grid-gallery' ),
					"default"     => 150,
					'is_child'    => true,
					"priority"    => 27,
				),

				"grid_justify_last_row" => array(
					"name"        => esc_html__( 'Last Row Alignment', 'modula-best-grid-gallery' ),
					"type"        => "select",
					"description" => esc_html__( 'By selecting justify , the last row of pictures will automatically be resized to fit the full width.', 'modula-best-grid-gallery' ),
					"values"      => array(
						"justify"   => esc_html__( 'Justify', 'modula-best-grid-gallery' ),
						'nojustify' => esc_html__( 'Left', 'modula-best-grid-gallery' ),
						'center'    => esc_html__( 'Center', 'modula-best-grid-gallery' ),
						'right'     => esc_html__( 'Right', 'modula-best-grid-gallery' ),
					),
					"default"     => "justify",
					'is_child'    => true,
					"priority"    => 28,
				),

				"grid_image_size" => array(
					"name"        => esc_html__( 'Image Size', 'modula-best-grid-gallery' ),
					"type"        => "dimensions-select",
					"description" => esc_html__( 'Select the size of your images. ', 'modula-best-grid-gallery' ),
					'values'      => Modula_Helper::get_image_sizes( true ),
					'default'     => 'medium',
					'priority'    => 37,
				),

				"grid_image_dimensions" => array(
					"name"        => esc_html__( ' Image dimensions', 'modula-best-grid-gallery' ),
					"type"        => "image-size",
					"description" => esc_html__( 'Define image width. If Crop images isn\'t enabled, images will be proportional.', 'modula-best-grid-gallery' ),
					'default'     => '1200',
					'is_child'    => true,
					'priority'    => 38,
				),

				"grid_image_crop" => array(
					"name"        => esc_html__( 'Crop Images', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"description" => esc_html__( 'If this is enabled, images will be cropped down to exactly the sizes defined above.', 'modula-best-grid-gallery' ),
					'default'     => 0,
					'is_child'    => true,
					'priority'    => 39,
				),
				"gutter"   => array(
					"name"        => esc_html__( 'Gutter', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Use this slider to adjust the spacing of images in your gallery.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 100,
					"step"        => 1,
					"default"     => 10,
					'priority'    => 30,
				),
				"width"          => array(
					"name"        => esc_html__( 'Width', 'modula-best-grid-gallery' ),
					"type"        => "text",
					"description" => esc_html__( 'Width of the gallery. Can be in % or pixels.', 'modula-best-grid-gallery' ),
					'default'     => '100%',
					'priority' => 30,
				),
				"height"         => array(
					"name"        => esc_html__( 'Height', 'modula-best-grid-gallery' ),
					"type"        => "text",
					"description" => esc_html__( 'Set the height of the gallery in pixels.', 'modula-best-grid-gallery' ),
					'default'     => '800px',
					'priority' => 40,
				),
				"img_size"       => array(
					"name"        => esc_html__( 'Thumbnail Size', 'modula-best-grid-gallery' ),
					"type"        => "text",
					'default'     => 500,
					"description" => esc_html__( 'Set the minimum width or height of the thumbnails in pixels.', 'modula-best-grid-gallery' ),
					'priority'    => 50,
				),
				"randomFactor"   => array(
					"name"        => esc_html__( 'Random factor', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Toggle this to 0 to tune down the randomising factor on Modula\'s grid algorithm.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 100,
					"step"        => 1,
					"default"     => 50,
					'priority' => 70,
				),
                "shuffle"         => array(
                    "name"        => esc_html__( 'Shuffle images', 'modula-best-grid-gallery' ),
                    "type"        => "toggle",
                    "default"     => 0,
                    "description" => esc_html__( 'Toggle this to ON to have the gallery shuffle on each page load', 'modula-best-grid-gallery' ),
                    'priority'    => 90,
				),
				"powered_by"      => array(
					"name"        => esc_html__( 'Powered by', 'modula-best-grid-gallery'),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Adds a Powered by Modula text at the bottom right of your gallery.', 'modula-best-grid-gallery' ),
					"priority"    => 92,
				),
				"enable_pagination" => array(
					"name"        => esc_html__( 'Enable pagination', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Toggle ON to enable pagination.', 'modula-best-grid-gallery' ),
					"priority"    => 93,
				),
				"enable_infinite_scroll" => array(
					"name"        => esc_html__( 'Enable infinite scroll', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Toggle ON to enable infinite scroll.', 'modula-best-grid-gallery' ),
					"priority"    => 93,
					'is_child'    => true,
				),
				"pagination_number" => array(
					"name"        => esc_html__( 'Images / Page', 'modula-best-grid-gallery' ),
					"type"        => "text",
					"default"     => get_option( 'posts_per_page' ),
					'is_child'    => true,
					"description" => esc_html__( 'Input the number of images you want to be displayed / page. In order for this to work you must select a number that is bigger than 0.', 'modula-best-grid-gallery' ),
					"priority"    => 94,
				),
				"pagination_color" => array(
					"name"        => esc_html__( 'Pagination links color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					'alpha'       => true,
					"default"     => '',
					'is_child'    => true,
					"description" => esc_html__( 'Select the color used for the pagination links.', 'modula-best-grid-gallery' ),
					"priority"    => 95,
				),
				"active_pagination_color" => array(
					"name"        => esc_html__( 'Pagination active page color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					'alpha'       => true,
					"default"     => '',
					'is_child'    => true,
					"description" => esc_html__( 'Select the color used for the active page.', 'modula-best-grid-gallery' ),
					"priority"    => 96,
				),
				"pagination_position"     => array(
					"name"        => esc_html__( 'Pagination position', 'modula-best-grid-gallery' ),
					"type"        => "select",
					"default"     => 'left',
					"values"     => array(
						"left"   => esc_html__( 'Left', 'modula-best-grid-gallery' ),
						"center" => esc_html__( 'Center', 'modula-best0grid-gallery' ),
						"right"  => esc_html__( 'Right', 'modula-best-grid-gallery' )
					),
					'is_child'    => true,
					"description" => esc_html__( 'Select where you want to output the pagination links.', 'modula-best-grid-gallery' ),
					"priority"    => 97,
				),
			),
			'lightboxes' => array(
                "lightbox"       => array(
                    "name"        => esc_html__( 'Lightbox &amp; Links', 'modula-best-grid-gallery' ),
                    "type"        => "select",
                    "description" => esc_html__( 'Choose how the gallery should behave on image clicking.', 'modula-best-grid-gallery' ),
                    'default'     => 'fancybox',
                    "values"      => array(

                        "no-link"         => esc_html__( 'No link', 'modula-best-grid-gallery' ),
                        "direct"          => esc_html__( 'Direct link to image', 'modula-best-grid-gallery' ),
                        "attachment-page" => esc_html__( 'Attachment page', 'modula-best-grid-gallery' ),
                        "fancybox" => esc_html__( 'Open Images in a Lightbox', 'modula-best-grid-gallery' ),

                    ),
                    'priority' => 1,
                ),
                "show_navigation" => array(
                    "name"        => esc_html__( 'Navigation arrows', 'modula-best-grid-gallery' ),
                    "type"        => "toggle",
                    "description" => esc_html__( 'Enable this to display navigation arrows.', 'modula-best-grid-gallery' ),
                    "default"     => 1,
                    'priority'    => 1,
                ),
            ),
			'captions' => array(
				"hide_title"        => array(
					"name"        => esc_html__( 'Hide Title', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Hide image titles from your gallery.', 'modula-best-grid-gallery' ),
					'priority'    => 10,
				),
				"titleColor"     => array(
					"name"        => esc_html__( 'Title Color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					"description" => esc_html__( 'Set the color of title.', 'modula-best-grid-gallery' ),
					"default"     => "",
					'is_child'    => true,
					'priority'    => 30,
				),
				"titleFontSize"    => array(
					"name"        => esc_html__( 'Title Font Size', 'modula-best-grid-gallery' ),
					"type"        => "number",
					"after"       => 'px',
					"default"     => 0,
					"description" => esc_html__( 'The title font size in pixels (set to 0 to use the theme defaults).', 'modula-best-grid-gallery' ),
					'is_child'    => true,
					'priority'    => 40,
				),
                "mobileTitleFontSize"    => array(
                    "name"        => esc_html__( 'Mobile Title Font Size', 'modula-best-grid-gallery' ),
                    "type"        => "number",
                    "after"       => 'px',
                    "default"     => 12,
                    "description" => esc_html__( 'The title font size in pixels (set to 0 to use the theme defaults) for mobile view.', 'modula-best-grid-gallery' ),
                    'is_child'    => true,
                    'priority'    => 40,
                ),
				"hide_description"        => array(
					"name"        => esc_html__( 'Hide Caption', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Hide image captions from your gallery.', 'modula-best-grid-gallery' ),
					'priority'    => 50,
				),
				"captionColor"     => array(
					"name"        => esc_html__( 'Caption Color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					"description" => esc_html__( 'Set the color of captions.', 'modula-best-grid-gallery' ),
					"default"     => "#ffffff",
					'is_child'    => true,
					'priority'    => 70,
				),
				"captionFontSize"  => array(
					"name"        => esc_html__( 'Caption Font Size', 'modula-best-grid-gallery' ),
					"type"        => "number",
					"after"       => 'px',
					"default"     => 14,
					"description" => esc_html__( 'The caption font size in pixels (set to 0 to use theme defaults).', 'modula-best-grid-gallery' ),
					'is_child'    => true,
					'priority'    => 80,
				),
                "mobileCaptionFontSize"  => array(
                    "name"        => esc_html__( 'Mobile Caption Font Size', 'modula-best-grid-gallery' ),
                    "type"        => "number",
					"after"       => 'px',
                    "default"     => 10,
                    "description" => esc_html__( 'The caption font size in pixels (set to 0 to use theme defaults) for mobile view.', 'modula-best-grid-gallery' ),
                    'is_child'    => true,
                    'priority'    => 100,
                ),
			),
			'social' => array(
				"enableSocial"   => array(
					"name"        => esc_html__( 'Enable Social Icons', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => "Enable social sharing on hovering the gallery thumbnail. Off by default.",
					'priority'    => 10,
				),
				"enableTwitter"   => array(
					"name"        => esc_html__( 'Twitter', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Show Twitter Share Icon when hovering the gallery thumbnail.', 'modula-best-grid-gallery' ),
					'is_child'    => true,
					'priority'    => 10,
				),
				"enableFacebook"  => array(
					"name"        => esc_html__( 'Facebook', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Show Facebook Share Icon when hovering the gallery thumbnail', 'modula-best-grid-gallery' ),
					'is_child'    => true,
					'priority'    => 20,
				),
				"enableWhatsapp"  => array(
					"name"        => esc_html__( 'Whatsapp', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Show Whatsapp Share Icon when hovering the gallery thumbnail', 'modula-best-grid-gallery' ),
					'is_child'    => true,
					'priority'    => 20,
				),
				"enableLinkedin"  => array(
					"name"        => esc_html__( 'LinkedIn', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Show LinkedIn Share Icon when hovering the gallery thumbnail', 'modula-best-grid-gallery' ),
					'is_child'    => true,
					'priority'    => 30,
				),
				"enablePinterest" => array(
					"name"        => esc_html__( 'Pinterest', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Show Pinterest Share Icon when hovering the gallery thumbnail', 'modula-best-grid-gallery' ),
					'is_child'    => true,
					'priority'    => 40,
				),
				"enableEmail" => array(
					"name"        => esc_html__( 'Email', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					"description" => esc_html__( 'Show Email Share Icon when hovering the gallery thumbnail', 'modula-best-grid-gallery' ),
					'is_child'    => true,
					'priority'    => 40,
				),
				"emailSubject"   => array(
					"name"        => esc_html__( 'Email subject', 'modula-best-grid-gallery' ),
					"type"        => "text",
					"default"     => esc_html__( 'Check out this awesome image !!','modula-best-grid-gallery' ),
					"description" => esc_html__( 'Email subject text, used in hover social sharing', 'modula-best-grid-gallery' ),
					'is_child'    => 'two',
					'priority'    => 41,
				),
				"emailMessage"   => array(
					"name"        => esc_html__( 'Email message', 'modula-best-grid-gallery' ),
					"type"        => "textarea-placeholder",
					"values"      => array(
						'%%image_link%%'      => esc_html__( 'Image Link', 'modula-best-grid-gallery' ),
						'%%gallery_link%%'    => esc_html__( 'Gallery Link', 'modula-best-grid-gallery' ),
					),
					"default"     => esc_html__( 'Here is the link to the image : %%image_link%% and this is the link to the gallery : %%gallery_link%% ','modula-best-grid-gallery'),
					"description" => esc_html__( 'Email share text,used in hover social sharing', 'modula-best-grid-gallery' ),
					'is_child'    => 'two',
					'priority'    => 42,
				),
				"socialIconColor" => array(
					"name"        => esc_html__( 'Color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					"description" => esc_html__( 'Select what color should the icon have. Available only for gallery thumbnail hover.', 'modula-best-grid-gallery' ),
					"default"     => "#ffffff",
					'is_child'    => true,
					'priority'    => 50,
				),
				"socialIconSize" => array(
					"name"        => esc_html__( 'Size', 'modula-best-grid-gallery' ),
					"type"        => "number",
					"after"       => "px",
					"description" => esc_html__( '16 will be the default value.','modula-best-grid-gallery'),
					"default"     => 16,
					'is_child'    => true,
					'priority'    => 50,
				),
				"socialIconPadding" => array(
					"name"        => esc_html__( 'Gutter', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"min"         => 0,
                    "max"         => 20,
					"description" => esc_html__( 'Space Between social sharing icons','modula-best-grid-gallery'),
					"default"     => 10,
					'is_child'    => true,
					'priority'    => 50,
				),
			),
			'image-loaded-effects' => array(
				"loadedScale"  => array(
					"name"        => esc_html__( 'Scale', 'modula-best-grid-gallery' ),
					"description" => esc_html__( 'Choose a value below 100% for a zoom-in effect. Choose a value over 100% for a zoom-out effect. Choose 100 for no effect.', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"min"         => 0,
					"max"         => 200,
					"default"     => 100,
					'priority' => 10,
				),
                "inView"  => array(
                    "name"        => esc_html__( 'Load in view', 'modula-best-grid-gallery' ),
                    "description" => esc_html__( 'If your gallery is somewhere further down the page but you still want to make the loading effect please check this toggle.', 'modula-best-grid-gallery' ),
                    "type"        => "toggle",
                    "default"     => 0,
                    'priority' => 50,
                ),
			),
			'hover-effect' => array(
				"effect" => array(
					"name"        => esc_html__( 'Hover effect', 'modula-best-grid-gallery' ),
					"description" => esc_html__( 'Select your preferred hover effect', 'modula-best-grid-gallery' ),
					"type"        => "hover-effect",
					'default'     => 'pufrobo',
					'priority'    => 15,
				),

				"cursor"  => array(
					"name"         => esc_html__( 'Curson Icon', 'modula-best-grid-gallery'),
					"description"  => esc_html__( 'Select your favourite cursor', 'modula-best-grid-gallery'),
					"type"		   => "select",
					"default"	   => "zoom-in",
					"priority"     => 12,
					'values'       => array(
						'pointer'  => esc_html__( 'Pointer', 'modula-best-grid-gallery'),
						'zoom-in'  => esc_html__( 'Magnifying Glass', 'modula-best-grid-gallery'),
					),
					"disabled" => array(
						'title'  => esc_html__( 'Cursors with PRO license', 'modula-best-grid-gallery' ),
						'values' => array(
							'wait'        => esc_html__( 'Loading', 'modula-best-grid-gallery'),
							'cell'        => esc_html__( 'Cell', 'modula-best-grid-gallery'),
							'crosshair'   => esc_html__( 'Crosshair', 'modula-best-grid-gallery'),
							'nesw-resize' => esc_html__( 'Resize 1', 'modula-best-grid-gallery'),
							'nwse-resize' => esc_html__( 'Resize 2', 'modula-best-grid-gallery'),
							'custom'      => esc_html__( 'Custom', 'modula-best-grid-gallery'),
						),
					),
				),
			),
			'style' => array(
				"borderSize"   => array(
					"name"        => esc_html__( 'Border Size', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Set the border size of images in your gallery.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 10,
					"default"     => 0,
					'priority'    => 10,
				),
				"borderRadius" => array(
					"name"        => esc_html__( 'Border Radius', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Set the radius of the image borders in this gallery.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 100,
					"default"     => 0,
					'priority'    => 20,
				),
				"borderColor"  => array(
					"name"        => esc_html__( 'Border Color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					"description" => esc_html__( 'Set the color of your image borders in this gallery.', 'modula-best-grid-gallery' ),
					"default"     => "#ffffff",
					'priority'    => 30,
				),
				"shadowSize"   => array(
					"name"        => esc_html__( 'Shadow Size', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Set the size of image shadows in this gallery.', 'modula-best-grid-gallery' ),
					"min"         => 0,
					"max"         => 20,
					"default"     => 0,
					'priority'    => 40,
				),
				"shadowColor"  => array(
					"name"        => esc_html__( 'Shadow Color', 'modula-best-grid-gallery' ),
					"type"        => "color",
					"description" => esc_html__( 'Set the color of image shadows in this gallery', 'modula-best-grid-gallery' ),
					"default"     => "#ffffff",
					'priority'    => 50,
				),
			),
			'speedup'    => array(
				'lazy_load' => array(
					"name"        => esc_html__( 'Lazy Load', 'modula-best-grid-gallery' ),
					"description" => esc_html__( 'Enable/Disable lazy load', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					'priority'    => 1,
				),
			),
			'responsive' => array(
				'enable_responsive' => array(
					"name"        => esc_html__( 'Custom responsiveness', 'modula-best-grid-gallery' ),
					"description" => esc_html__( 'Force the gallery to show a certain number of column on tablet/mobile devices', 'modula-best-grid-gallery' ),
					"type"        => "toggle",
					"default"     => 0,
					'priority'    => 10,
				),
				'tablet_columns' => array(
					"name"        => esc_html__( 'Tablet Columns', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Use this slider to adjust the number of columns for gallery on tablets.', 'modula-best-grid-gallery' ),
					"min"         => 1,
					"max"         => 6,
					"step"        => 1,
					"default"     => 2,
					'priority'    => 20,
				),
				'mobile_columns' => array(
					"name"        => esc_html__( 'Mobile Columns', 'modula-best-grid-gallery' ),
					"type"        => "ui-slider",
					"description" => esc_html__( 'Use this slider to adjust the number of columns for gallery on mobile devices.', 'modula-best-grid-gallery' ),
					"min"         => 1,
					"max"         => 6,
					"step"        => 1,
					"default"     => 1,
					'priority'    => 30,
				),
			),
			'customizations' => array(
				"style"  => array(
					"name"        => '',
					"type"        => "custom_code",
					"syntax"      => 'css',
					"description" => '',
					'priority' => 20,
				),
			),
		) );

		if ( ! isset( $fields['speedup']['lazy_load'] ) ) {
			$fields['speedup']['lazy_load'] = array(
				"name"        => esc_html__( 'Lazy Load', 'modula-best-grid-gallery' ),
				"description" => esc_html__( 'Enable/Disable lazy load', 'modula-best-grid-gallery' ),
				"type"        => "toggle",
				"default"     => 0,
				'priority'    => 0,
			);
		}

		if ( 'all' == $tab ) {
			return $fields;
		}

		if ( isset( $fields[ $tab ] ) ) {
			return $fields[ $tab ];
		} else {
			return array();
		}

	}



	public static function get_defaults() {
		return apply_filters( 'modula_lite_default_settings', array(
			'type'                    => 'creative-gallery',
			'width'                   => '100%',
			'height'                  => '800',
			'img_size'                => 300,
			'randomFactor'            => '50',
			'lightbox'                => 'fancybox',
			'show_navigation'         => 1,
			'shuffle'                 => 0,
			'enable_pagination'       => 0,
			'enable_infinite_scroll'  => 0,
			'pagination_number'       => get_option( 'posts_per_page' ),
			'pagination_color'        => '',
			'active_pagination_color' => '',
			'pagination_position'     => 'left',
			'titleColor'              => '',
			'captionColor'            => '#ffffff',
			'hide_title'              => 0,
			'hide_description'        => 0,
			'captionFontSize'         => '14',
			'titleFontSize'           => '16',
			'mobileCaptionFontSize'   => '10',
			'mobileTitleFontSize'     => '12',
			'enableSocial'            => 0,
			'enableFacebook'          => 0,
			'enableLinkedin'          => 0,
			'enablePinterest'         => 0,
			'enableTwitter'           => 0,
			'enableWhatsapp'          => 0,
			'enableEmail'             => 0,
			'emailSubject'            => esc_html__( 'Check out this awesome image !!', 'modula-best-grid-gallery' ),
			'emailMessage'            => esc_html__( 'Here is the link to the image : %%image_link%% and this is the link to the gallery : %%gallery_link%% ', 'modula-best-grid-gallery' ),
			'filterClick'             => 0,
			'socialIconColor'         => '#ffffff',
			'socialIconSize'          => 16,
			'socialIconPadding'       => 10,
			'loadedScale'             => '100',
			'inView'                  => '100',
			'cursor'                  => 'magnifying-glass',
			'effect'                  => 'pufrobo',
			'borderColor'             => '#ffffff',
			'borderRadius'            => '0',
			'borderSize'              => '0',
			'shadowColor'             => '#ffffff',
			'shadowSize'              => 0,
			'script'                  => '',
			'style'                   => '',
			'columns'                 => 6,
			'gutter'                  => 10,
			'helpergrid'              => 0,
			'lazy_load'               => 0,
			'grid_type'               => '4',
			'grid_image_size'         => 'medium',
			'grid_image_crop'         => 0,
			'grid_image_dimensions'   => '1200',
			'grid_row_height'         => 150,
			'grid_justify_last_row'   => 'justify',
			'enable_responsive'       => 0,
			'powered_by'              => 0
		) );
	}

}
