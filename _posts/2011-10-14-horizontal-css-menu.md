--- 
description: This easy to follow tutorial will show you exactly how to create and style your own horizontal menu's using just HTML and CSS.
title: Horizontal CSS Menu
layout: post
tags: 
- CSS
---
If you're looking to make a horizontal menu for your website using CSS &amp; HTML this tutorial will show you how.
## The HTML
Let's start with the HTML. You're going to want to select anywhere in the body of your HTML file that you want the menu to go and insert something like this:

<pre rel="HTML" class="prettyprint"><code>
&lt;ul>
	&lt;li>Home&lt;/li>
	&lt;li>About Us&lt;/li>
	&lt;li>Portfolio&lt;/li>
	&lt;li>blog&lt;/li>
	&lt;li>Contact Us&lt;/li>
&lt;/ul>
</code></pre>

This is just your basic unsorted list (&lt;ul&gt;) with as many or as few list items (&lt;li&gt;) as you'd like. Since this is going to be a navigation menu, let's go ahead and make sure all of those list items are linking somewhere. Now your code should look like this:

<pre rel="HTML" class="prettyprint"><code lang="xhtml">
&lt;ul>
	&lt;li>&lt;a href="#">Home&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">About Us&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">Portfolio&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">blog&lt;/a>&lt;/li>
	&lt;li>&lt;a href="#">Contact Us&lt;/a>&lt;/li>
&lt;/ul>
</code></pre>

Now, you'll want to replace the # with the link that you would like. For my website I would make the home link http://www.insitedesignlab.com and the contact page http://www.insitedesignlab.com/contact so they would look like:

<pre rel="HTML" class="prettyprint"><code lang="xhtml">
&lt;ul>
	&lt;li>&lt;a href="http://www.insitedesignlab.com/">Home&lt;/a>&lt;/li>
	&lt;li>&lt;a href="http://www.insitedesignlab.com/contact">Contact Us&lt;/a>&lt;/li>
&lt;/ul>
</code></pre>

## The CSS
Alright, now we're done with the boring part and can turn that unsorted list into an awesome horizontal navigation menu.

Now we are going to stylize the unsorted list using CSS and turn it into a menu, if you're not super familiar with using CSS to style HTML, pause here and check out my post on <a href="http://www.insitedesignlab.com/what-is-css-and-how-do-i-use-it/">what is CSS and how to use it</a>.

As long as you understand how to apply CSS to HTML and are set up to do so, we can go ahead and get started. The first thing we'll need to do is make the list horizontal. It's really all we have to do to technically have a horizontal CSS menu but we'll do a whole lot more for good measure.

As I said, all we technically have to do is apply a simple float to the list items. Something like this will do:

<pre rel="CSS" class="prettyprint"><code>

li {
     float: left;
}

</code></pre>

Now, doing this poses two problems:

1. The bullet points of each list item overlap.
2. The list items run right into each other.

These can be fixed very easily by adding:

<pre rel="CSS" class="prettyprint"><code>

li {
     float: left;
     list-style: none;
     padding-right: 20px;
}

</code></pre>

And there you have the basics of a horizontal css menu. Just for fun, let's add a bit of style to it:

<pre rel="CSS" class="prettyprint"><code>

* {
     margin: 0;
     padding: 0;
}

ul {
     width: 500px;
     height: 48px;
     margin: 0 auto;
     background: #EEE;
     border: 1px solid #000;
}

li {
     float: left;
     list-style: none;
     padding-right: 10px;
     padding-left: 10px;
     border-left: 1px solid #666;
     font-size: 24px;
     line-height: 48px;
}

a {
     color: #000;
     text-decoration: none;
}

a:hover {
     color: #666;
}

</code></pre>

And there you go! Your very own horizontal menu built in HTML and CSS. Feel free to just copy and use my code for anything you are working on, commercial or otherwise.

Good Luck!
