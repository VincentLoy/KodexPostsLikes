<?php

class Kodex_Posts_Likes_i18n {

	private $domain;

	public function __construct($domain)
	{
		$this->domain = $domain;
		add_action('init', array($this, 'load_kodex_textdomain'));
	}

	public function load_kodex_textdomain() {
		load_plugin_textdomain(
			$this->domain,
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}
}
