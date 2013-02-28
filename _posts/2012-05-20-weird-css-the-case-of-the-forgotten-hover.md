--- 
title: "Weird CSS: The Case of the Forgotten Hover"
layout: post
tags: 
- CSS
---
I was working on a website today when I noticed something quirky about my links' behavior.

First I applied a default color for all links. Then I applied a different color for all links when they are hovered on. Then much later I took a section of links ( one's in the footer ) and gave them a different default color, what i noticed was that when links receive a different color, they all stop having the default hover effect. Maybe some code will make it more clear.

<pre rel="CSS" class="prettyprint"><code>
a { color: blue; } 
a:hover { color: red; } 

.box a { color: green; } 
</code></pre>

<pre rel="HTML" class="prettyprint"><code lang="xhtml">
&lt;a href="#">A Blue Link That Hovers Red&lt;/a> 

&lt;div class="box">
     &lt;a href="#">A Green Link That Doesn't Hover Red&lt;/a>
&lt;/div>

</code></pre>

### Doesn't That Seem Strange

Is it just me, or do you also feel like the green link should still hover red, even though it's default color has been changed?
