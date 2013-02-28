--- 
title: Breaking The Page Wrap
layout: post
description: Ok, so before I go into this tutorial I wanted to say that I am still learning the in's and out's of CSS and while I figured out how to get this
tags: 
- CSS
- Tutorials
- Web Design
---
## Precursor
Ok, so before I go into this tutorial I wanted to say that I am still learning the in's and out's of CSS and while I figured out how to get this effect to work, I'm still having some problems when trying to embellish upon it. That being said...

## The Idea
So, often times I want a navigation bar or a featured post area that breaks out of the page wrap currently containing my site. Before now I've been just ending the page wrap, creating an element with absolute position and then starting the page wrap back up again. I know that could not be the best way of approaching this and a few days ago I found a method that works at least in some situations.

<div class="button"><a href="http://www.insitedesignlab.com/examples/extend.html">Check out The Demo</a></div>

## The Code
<pre rel="CSS" class="prettyprint"><code> 
	#pagebreaker { 
		 background: #c9c9c9; 
		 padding: 30px; 
		 margin: 0 0 13px -10000px; 
		 padding: 30px 0 0 10000px; 
		 height: 200px; 
	} 
</code></pre>
It's pretty simple really, although I'm having problems trying to do much more with it. The basic idea is using a negative margin to push the element off screen to either side, and then use padding to bring it back to where it belongs, leaving the background color along the way.
