---  
description: Create a page on your WordPress website that displays a random post from your blog. I think displaying random posts is a fun feature and easy
title: How To Display a Random Post in WordPress
layout: post
tags: 
- Wordpress
---
## Create a New Template

Using SSH or your favorite FTP client, create a new file in your current theme folder. I named mine random.php.

Here's what you put inside:

<pre rel="PHP"><code class="php">
&lt;?php 
/*
	Template Name: Random
*/
?>
&lt;?php get_header(); ?>

    &lt;div class="post">

	&lt;?php

	    // The Query
	    query_posts('orderby=rand');

	    // The Loop
	    while ( have_posts() ) : the_post();
		echo '&lt;h1>';
		the_title();
		echo '&lt;/h1>';
		the_content();
	    endwhile;

	    // Reset Query
	    wp_reset_query();

        ?>

    &lt;/div><!--END .post-->
	
&lt;?php get_sidebar(); ?>

&lt;?php get_footer(); ?>
</code></pre>

## Create a New Page

Now, Login to your WordPress website and add a new page:

<div class="img-wrap"><img src="{{ site.url }}/images/wordpress_new_page.jpg" alt="" title="wordpress_new_page" class="alignnone size-full wp-image-2328" /></div>

I named my page random with the slug random. That way later, we can just link to www.yoursite.com/random and it will display a new post.

## Assign Template to Page

On the right sidebar of the 'Add Page' page, you should see something like this:

<div class="img-wrap"><img src="{{ site.url }}/images/assign_wp_template_to_page.jpg" alt="" title="assign_wp_template_to_page" class="alignnone size-full wp-image-2329" /></div>

## Enjoy

The last thing you have to do is add a link to www.yourwebsite.com/random anywhere you want. I stuck mine in the sidebar but it should be all set!