--- 
description: I've been seeing more and more of this awesome list item hover effect on the web lately. Learn to do it yourself with this easy tutorial.
title: Amazing List Item Hover Effect
layout: post
tags: 
- CSS
---
I've been seeing this awesome hover effect a lot on the web lately and **just had** to re-create it.

The last place I saw it was on <a href="http://movethewebforward.org/">movethewebforward.com</a> under **Open-Source projects worth your time**

## List Item Hover Effect:

Hover Over List Items To See The Effect.

+ Art party bicycle rights.<span>- Art party bicycle rights vinyl fanny</span>
+ Photo booth mcsweeney's.<span>- Coffee brunch tumblr jean shorts carles</span>
+ Letterpress chambray.<span>- Four loko 3 wolf moon tattooed tumblr.</span>
+ Next level echo.<span>- Irony farm-to-table dreamcatcher.</span>
+ Readymade etsy.<span>- 3 wolf moon tofu mcsweeney's.</span>

## The Code

<pre rel="HTML"><code lang="xhtml">
&lt;li>Art party bicycle rights.&lt;span>- Art party bicycle rights vinyl fanny&lt;/span>&lt;/li>
&lt;li>Photo booth mcsweeney's.&lt;span>- Coffee brunch tumblr jean shorts carles&lt;/span>&lt;/li>
&lt;li>Letterpress chambray.&lt;span>- Four loko 3 wolf moon tattooed tumblr.&lt;/span>&lt;/li>
&lt;li>Next level echo.&lt;span>- Irony farm-to-table dreamcatcher.&lt;/span>&lt;/li>
&lt;li>Readymade etsy.&lt;span>- 3 wolf moon tofu mcsweeney's.&lt;/span>&lt;/li>
</code></pre>

<pre rel="CSS"><code>
li span { opacity: 0;
  -webkit-transition: opacity 0.3s ease-out;
     -moz-transition: opacity 0.3s ease-out;
      -ms-transition: opacity 0.3s ease-out;
       -o-transition: opacity 0.3s ease-out;
          transition: opacity 0.3s ease-out;
}

li:hover > span, .touch li > span { opacity: 1;}
</code></pre>

### Code Attribution - Move The Web Forward

That CSS came straight from <a href="http://movethewebforward.org/">Move The Web Forward.</a> It's one of the best sites on the internet, and you should all go check it out after commenting on my awesome blog post!