--- 
description: This tutorial will show you how to use HTML and CSS to create a great looking button. Taking a simple HTML button and Stylizing it with CSS.
title: Creating A Great CSS Button
layout: post
tags: 
- CSS
---
Looking for an easy way to make great looking buttons using HTML and CSS? You've come to the right place. We're going to cover both creating your own great looking css buttons as well as some great web applications that allow you to build a css button without writing any code!

## Creating Your Own CSS Button

In order to get started, let's do a little bit of HTML. All we really need to get started is a simple HTML class that we can use every time we need to call on our sweet CSS button. Let's get started with a bit of HTML like this:

### The HTML

<pre rel="HTML" class="prettyprint"><code lang="xhtml">
  &lt;a href="#" class="button">Click Me!&lt;/a>
</code></pre>

Now that we have the basic HTML to work with we can get started with the CSS.

### The CSS

<pre rel="CSS" class="prettyprint"><code>
.button {
     border-top: 1px solid #EEE;
     background: #666;
     padding: 3.5px 7px;
     -webkit-border-radius: 39px;
     -moz-border-radius: 39px;
     border-radius: 39px;
     -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
     -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
     box-shadow: rgba(0,0,0,1) 0 1px 0;
     color: white;
     font-size: 15px;
     font-family: verdana, serif;
     text-decoration: none;
     vertical-align: middle;
}
</code></pre>

And there you have a sweet grey button all in CSS!

We use border radius to give the button rounded edges, box shadow to give it a 3-D look and the rest is just standard CSS.
## Using A Web App To Create CSS Buttons
Out of all the generators out there, I have three favorites when it comes to building CSS buttons. They are as follows:

### CSS-Tricks Button Maker

<div class="img-wrap"><a href="http://css-tricks.com/examples/ButtonMaker/"><img class="alignleft size-thumbnail wp-image-1107" style="padding-left: 15px; padding-right: 15px; margin: 0 !important;" title="css-tricks-button-maker" src="{{ site.url }}/images/css-tricks-button-maker.jpg" alt="" /></a></div>

This Button Generator available at Chris Coyier's CSS Tricks website is the best in my opinion. You can choose colors, use gradients, control size and so much more. Plus the out-of-the-box button looks great too!

### CSS Button Generator

<div class="img-wrap"><a href="http://www.cssbuttongenerator.com/"><img class="alignleft size-thumbnail wp-image-1110" style="padding-left: 15px; padding-right: 15px; margin: 0 !important;" title="css-button-generator" src="{{ site.url }}/images/css-button-generator.jpg" alt="" /></a></div>

This Button Generator takes a more Microsoft-centric approach to the CSS it uses but they are both valid and awesome looking. This generator has more options but I find it more complicated to use.

### CSS Button Maker

<div class="img-wrap"><a href="http://www.cssbuttonmaker.com/"><img class="alignleft size-thumbnail wp-image-1111" style="padding-left: 15px; padding-right: 15px; margin: 0 !important;" title="css-button-maker" src="{{ site.url }}/images/css-button-maker.jpg" alt="" /></a></div>

And last but not least, CSS Button Maker provides another easy to use approach to generating good looking CSS Buttons.

Alright, now go make some sweet buttons! If you make any that are totally awesome, be sure to send me a link in the comments! As usual, feel free to use any and all of the code in this tutorial in any capacity you would like, including commercial.
