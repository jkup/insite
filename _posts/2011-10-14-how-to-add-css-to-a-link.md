--- 
description: This brief tutorial is meant as an introduction to stylizing HTML links using CSS. It will show you how to create and CSS a Link.
title: How To Add CSS To A Link
layout: post
tags: 
- CSS
---
Styling links is pretty crucial for the modern web designer. Fortunately, it's quite simple to do so let me show you how.

First, you need a link. Any ole' link will do, so let's create one.
## The HTML
<pre rel="HTML" class="prettyprint"><code lang="xhtml">

&lt;a href="http://www.google.com/">This Link Goes To Google!&lt;/a>

</code></pre>

For those of you new to HTML, note that the website you are linking to must be surrounded by quotations and inside what we call an anchor tag. If you want your link to point somewhere other than Google, simply change the web address within the quotes and change the text to whatever you'd like.
## Grabbing The Link
One of the tricky things when you start learning CSS is how to isolate a particular element or group of elements such as the link we just made.

You can use CSS to style all links for the entire website with something like this:

<pre rel="CSS" class="prettyprint"><code>

a {
     color: red;
}

</code></pre>

the *a* before the curly bracket is a selector used for all anchor tags. Basically that snippet of CSS is telling your web browser to render all anchor tag text red. This may be what you are looking for, but more often than not you want to only stylize an individual link or group of links with CSS. There are a few ways to do this.

Perhaps the easiest way to do this is to wrap the links you want to select inside an HTML element. For this example let's use the HTML div element to style a particular link. The HTML looks something like this:

<pre rel="HTML" class="prettyprint"><code lang="xhtml">

&lt;a href="#">This link will not be affected&lt;/a>

     &lt;div class="individual">

          &lt;a href="#">This link will be affected&lt;/a>

     &lt;/div><!--END .individual-->

&lt;a href="#">This link will also not be affected&lt;/a>

</code></pre>

Let's take a brief look at this. Unlike last time we now have three different links*. However the middle link is *wrapped* inside this "div class individual". That allows us to do something like this in the CSS:

*Also, this time I substituted the # key for an actual link, feel free to change it to whatever it is that you need.

<pre rel="CSS"><code>

.individual a {
     color: red;
}

</code></pre>

Now we can leave all of the other links alone and tell the browser to only change the color of links that are inside the *individual *class. If you were to run that code you would just see two standard links and a red link in the middle.
## The CSS
Now that we have some proper markup and the ability to only grab the links we want, let's style them. Some of my favorite things to do to links are:

<pre rel="CSS"><code>

.individual a {
     text-decoration: none;
     color: #666;
     font-size: 14px;
}

.individual a:hover {
     color: #eee;
     text-decoration: underline;
}

</code></pre>

Alright, let's break this one down.

+ Text Decoration - By default, links come underlined on websites, by selecting *none* we remove the underline from links.
+ Color - Pretty self explanatory, you can choose any color you want for your links instead of the default blue.
+ Font Size - One thing that I sometimes do is make my links a bit larger than the rest of the text, just to make them pop out a little more.
+ a:hover - One of the great things you can do with CSS and links is control how the behave when the user's mouse hovers over them. In the above example, they change to a lighter color and underline. I'm sure you can think of really creative and fun things to do with this effect.

You should be all set! Ask if you have questions and be sure to check out this awesome <a href="http://w3schools.com/cssref/default.asp">CSS reference list</a> for more CSS ideas.
