--- 
description: Learn how to make vertical twitter buttons in 1 minute or less. No hacks or cheats, just the way Twitter wants you to do it.
title: How To Create a Vertical Twitter Button
layout: post
tags: 
- Social Networking
---
## The Problem

If you head over to <a href="https://twitter.com/about/resources/buttons">Twitter's Developer Page</a> looking to add a Twitter button to your website you'll notice one thing missing.

**There is no Vertical Twitter Button**

Here is what I'm talking about folks'

<a class="twitter-share-button" href="https://twitter.com/share" data-url="http://insitedesignlab.com" data-count="vertical">Tweet</a><script type="text/javascript">// <![CDATA[
 !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)) js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}} (document,"script","twitter-wjs");
// ]]></script>

Nothing fancy, no hacks here. This is how it's done.
## Vertical Twitter Button
Head over to that same <a href="https://twitter.com/about/resources/buttons">developer page</a> and pick the 'share a link' option.

Customize it with whatever information you want. Your website, size, etc.

Grab the code, it should look something like this:
<pre class="prettyprint" rel="HTML"><code lang="xhtml">
&lt;a class="twitter-share-button" href="https://twitter.com/share" data-url="http://insitedesignlab.com">Tweet&lt;/a>
&lt;script type="text/javascript">// &lt;![CDATA[
 !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)) js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}} (document,"script","twitter-wjs");
// ]]>&lt;/script>
</code></pre>

### Make It Vertical

Take that code and right after the data-url but right before the closing bracket add:

<pre><code lang="xhtml"> data-count="vertical" </code></pre>

## Final Product

You can use this if you like, just swap out insitedesignlab.com with your website.

<pre rel="HTML" class="prettyprint"><code lang="xhtml">
&lt;a class="twitter-share-button" href="https://twitter.com/share" data-url="http://insitedesignlab.com" data-count="vertical">Tweet&lt;/a>
&lt;script type="text/javascript">// &lt;![CDATA[
 !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)) js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}} (document,"script","twitter-wjs");
// ]]>&lt;/script>
</code></pre>

Hope this helps!
