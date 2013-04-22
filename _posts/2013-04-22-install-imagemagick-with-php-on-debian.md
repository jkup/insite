---
title: Install ImageMagick with PHP on Debian
layout: post
tags: Linux
---

I've been working on an app lately that involves some image manipulation. Most of the time I use <a href="http://php.net/manual/en/book.image.php">GD</a> for image manipulation but there are a lot of things it just can't do easily.

When I run into prolems GD can't solve, I turn to <a href="http://www.imagemagick.org/">ImageMagick</a>.

ImageMagick is great, it's powerful and easy-to-use. Unfortunately, it's an enormouse pain to install and set-up.

It was far from easy setting it up on Debian / Ubuntu -- so here's how I did it. I hope it helps.

## 1. Install ImageMagick

You can get ImageMagick and its dependencies from the apt-get repository.

<pre rel="Terminal"><code>
sudo apt-get update
sudo apt-get build-dep imagemagick
</code></pre>

## 2. Get The PHP Dev Package

In order to use PHP to interact with ImageMagick you'll need this package.

<pre rel="Terminal"><code>
sudo apt-get install php5-dev
</code></pre>

## 3. Get the PECL Imagick Package

Now that you have the PHP Dev tools and ImageMagick, you just need the Imagick package to interface between PHP and ImageMagick.

<pre rel="Terminal"><code>
pecl install imagick
</code></pre>

## 4. Write Some Sweet PHP / ImageMagick Code

Now you can use a ton of great tools, check out <a href="http://php.net/manual/en/book.imagick.php">a list</a> here!

<pre rel="PHP" class="prettyprint"><code>
&lt;?php
	$thumb = new Imagick();
	$thumb->readImage('myimage.gif');
	$thumb->resizeImage(320,240,Imagick::FILTER_LANCZOS,1);
	$thumb->writeImage('mythumb.gif');
	$thumb->clear();
	$thumb->destroy(); 
?>
</code></pre>
