<?php

class BaldursPhotographyClickyAnalytics extends KokenPlugin {

	function __construct() {
		$this->require_setup = true;
		$this->register_hook('before_closing_body', 'render');
	}

	function render() {
	echo <<<OUT
<!-- Clicky Analytics -->
<!--<a title="Google Analytics Alternative" href="http://clicky.com/{$this->data->site_id}"><img alt="Google Analytics Alternative" src="//static.getclicky.com/media/links/badge.gif" border="0" /></a>
<script type="text/javascript">-->
	var clicky_site_ids = clicky_site_ids || [];
	clicky_site_ids.push({$this->data->site_id});
	(function() {
		var s = document.createElement('script');
		s.type = 'text/javascript';
		s.async = true;
		s.src = '//static.getclicky.com/js';
		( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
	})();
</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/{$this->data->site_id}ns.gif" /></p></noscript>
<!-- EOF Clicky Analytics -->
OUT;
	}
}