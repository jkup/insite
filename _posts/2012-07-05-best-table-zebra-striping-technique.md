--- 
title: Best Table Zebra Striping Technique
layout: post
tags: 
- CSS
- Javascript
---
I was working on a project the other day which needed to display a lot of tabulated data formatted nicely.

It had been a while since I'd done much work with tables so I began looking online for techniques to design great tables with CSS.

Here is what I came up with:

<pre class="codepen" data-type="result" data-user="m1ck3y" data-href="8711/3" data-host="http://codepen.io"  ><code></code></pre>
<script async src="http://codepen.io/assets/embed/ei.js"></script>

### Technique 1 - CSS nth-child

Pretty simple idea. CSS offers the nth-child attribute allowing you to apply specific css to items depending on their order within a list.

The easiest way to achieve this is to apply a CSS attribute to the 'odd' or 'even' rows. Check it out.

<pre rel="CSS" class="prettyprint"><code>
  tr:nth-child(odd) { color: #E5EEFF; }
</code></pre>

#### The Pros 

+ It's super easy
+ Minimal Code

#### The Cons 

+ No IE support - Even up to ie8

### Technique 2 - jQuery Styling

This is a technique I had seen done before, but it comes with a pretty major con.

All you have to do is create your table, include jQuery and then add this line:

<pre rel="JavaScript" class="prettyprint"><code>
  $("tr:odd").css("background-color","#E5EEFF");
</code></pre>

#### The Pros 

+ Works well
+ jQuery means better browser support

#### The Cons 

+ Since the color is added with jQuery, you can't add hover effects with CSS

### Technique 3 - CSS and jQuery Harmony

This is similar to the last technique. The difference being that instead of using jQuery to color the table rows, you just use jQuery to add a CSS class to them allowing you to take care of everything else with CSS.

For this technique, simply call jQuery but this time use a little something like this:

<pre rel="JavaScript" class="prettyprint"><code>
  $("tr:odd").addClass("odd");
</code></pre>

and then add a little CSS

<pre rel="CSS" class="prettyprint"><code>
  tr.odd { background: #E5EEFF; }
</code></pre>

#### The Pros 

+ Everything, this works with all the browsers jQuery supports

#### The Cons 

+ None! I'd even say this technique is worthy of a blog post :)

Have a better technique? Share it in the comments!
