<?php

namespace site;

class Front_Page extends Template {

	public function get_section_about() {
		$template = '/template-parts/front-page/about.php';

		$args = array(
			'title' => get_field( 'about_title' ) ?? false,
			'text'  => get_field( 'about_text' ) ?? false,
			'image' => get_field( 'about_image' ) ?? false,
		);

		return $this->render( $template, $args );
	}

	public function get_section_2() {
		$template = '/template-parts/front-page/section2.php';

		$args = array(
			"tab1" => array(
				'icon'    => get_field( 'icon_1' ) ?? false,
				'subicon' => get_field( 'sub_icon1' ) ?? false,
				'title'   => get_field( 'title1' ) ?? false,
				'text'    => get_field( 'text1' ) ?? false,
			),
			"tab2" => array(
				'icon'    => get_field( 'icon_2' ) ?? false,
				'subicon' => get_field( 'sub_icon2' ) ?? false,
				'title'   => get_field( 'title2' ) ?? false,
				'text'    => get_field( 'text2' ) ?? false,
			),
			"tab3" => array(
				'icon'    => get_field( 'icon_3' ) ?? false,
				'subicon' => get_field( 'sub_icon3' ) ?? false,
				'title'   => get_field( 'title3' ) ?? false,
				'text'    => get_field( 'text3' ) ?? false,
			),
		);

		return $this->render( $template, $args );
	}

	public function get_section_possibilities() {
		$template = '/template-parts/front-page/possibilities.php';

		$args = array();

		$post_type_args = array(
			'post_type'      => 'possibilities',
			'post_status'    => 'publish',
			'posts_per_page' => 20,
		);

		$posts = get_posts( $post_type_args );

		if ( $posts ) {
			$i = 0;
			foreach ( $posts as $post ) {
				$post_id = $post->ID;

				$item = array (
					'title' => get_the_title( $post_id ),
					'icon'  => get_field( 'possibilities_icon', $post_id ) ?? false,
					'text'  => get_field( 'possibilities_text', $post_id ) ?? false,
					'row_end' => ($i==2)?'col_last':false,
					'clear' => ($i==2)?true:false
				);

				array_push( $args, $item );
				$i++;
				if ($i==3) $i = 0;
			}
		}

		return $this->render( $template, $args );
	}

	public function get_section_our_works(){
		$template = '/template-parts/front-page/our_works.php';
		
		$args = array();
		
		$post_type_args = array(
			'post_type'      => 'ourworks',
			'post_status'    => 'publish',
			'posts_per_page' => 8,
			'order'=> 'ASC',
		);
		
		$posts = get_posts( $post_type_args );
		
		if ( $posts ) {
			foreach ( $posts as $post ) {
				$post_id = $post->ID;
				$post_link = get_post_permalink($post_id);
				
				$item = array (
					'post_link' => $post_link,
					'title' => get_the_title( $post_id ),
					'image'  => get_field( 'image', $post_id ) ?? false,
					'link'  => get_field( 'link', $post_id ) ?? false,
				);
				
				array_push( $args, $item );
			}
		}
		
		return $this->render( $template, $args );
	}

}
