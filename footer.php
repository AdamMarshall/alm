</div>

<div id="footer">
 <ul>  
  
  <li class="footerlinks">
	<?php wp_page_menu( array('exclude' => 26 ) ); ?>
  </li>
  
  <li class="footerlinks">
   <ul>
	<li><a href="<?php bloginfo('url'); ?>/wp-admin/index.php">Admin Login</a></li> 
	<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="Get RSS feed">RSS Posts</a></li>
	<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>" title="Get RSS feed">RSS Comments</a></li>
   </ul>	
  </li>
  
 </ul>	
</div>
   
   <?php wp_footer(); ?> 

<!-- google analytics tracking code --> 
<script type="text/javascript"> 
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script> 
<script type="text/javascript"> 
try {
var pageTracker = _gat._getTracker("UA-8777128-7");
pageTracker._trackPageview();
} catch(err) {}</script> 
<!-- end google analytics --> 
</body>
</html>