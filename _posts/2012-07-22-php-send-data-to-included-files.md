---  
description: A simple way to use PHP To Send Data To Included Files. If you're calling an include file, it can access any variables you've defined before
title: PHP Send Data To Included Files
layout: post
tags: 
- PHP
---
## The Dilemma

I was working on a simple project the other day. I was just going to build a few static pages and do it in straight HTML. Then, as usual I discovered I'm incredible lazy and decided I could do a quick and dirty templating system with PHP.

I wanted to make a header.php and a footer.php so I didn't have to re-type the navigation or the footer links. The only issue is the site I was working on needed to have a different banner depending on which page. So I started with a simple include statement like so:

<pre rel="PHP" class="prettyprint"><code>
  &lt;?php require_once("header.php"); ?>
</code></pre>

### My First Thought

Initially, I was going to have a big if elseif statement in my header.php file to figure out which page it is and use the appropriate picture.

But then I thought about all the development talks I've been listening to lately and how they always talk about finding elegant solutions to complicated problems.

### A Better Idea

So then I thought that if each page could send it's corresponding banner URL to the header.php file that would solve all of my problems.

## A Simple Solution

Doing this is actually much easier than I thought. Remember that PHP generates HTML as it is processed by the server. So if you're calling an include file, it can access any variables you've defined before the actual include line. Check out the solution:

<pre rel="PHP" class="prettyprint"><code>
&lt;?php
    $imgUrl = './images/homepage_banner.jpg';
    require_once('header.php');
?>
</code></pre>

And then in your header.php you could use:

<pre rel="Inside Header.php" class="prettyprint"><code>
    &lt;img src="&lt;?php echo $imgUrl; ?>" />
</code></pre>
