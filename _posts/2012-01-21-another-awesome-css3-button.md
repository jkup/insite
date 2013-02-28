--- 
description: Simple, Beautiful and Easy to implement this is yet another amazing CSS3 Button Tutorial. One of the best CSS3 buttons on the internet.
title: Another Awesome CSS3 Button
layout: post
tags: 
- CSS
---
I was reading an article on <a href="http://blog.bufferapp.com/">http://blog.bufferapp.com/</a> the other day when I noticed some **incredible** CSS3 buttons.
<div class="greenbutton">Example:
<a class="huge_button green" href="#">This Is So Cool</a></div>

<pre rel="The HTML" class="prettyprint"><code lang="xhtml">
  &lt;a class="huge_button green" href="#">These Are So Cool&lt;/a>
</code></pre>

<pre rel="The CSS" class="prettyprint"><code> 
a { 
     text-decoration: none; 
     color: #444; 
     margin-top: 50px; 
     float: left; 
     font-family: "Lucida Grande", Verdana, Sans-serif; 
} 
a.huge_button { 
     -moz-border-radius: 50px; 
     -webkit-border-radius: 50px; 
     font-family: Arial,sans-serif; 
     font-size: 28px; 
     font-weight: bold; 
     letter-spacing: 0; 
     padding: 15px 20px; 
     text-decoration:none; 
} 

a.huge_button:hover { 
     -moz-box-shadow: 0 0 5px #666; 
     -webkit-box-shadow: 0 0 5px #666; 
} 

a.huge_button:active { 
     background-image: -moz-linear-gradient(top, #549a2f, #a7ed82); /* FF3.6 */ 
     background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #549a2f),color-stop(1, #a7ed82)); /* Saf4+, Chrome */ 
     filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#549a2f', EndColorStr='#a7ed82'); /* IE6,IE7 */ 
     -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#549a2f', EndColorStr='#a7ed82')"; /* IE8 */ 
     outline: 0; 
} 
.green { 
     background-color: #7AC054 !important; 
     background-image: -moz-linear-gradient(top, #a7ed82, #549a2f) !important; /* FF3.6 */ 
     background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #a7ed82),color-stop(1, #549a2f)) !important; /* Saf4+, Chrome */ 
     filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#a7ed82', EndColorStr='#549a2f') !important; /* IE6,IE7 */ 
     -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#a7ed82', EndColorStr='#549a2f')" !important; /* IE8 */ 
} 
.green:active { 
     background-color:#7AC054 !important; 
     background-image: -moz-linear-gradient(top, #549a2f, #a7ed82) !important; /* FF3.6 */ 
     background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #549a2f),color-stop(1, #a7ed82)) !important; /* Saf4+, Chrome */ 
     filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#549a2f', EndColorStr='#a7ed82') !important; /* IE6,IE7 */ 
     -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#549a2f', EndColorStr='#a7ed82')" !important; /* IE8 */ 
} 
</code></pre>

## Ta-Da! Awesome CSS3 Buttons

They're pretty sweet right? Remember, I didn't come up with them, <a href="http://blog.bufferapp.com/">http://blog.bufferapp.com/</a> did.

Enjoy!
