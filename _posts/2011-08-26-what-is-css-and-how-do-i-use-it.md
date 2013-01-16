--- 
description: "A great place to start learning about CSS or Cascading Style Sheets. "
title: What is CSS And How Do I Use It
layout: post
tags: 
- CSS
---
Hello everyone.

Today we're going to be talking about **CSS** or **Cascading Style Sheets**. I remember very clearly how confusing *CSS* was to me when I was just starting off with web design. This post is designed to give you a little history on *CSS* and then point you in the right direction to start learning how to use them.

We're going to break this post into 4 categories. If you're looking for a quick answer, here's a table of contents to help you find it fast.

+ <a href="#what">What Is CSS</a>
+ <a href="#why">Why We Use CSS</a>
+ <a href="#how">How To Get Started</a>
+ <a href="#where">Where To Go From Here</a>

<a name="what"></a>
## What Is CSS
According to the <a href="http://en.wikipedia.org/wiki/Cascading_Style_Sheets">Wikipedia Article</a>, **CSS** or **Cascading Style Sheets** is a 

<blockquote><a title="Style sheet language" href="http://en.wikipedia.org/wiki/Style_sheet_language"><span style="color: #808080;">style sheet language</span></a> used to describe the <a title="Presentation semantics" href="http://en.wikipedia.org/wiki/Presentation_semantics"><span style="color: #808080;">presentation semantics</span></a> (the look and formatting) of a document written in a <a title="Markup language" href="http://en.wikipedia.org/wiki/Markup_language"><span style="color: #808080;">markup language</span></a>. Its most common application is to style <a title="Web page" href="http://en.wikipedia.org/wiki/Web_page"><span style="color: #808080;">web pages</span></a> written in <a title="HTML" href="http://en.wikipedia.org/wiki/HTML"><span style="color: #808080;">HTML</span></a> and <a title="XHTML" href="http://en.wikipedia.org/wiki/XHTML"><span style="color: #808080;">XHTML</span></a>, but the language can also be applied to any kind of <a title="XML" href="http://en.wikipedia.org/wiki/XML"><span style="color: #808080;">XML</span></a> document, including <a title="Plain Old XML" href="http://en.wikipedia.org/wiki/Plain_Old_XML"><span style="color: #808080;">plain XML</span></a>, <a title="Scalable Vector Graphics" href="http://en.wikipedia.org/wiki/Scalable_Vector_Graphics"><span style="color: #808080;">SVG</span></a> and <a title="XUL" href="http://en.wikipedia.org/wiki/XUL"><span style="color: #808080;">XUL</span></a>.</span></blockquote>

**Confused yet?**

As with many Wikipedia articles, they are written by experts in the field and often times come off a little *too technical* for the average person. Let me simplify things for you. When you are designing a web page, the first thing you'll want to do is create the **HTML. **HTML stands for **HyperText Markup Language** and often looks a little something like this:

<pre rel="HTML"><code lang="xhtml">

&lt;html>
     &lt;head>
          &lt;title>My Page Title&lt;/title>
     &lt;/head>

     &lt;body>
          Hello World! This is the content I want displayed on  my website!
     &lt;/body>
&lt;/html>

</code></pre>

Now, the **HTML** is what your website looks like to search engines. It should be clean, well formatted and everything should be named semantically.

Let's quickly cover what I mean by naming things semantically. Let's say you wanted to have two sections on your website. One of them being your main content area and the other being your sidebar. It would look something like this:

<pre rel="HTML"><code lang="xhtml">

&lt;html>
     &lt;head>
          &lt;title>My Page Title&lt;/title>
     &lt;/head>

     &lt;body>

          &lt;div id="page_wrap">
               &lt;div id="main_content">
                    Hello World! This is the content I want displayed on  my website!
               &lt;/div><!--END #main_content-->

               &lt;div id="sidebar">
                    Hello again world! This is the content I want on my sidebar!
               &lt;/div><!--END #sidebar-->
          &lt;/div><!--END #page_wrap-->

     &lt;/body>
&lt;/html>

</code></pre>

