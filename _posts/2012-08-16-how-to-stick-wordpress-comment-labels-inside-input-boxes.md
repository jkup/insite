--- 
title: How To Stick WordPress Comment Labels Inside Input Boxes
layout: post
tags: 
- Wordpress
---
Sorry for the terrible title, it's a work in progress!

Here's what I'm talking about:

<div class="img-wrap"><img class="alignnone size-full wp-image-2384" title="insite_comment_inline_input" src="{{ site.url }}/images/insite_comment_inline_input.jpg" alt="" /></div>

## The Idea

To achieve this effect, we need to do two things. First, run a check and make sure the current user's name / email / website aren't already in the system. For instance, if you have already left a comment on my blog, it should show your info rather than the defaults. Then, if the user's info isn't already saved display those placeholders so that they can disappear when the user starts typing their info.

## The Code

You'll want to go into your theme file and edit *comments.php*

It should look something like this:

<pre rel="PHP"><code lang="xhtml" class="php">
&lt;?php if ( is_user_logged_in() ) : ?>
    &lt;p>Logged in as &lt;a href="&lt;?php echo get_option('siteurl'); ?>/wp-admin/profile.php">&lt;?php echo $user_identity; ?>&lt;/a>. &lt;a href="&lt;?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;&lt;/a>&lt;/p>

        &lt;?php else : ?>
		
	    &lt;?php $js = "onfocus=\"if(this.value==this.defaultValue)this.value='';\" onblur=\"if(this.value=='')this.value=this.defaultValue;\""; ?>
			
	        &lt;?php
			if($comment_author == '') {
				$comment_author = 'Name*';
			}
			if($comment_author_email == '') {
				$comment_author_email = 'Email*';
			}
			if($comment_author_url == '') {
				$comment_author_url = 'Website';
			}
		?>

		&lt;div style="width: 350px; margin-left: 25px; clear: both;">
			&lt;input <?php echo $js; ?> type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		&lt;/div>

		&lt;div style="width: 350px; margin-left: 25px; clear: both;">
			&lt;input &lt;?php echo $js; ?> type="text" name="email" id="email" value="&lt;?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" &lt;?php if ($req) echo "aria-required='true'"; ?> />
		&lt;/div>

		&lt;div style="width: 350px; margin-left: 25px; clear: both;">
			&lt;input &lt;?php echo $js; ?> type="text" name="url" id="url" value="&lt;?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
		&lt;/div>

	&lt;?php endif; ?>
</code></pre>

## One Last Thing

This didn't occur to me at first. But since the values are automatically filled in by default, if the user doesn't enter a website, WordPress will end up displaying a link to 'website' which obviously won't go anywhere.

For this you'll need to edit wp-comments-post.php - it can be found in the root directory of your website.

Find the line ( mine is line 52 ) that starts with $comment_author_url and replace it with this:

<pre rel="PHP" style="height:40px;"><code lang="xhtml">
    $comment_author_url   = ( isset($_POST['url']) && strtolower($_POST['url']) != 'website' )  ? trim($_POST['url']) : null;
</code></pre>

## Improvements

I'm sure there is a prettier way to do this, if anyone has suggestions I'll happily update the post. Also, I'm attaching my entire comments.php file in case anyone wants to just swap theirs out with mine

<a href='http://www.insitedesignlab.com/wp-content/uploads/2012/08/comments.zip'>Download Mine Here</a>

Also, it's worth noting that this will *hopefully* not be a problem soon as HTML5 is implementing the 'placeholder' attribute which will do just what my JavaScript is doing. You will just be able to add an attribute to an input form like so:

<pre rel="HTML" style="height:40px;"><code lang="xhtml">
    &lt;input type="text" placeholder="name" />
</code></pre>
