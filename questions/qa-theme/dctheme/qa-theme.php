<?



class qa_html_theme extends qa_html_theme_base
{

		function doctype()
		{
			$this->output('<!DOCTYPE html>');
		}
		
		function html()
		{
			$this->output(
				'<html lang="en">'
			);
			
			$this->head();
			$this->body();
			
				$this->output(
				
				'</HTML>',
				"<script type='text/javascript'>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6437471-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>");
		}
		
	    function head()
		{
			$this->output(
				'<head>',
				'<meta http-equiv="Content-type" content="'.$this->content['content_type'].'"/>'
			);
			
			$this->head_title();
			$this->head_metas();
			$this->head_css();
			$this->head_links();
			$this->head_lines();
			$this->head_script();
			$this->head_custom();
			
			$this->output('</head>');
		}
			function head_title()
		{
			$pagetitle=strlen($this->request) ? strip_tags(@$this->content['title']) : '';
			$headtitle=(strlen($pagetitle) ? ($pagetitle.' | ') : '').$this->content['site_title'];
			
			$this->output('<title>'.$headtitle.'</title>');
		}
		
				function head_css()
		{
		     //	$this->output('<link href="http://daverees4.webfactional.com/dcdev/style/css/bootstrap.css" rel="stylesheet">');
			$this->output('<link rel="stylesheet" type="text/css" href="'.$this->rooturl.$this->css_name().'"/>');
			
			if (isset($this->content['css_src']))
				foreach ($this->content['css_src'] as $css_src)
					$this->output('<link rel="stylesheet" type="text/css" href="'.$css_src.'"/>');
					
			if (!empty($this->content['notices']))
				$this->output(
					'<style><!--',
					'.qa-body-js-on .qa-notice {display:none;}',
					'//--></style>'
				);
		}
		
			function head_links()
		{
			if (isset($this->content['canonical']))
				$this->output('<link rel="canonical" href="'.$this->content['canonical'].'"/>');
				
			if (isset($this->content['feed']['url']))
				$this->output('<link rel="alternate" type="application/rss+xml" href="'.$this->content['feed']['url'].'" title="'.@$this->content['feed']['label'].'"/>');
				
			if (isset($this->content['page_links']['items'])) // convert page links to rel=prev and rel=next tags
				foreach ($this->content['page_links']['items'] as $page_link)
					if ($page_link['type']=='prev')
						$this->output('<link rel="prev" href="'.$page_link['url'].'"/>');
					elseif ($page_link['type']=='next')
						$this->output('<link rel="next" href="'.$page_link['url'].'"/>');
		}
		

}