Just take notice, my main content area is named? You guessed it! "main_content". All too often I start working on someone else's project just to find that they named there elements things like "main-2" or "area_left". Make it easy for yourself and name your elements intuitively so you'll always know what they're doing!

### Alright alright, How Does CSS Fit In?

Now, if you run the code above you'll notice that the area we named "sidebar" is just showing up right below your main content. That's obviously not what we are looking for.

**CSS** allows us to take an **HTML** document and specify color, spacing, size and position (and so much more!).

<a name="why"></a>
## Why We Use CSS

With the millions and millions of web sites on the internet. Can you imagine how boring and difficult to use they would be if they were all white pages with plain black text? **CSS** allows us to do two major things:

1. **Get Creative.** Make your web site look great, and make the aesthetics pleasing to your users!
2. **Help The User Experience.** Position your elements in a way that they are easy to find and use.

It's been a long time since the only tools we had to style the web were tables and images. We can now control the look, feel and functionality of every aspect within our web sites. This is a great tool, even if you don't want anything artistic or stylized. For example, take a look at <a href="http://www.google.com">Google</a>. They have a very simple, plain, easy to use interface, yet that is all made possible by **Cascading Style Sheets**.

<a name="how"></a>
## How To Get Started

Alright, we're past the introduction and we now know why we use **CSS** and what it can do. Let's actually start doing some!

In my opinion, the absolute best place to get started learning **CSS** is <a href="http://www.w3schools.com/">w3schools.com</a>. They provide a completely free, interactive learning approach to many web languages. Honestly, it's how I got my start in the business. Their tutorials are easy to use and fun. Check out their <a href="http://www.w3schools.com/css/default.asp">Introduction To CSS Tutorial Here!</a>

### Ok, But How Do I Make My Own CSS?

I remember this being somewhat of a hiccup when I was first getting my start. I played with the w3schools examples and had a lot of fun, but I couldn't figure out how to actually get started on my own. Writing your own CSS  can either be done locally on your computer, or on a web server.

#### How Do I Use CSS On My Own Computer

1. Create a new folder named something like "My Website"
2. Open your favorite text editor ( I use Notepad++ but you can also use Notepad(Windows), Gedit(Linux), or TextEdit(Mac) depending on your Operating System)
3. Create a new file and name it index.html (<span style="color: #ff0000;">Make Sure You Change The Filetype. You Don't want it to be index.html.txt.</span>)
4. Create another file and name it style.css (<span style="color: #ff0000;">Make Sure You Change The Filetype. You Don't want it to be style.css.txt.</span>)
5. Save both files in your "My Website" folder
6. With your text editor open, go back into your "My Website" folder and open "index.html" with your favorite web browser(it should be blank)
7. Go back to "index.html" and insert your HTML code. Starter sample provided below

<pre rel="HTML"><code lang="xhtml">
&lt;html>
     &lt;head>
          &lt;link rel="stylesheet" type="text/css" media="screen" href="/style.css" />
          
           &lt;title>My Page Title&lt;/title>
     &lt;/head>

     &lt;body>

          &lt;div id="page_wrap">
               &lt;div id="main_content">
                    Hello World! This is the content I want displayed on  my website!
               &lt;/div><!--END #main_content-->

               &lt;div id="sidebar">
                    Hello again world! This is the content I want on my sidebar!
               &lt;/div><!--END #sidebar-->
          &lt;/div><!--END #page_wrap-->

     &lt;/body>
&lt;/html>

</code></pre>

&nbsp;
1. Now open your "style.css" file and start adding CSS!
2. Save both files and then refresh your browser (F5)
3. There you go!

<a name="where"></a>
## Where Do I Go From Here

After you've finished getting your feet wet with CSS, you should definitely check out my personal favorite **CSS** web site, <a href="http://css-tricks.com/">CSS-Tricks</a>. CSS-Tricks is a wonderful blog curated by <a href="http://chriscoyier.net/">Chris Coyier</a> who is one of my favorite designers. Not only does this blog have tons of great free information, but it also has an incredible forum community where you can go to ask for **CSS** help.
## Good Luck
I hope this articled helped in answering your questions. If there is anything I missed or anything you'd like to see more of, drop me a comment below and I'll get right back to you!