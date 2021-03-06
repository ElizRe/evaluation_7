<?php

	class WINP_SnippetsViewTable extends Wbcr_FactoryViewtables401_Viewtable {

		public function configure()
		{
			/**
			 * Columns
			 */

			$this->columns->clear();
			$this->columns->add('title', __('Snippet title', 'insert-php'));
			$this->columns->add('description', __('Description', 'insert-php'));
			$this->columns->add('where_use', __('Where use?', 'insert-php'));
			$this->columns->add('status', __('Status', 'insert-php'));
			$this->columns->add('actions', __('Actions', 'insert-php'));

			/**
			 * Scripts & styles
			 */
			$this->styles->add(WINP_PLUGIN_URL . '/admin/assets/css/list-table.css');

			//$this->scripts->add(OPANDA_BIZPANDA_URL . '/assets/admin/js/item-view.js');
			//do_action('bizpanda_view_table_register_scripts', $this->scripts, $this->styles);

			$this->runActions();
		}

		/**
		 * Column 'Title'
		 */
		public function columnTitle($post)
		{
			echo $post->post_title;
		}

		public function columnDescription($post)
		{
			echo WINP_Helper::getMetaOption($post->ID, 'snippet_description');
		}

		/**
		 * Column 'Where_use'
		 */
		public function columnWhere_use($post)
		{
			$snippet_scope = WINP_Helper::getMetaOption($post->ID, 'snippet_scope');

			if( $snippet_scope == 'evrywhere' ) {
				echo __('Run everywhere', 'insert-php');
			} else {
				echo '[wbcr_php_snippet id="' . $post->ID . '"]';
			}
		}

		/**
		 * Column 'Status'
		 */
		public function columnStatus($post)
		{
			$is_activate = (int)WINP_Helper::getMetaOption($post->ID, 'snippet_activate', 0);
			$status_class = "wbcr-inp-status-green";

			if( !$is_activate ) {
				$status_class = "wbcr-inp-status-grey";
			}
			echo '<div class="wbcr-inp-status-marker ' . $status_class . '"></div>';
		}

		/**
		 * Column 'Actions'
		 */
		public function columnActions($post)
		{
			$is_activate = (int)WINP_Helper::getMetaOption($post->ID, 'snippet_activate', 0);

			$button_text = __('Activate', 'insert-php');

			if( $is_activate ) {
				$button_text = __('Deactivate', 'insert-php');
			}

			echo '<a href="' . wp_nonce_url(admin_url('edit.php?post_type=' . WINP_SNIPPETS_POST_TYPE . '&amp;post=' . $post->ID . '&amp;action=wbcr_inp_activate_snippet'), 'wbcr_inp_snippert_' . $post->ID . '_action_nonce') . '" class="button"><i class="icon ion-play"></i>' . $button_text . '</a>';
		}

		/*
		 * Activate/Deactivate snippet
		 */
		protected function runActions()
		{
			if( isset($_GET['post_type']) && $_GET['post_type'] == WINP_SNIPPETS_POST_TYPE ) {

				if( isset($_GET['action']) && isset($_GET['post']) && $_GET['action'] == 'wbcr_inp_activate_snippet' ) {

					$post_id = (int)$_GET['post'];

					if( (isset($_GET['_wpnonce']) && !wp_verify_nonce($_GET['_wpnonce'], 'wbcr_inp_snippert_' . $post_id . '_action_nonce')) || !current_user_can('manage_options') ) {
						wp_die('Permission error. You can not edit this page.');
					}

					$is_activate = (int)WINP_Helper::getMetaOption($post_id, 'snippet_activate', 0);

					$status = !$is_activate;

					update_post_meta($post_id, $this->plugin->getPrefix() . 'snippet_activate', $status);

					$redirect_url = admin_url('edit.php?post_type=' . WINP_SNIPPETS_POST_TYPE);
					$redirect_url = add_query_arg(array('wbcr_inp_snippet_updated' => 1), $redirect_url);

					wp_safe_redirect($redirect_url);
					exit;
				}
			}
		}
	}
	