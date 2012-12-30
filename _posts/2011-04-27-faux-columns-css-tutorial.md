--- 
description: A simple, straightforward Faux Columns CSS tutorial for your website. Code and images included. Please Share and subcribe to our RSS feed!
title: Faux Columns CSS Tutorial
layout: post
tags: 
- CSS
- Freebies
- HTML
- Tutorials
---
Hey everyone, so today I want to talk about 'Faux Columns' in CSS. The reason you **need** to use faux columns is when you have a sidebar and a main content area with different backgrounds and you would like them to end at the same place, regardless of which section is longer. If you'd like to see examples, check them out below!
<div class="button"><a href="http://www.insitedesignlab.com/examples/fauxcolumns.html">Faux Columns</a></div>
<div class="button"><a href="http://www.insitedesignlab.com/examples/nofauxcolumns.html">Without Faux Columns</a></div>
<div style="margin-top: 20px;">*NOTE: For those of you more technically inclined, **A List Apart** has a great <a href="http://www.alistapart.com/articles/fauxcolumns/">Faux Columns Tutorial</a> on their website. They have an incredible website with loads of great information and tutorials, but sometimes I find their tutorial style a little to technical for me.</div>
## The Concept of Faux Columns
As far as I can tell, there is no way with CSS to have two separate columns that stretch vertically 'as far as they need to'. As you can see with the example without faux columns you get a very glitchy look if either column is longer than the other. As inefficient as it may seem, the only way to accomplish this is by using an image and repeating it vertically. This image needs to be placed in an element (div or section) that wraps around both the main area and the sidebar.
## The Hack
Just a reminder that the faux columns technique will not work unless you add &lt;br style="clear: both;" /&gt; before you end the element containing the repeating image. Before we get into the code, you can also feel free to click on the 'Faux Columns' link above and just steal the code off of my example, the same goes for the <a href="http://www.insitedesignlab.com/examples/images/main-bg.jpg">background image</a>.
## The HTML
<pre rel="HTML"><code lang="xhtml">
<div id="main_content">
     &lt;div id="content">
        &lt;h2>This is the main content for your website&lt;/h2>
          &lt;p>Your Main Content Goes Here&lt;/p>
     &lt;/div><!--/#content-->

     &lt;div id="sidebar">
        &lt;h2>This is the sidebar area for your website&lt;/h2>
          &lt;p>Your Sidebar Content Goes Here&lt;/p>
     &lt;/div><!--/#sidebar-->

<br style="clear: both;" />

</div><!--END. content-->

</code></pre>

## The CSS
<pre rel="CSS"><code>
#main_content {
     width: 900px;
     background: url('images/main-bg.jpg');
     position: relative;
     float: left;
}

#content {
     width: 700px;
     float: left;
}

#sidebar {
     width: 200px;
     float: right;
}

</code></pre>

## Conclusion
I hope this tutorial works well for you, if there is anything I can do to improve it please let me know! Please share with your friends and don't forget to sign up for our RSS feed to stay updated on our latest posts!
