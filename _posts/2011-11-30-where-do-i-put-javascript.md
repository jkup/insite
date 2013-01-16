--- 
description: Wondering where you need to put JavaScript inside an HTML file? This simple tutorial shows you where to insert your code and why it's best.
title: Where Do I Put JavaScript
layout: post
tags: 
- Javascript
---
<div class="img-wrap"><img class="size-full wp-image-1553 aligncenter" title="code" src="{{ site.url }}/images/code.jpg" alt="" /></div>

### Well, I've Got My HTML

### And I've Got My JavaScript

## So, Where In My HTML Do I Put My JavaScript?

The answer is deceptively simple.

*Your JavaScript should go exactly where you need it to be!*

Alright, I know that's probably not exactly what you were looking for but it's extremely helpful. However, if you're looking for a quick answer, 99% of the time it's best to put your JavaScript at the end of your HTML right before the &lt;/body&gt; tag.
## Most Of The Time You Put JavaScript At The Bottom
Putting your JavaScript at the bottom ensures that it loads after the HTML is complete. This means that your viewer will see all of the content load on the page before any JavaScript is executed. As JavaScript usually is used to provide interactivity to your users, this method is almost always preferable.

<pre rel="HTML"><code>
&lt;html>
     &lt;head>
          &lt;title>Example Site&lt;/title>
     &lt;/head>
     &lt;body>
          &lt;h1>Example Headline&lt;/h1>
          &lt;p>Example Paragraph&lt;/p>
               &lt;ul>
                    &lt;li>List Item #1&lt;/li>
                    &lt;li>List Item #2&lt;/li>
               &lt;/ul>
          &lt;script src="myjavascript.js">&lt;/script>
     &lt;/body>
&lt;/html>
</code></pre>

## What If I Put JavaScript At The Top

Although there is technically nothing wrong with this method, it is important to understand the repercussions of doing so. Let's look at a simple example using a JavaScript alert box.

<pre rel="HTML"><code>
&lt;html>
     &lt;head>
          &lt;title>Example Site&lt;/title>
               &lt;script>alert("Hello World!");&lt;/script>
     &lt;/head>

     &lt;body>
          &lt;h1>Example Headline&lt;/h1>
          &lt;p>Example Paragraph&lt;/p>
               &lt;ul>
                    &lt;li>List Item #1&lt;/li>
                    &lt;li>List Item #2&lt;/li>
               &lt;/ul>
     &lt;/body>
&lt;/html>
</code></pre>

Now, by placing the JavaScript in the &lt;head&gt; section of your HTML is causes the alert box inside to load before any of the content. There may be times where this is preferable, such as making your visitors agree to a form before they are allowed to see your content.

The only point to take home here is that **JavaScript** can be loaded anywhere in your HTML, but the place you put your code determines when the script will run.