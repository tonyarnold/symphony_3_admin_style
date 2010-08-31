<?php

	Class Extension_Symphony_3_Admin_Style extends Extension {
	
		/**
		 * Extension information
		 */
		 
		public function about() {
			return array(
				'name' => 'Symphony 3 Admin Style',
				'version' => '1.0',
				'release-date' => '2010-08-31',
				'author' => array(
					'name' => 'Tony Arnold',
					'website' => 'http://thecocoabots.com',
					'email' => 'tony@thecocoabots.com'
				),
				'description' => 'A backport of the styles from Symphony 3\'s administration user interface.'
			);
		}
	
		/**
		 * Add callback functions to backend delegates
		 */
	
		public function getSubscribedDelegates(){
			return array(
				array('page'			=>	'/backend/',
							'delegate'	=>	'InitaliseAdminPageHead',
							'callback'	=>	'initaliseAdminPageHead')
			);
		}
	
		/**
		 * Load and apply styles
		 */
		 
	
		public function initaliseAdminPageHead($context) {			
		  $page = Administration::instance()->Page;
			$page->addStylesheetToHead(URL . '/extensions/symphony_3_admin_style/assets/admin.css', 'screen', 40);
		}
				
	}
		