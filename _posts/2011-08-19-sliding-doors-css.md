--- 
description: This is a simple to ready Sliding Doors CSS tutorial with examples. Check it out if you'd like to learn more. Share it with your friends!
title: Sliding Doors CSS With (up to) 3 Images
layout: post
tags: 
- General
---
Have you ever designed a great button and wanted to convert it to css?

Do you have a Photoshop button that you would like to grow and shrink around the text it's containing?

Do you know exactly what the sliding doors technique is but are having trouble understanding how to use it?

Well then, this (may) be the tutorial for you!

## Other Tutorials On Sliding Doors

1. For the more technical designer, <a href="http://www.alistapart.com">A List Apart</a> has a great sliding doors tutorial that can be found <a href="http://www.alistapart.com/articles/slidingdoors/">here</a>
2. Another great sliding doors tutorial written by <a href="http://azadcreative.com/">Azad Creative</a> and can be found <a href="http://azadcreative.com/2009/03/bulletproof-css-sliding-doors/">here</a>

## What Is The Sliding Doors Technique

Let's take a look at an example. A while back someone showed me this image:

<div class="img-wrap"><img class="aligncenter size-full wp-image-518" title="post-title-bg" src="{{ site.url }}/images/post-title-bg.jpg" alt="" /></div>

They told me they wanted to use it for titles on a WordPress website. The problem is that **Wordpress titles are generated *dynamically* and therefore you can't depend on titles being a certain width as they will change.**

What you don't want happening is this:

<div class="img-wrap"><img class="aligncenter size-full wp-image-519" title="sliding-doors-too-short" src="{{ site.url }}/images/sliding-doors-too-short.jpg" alt="" /></div>

<p style="text-align: center;">or...</p>

<div class="img-wrap"><img class="aligncenter size-full wp-image-520" title="sliding-doors-too-long" src="{{ site.url }}/images/sliding-doors-too-long.jpg" alt="" /></div>

This is where sliding doors comes in. Here's the basic idea:

1. You break the image into three different images. Left corner, Right corner and Middle.
2. You make your link / title / list item.
3. You wrap that item in three different elements. (I'm using &lt;li&gt;&lt;a href="#"&gt;&lt;span&gt;Your Element&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;)
4. You give each element a background image. (Left corner, Right corner, Middle)
5. You have an awesome CSS effect using Sliding Doors.

## The Code

Alright, you have all gotten through the theory and are ready to get something done already! Let's get started on the code, feel free to copy it and use it freely in your own work.

## The HTML

<pre rel="HTML" class="prettyprint"><code lang="xhtml">
&lt;div class="navigation">
		&lt;ul>
			&lt;li>&lt;a href="#">&lt;span>A Normal Sized Link&lt;/span>&lt;/a>
			&lt;li>&lt;a href="#">&lt;span>A Link That's A Little Bit Longer&lt;/span>&lt;/a>
			&lt;li>&lt;a href="#">&lt;span>Short Link&lt;/span>&lt;/a>
			&lt;li>&lt;a href="#">&lt;span>Warning, this is totally unnecessary. AHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH&lt;/span>&lt;/a>
		&lt;/ul>
&lt;/div>
</code></pre>

## The CSS
<pre rel="CSS"><code>
.navigation {
     display: block;
}

.navigation * {
     font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
     font-size: 13px;
     text-transform: uppercase;
     line-height: 27px;
}
.navigation ul {
     display: block;
     float: left;
     margin: 37px 0 0 20px;
}

.navigation ul li {
     list-style: none;
     float: left;
     margin: 0 0 0 5px;
     background: url(images/middle.jpg) top left repeat-x;
     text-indent: 10px;
}

.navigation ul li a {
     background: url(images/right.jpg) top right no-repeat;
     display: block;
     color: #000;
     text-decoration: none
}

.navigation ul li a span {
     background: url(images/left.jpg) top left no-repeat;
     display: block;
     padding-right: 10px;
}

</code></pre>

## Try Out My Sliding Doors
<div class="button"><a href="http://www.insitedesignlab.com/examples/sliding-doors-demo.html">Demo</a></div>

## Help Me Out

Did you like the tutorial? Hate it? Learn from it? Did it confuse you? Share with your friends or let me know what you did and didn't like! I'll really appreciate it.
