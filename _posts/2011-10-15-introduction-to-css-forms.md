--- 
description: This is a brief introduction to styling HTML forms by using CSS. This tutorial will show a few different examples of CSS forms.
title: Introduction To CSS Forms
layout: post
tags: 
- CSS
---
Forms are pretty awesome, but who wants to fill out a boring one? It's easy to customize your web form, even if you don't know a lot about HTML and CSS.

To start, we need some sort of basic form. If you've already got one on your site, feel free to use it. Otherwise, I made a basic form for the sake of this blog post. It should look something like this:

<pre rel="HTML"><code>
&lt;form action="#">
     &lt;fieldset>
          &lt;legend>Title Of Your Form&lt;/legend>
               &lt;label for="name">Name&lt;/label>&lt;input id="name" type="text" />
               &lt;label for="e-mail">E-mail&lt;/label>&lt;input id="e-mail" type="text" />
                     &lt;input type="submit" value="Submit" />
     &lt;/fieldset>
&lt;/form>
</code></pre>

That should display something like this:

<form action="#">
<fieldset><legend>Title Of Your Form</legend><label for="name">Name</label>
<input id="name" type="text" />

<label for="e-mail">E-mail</label>
<input id="e-mail" type="text" />
<p class="submit"><input type="submit" value="Submit" /></p>
</fieldset>
</form>

Now, that doesn't look so bad, but it could definitely use some style. So let's start adding some CSS. Let's try something like this:

<pre rel="CSS"><code>
fieldset {
     border: 1px solid #eee;
     padding: 25px;
     float: left;
}

legend {
     color: #666;
     font-size: 20px;
}

form p {
     margin-bottom: 20px;
}

form label {
     margin-right:20px;
     color: #666;
}

form input {
     float: right;
     color: #000;
     background: #eee;
     border: 1px solid #666;
}
</code></pre>

Now we should have something much nicer looking like this:

<form action="#">
<fieldset style="border: 1px solid #eee; padding: 25px; float: left;"><legend style="color: #666; font-size: 20px;">Title Of Your Form</legend>
<p style="margin-bottom: 20px;"><label style="margin-right: 20px; color: #666;" for="name">Name</label><input id="name" style="float: right; color: #000; background: #eee; border: 1px solid #666;" type="text" /></p>

<p style="margin-bottom: 20px;"><label style="margin-right: 20px; color: #666;" for="e-mail">E-mail</label><input id="e-mail" style="float: right; color: #000; background: #eee; border: 1px solid #666;" type="text" /></p>

<p class="submit" style="margin-bottom: 20px;"><input style="float: right; color: #000; background: #eee; border: 1px solid #666;" type="submit" value="Submit" /></p>
</fieldset>
</form>

<div class="clearfix"></div>

Now that's a nice looking form!

As usual, feel free to use this code in any project you are working on, commercial or otherwise. Feel free to change the colors around and leave a link in the comments if you make an awesome looking form and want to share.

Good Luck!