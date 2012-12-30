---
title: Questions I Had As A Newbie Programmer
layout: post
tags: 
- Programming
---
I was having a talk the other day about the most frustrating moments I had as a beginning programmer.

Then I thought it might be helpful to answer those questions in case any of you are in the same spot now!

## Question 1 - What Are The Differences Between The Programming Languages

<div class="img-wrap"><img class="alignnone size-full wp-image-2451" title="programming_languages" src="{{ site.url }}/images/programming_languages.jpeg" alt="" /></div>

Even as I write the title I realize I'm years away from being qualified to answer that question. But here we go anyway.

### Functional and Procedural Languages

****Chances are no matter which language you pick to start off with it's going to be a procedural language. Honestly, I don't think you even have to concern yourself with functional programming languages for some time, so let's just skip them :)

Procedural languages are similar in a great many ways. Most languages you would pick to begin with will have a relatively similar syntax. They each have their own uses but learning one will make it extremely easy to learn more and more. Let's take a look at some languages that are easy to transition between.

+ C
+ C++
+ Java
+ PHP
+ Perl
+ JavaScript
+ Ruby

Now, these languages are far from identical. They each have uses, for example Java is the language you need if you want to make native Android applications. JavaScript is the language you'll want if you want to have interactions within a web browser.

#### C, the Father 

The biggest thing to understand is that most of the languages you'll be working with will use a syntax similar to the C programming language. So as soon as you learn how to write programs in one, writing basic programs in others will be fairly simple.

## Question 2 - How Can You Get Started With jQuery / PHP / Ruby on Rails?

<div class="img-wrap"><img class="alignnone size-full wp-image-2450" title="Php-vs-Ruby" src="{{ site.url }}/images/Php-vs-Ruby.jpeg" alt="" /></div>

Another thing I struggled with as a true beginner was how to just get up and running with the basic **web** languages. I heard that you could do all sorts of cool things with jQuery but I couldn't figure out how to get it working on a page. I'm sure there are more thorough tutorials elsewhere but here's a quick guide.

### PHP and Ruby on Rails

I'll group these two together as they are fairly similar. The first thing you need, which is actually quite complicated, is your web server to be running the server client of either Ruby or PHP. Although there are many arguments about which language to use for which task, one significant advantage that PHP has over Ruby on Rails is that just about every server from $3 per month shared to $1,000 per month dedicated will come set up for PHP.

To test if you have PHP running on your server, just create a file called info.php and copy / paste this inside:

<pre rel="PHP"><code>
	&lt;?php phpinfo(); ?>
</code></pre>

### jQuery

To get started with jQuery, head over to <a href="http://jquery.com/">their website</a> and click the download button which will take you to a blank page containing a bunch of code. Copy that code and paste it in a blank document, call it something like jquery.js and save it.

Then, create a new folder and put that jquery.js inside. Create a new file, called index.html and put it in the same folder. Inside this file, paste this:

<pre rel="JavaScript"><code lang="xhtml">
&lt;!DOCTYPE html>
&lt;head>
    &lt;title>Getting jQuery To Work&lt;/title>
&lt;/head>
&lt;body>
jQuery is working!
&lt;script type="text/javascript" src="jquery.js">&lt;/script>
&lt;script type="text/javascript">
$(function(){
    alert("Hello world!");
});
&lt;/script>
&lt;/body>
&lt;/html>
</code></pre>

...and that's it!

With jQuery, all you have to do is incude a script tag linking to it in your html page and then write any jQuery you want after that call.

What are questions you had as a beginning programmer?

Are you a beginning programmer now? Ask some questions!