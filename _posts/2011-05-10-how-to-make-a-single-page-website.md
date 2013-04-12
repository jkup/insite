--- 
description: A simple and straightforward tutorial on how to make a single page website.
title: How to Make a Single Page Website
layout: post
tags: 
- CSS
- General
- HTML
- Tutorials
- Web_Design
---
This tutorial explains how to create a **vertical-scrolling **single page website in four steps.
<div class="button" style="text-align: center;"><a href="http://www.adventuresinwebdesign.com/samples/anchors/blog" target="_blank">Check out the Demo</a></div>
## Designing A Single Page Website
There are at least 3 kinds of Single Page websites. The basic idea is that all content is placed on one page, but only a portion of it is centered on your computer screen at a given time. Then you can watch the old content slide away when you click a link, instead of loading a whole new page. Often, the scroll bar is still visible on the side, so you could actually drag it up and down and see the whole page at once.

The picture below is a screen shot I took of another designer’s website, Eshbeata.com. His first page starts at the top, the second starts at the image gallery, the third page starts where the dirt begins, and the last page is centered around the ocean:

<div class="img-wrap"><img class="alignnone size-full wp-image-317" title="eshbeata" src="{{ site.url }}/images/eshbeata.jpg" alt="Eshbeata.com" /></div>

I classified the types of single page websites by the direction/s that the page scrolls. Here is my breakdown, with examples:

**Vertical Scroll **(Most Common)

<a title="Barrel + Barc" href="http://www.barrelny.com/24/">Barrel + Barc</a>, <a title="Beaver Lab" href="http://www.beaverlab.com/#chi_siamo_a">Beaver Lab</a>, <a title="Little White Umbrella" href="http://www.leahjuaymah.com/index.php">Little White Umbrella</a>, <a title="Eshbeata" href="http://eshbeata.com/">Eshbeata</a>

**Horizontal Scroll**

<a title="Vanity Claire" href="http://www.vanityclaire.com/">Vanity Claire</a>, <a title="Hotel Oxford" href="http://www.hotel-oxford.ro/en">Hotel Oxford</a>, <a title="Lomotek" href="http://www.lomotek.com/article/home">Lomotek</a>

**2D Scroll**

<a title="Steve &amp; Jacqs" href="http://steveandjacqs.com/">Steve &amp; Jacqs</a>

Once again, this post explains the **vertical** method.

When designing your single page website,  you need to decide the following things:

1. Will my page start at the top and scroll down <a title="Eshbeata.com" href="http://www.eshbeata.com/" target="_blank">(like this)</a>, start at the bottom and scroll up <a title="Adventures in web design" href="http://www.adventuresinwebdesign.com/samples/anchors/#about" target="_blank">(like this)</a>, or start in the middle, and move all over <a title="Beaver Lab" href="http://www.beaverlab.com">(like this)</a>?

2. How will you differentiate each page?
+ Will the page be a journey, as with Eshbeata's site, where you travel from above ground to underwater?
+ Will each "page" have a separate background color?
+ Will you put a piece of art that defines the border?
+ No separation at all?

3. Will there be overlap between the pages?
+ If you don't care about overlap, you don't have much to worry about, but if you want each "page" to fill everyone's screen, you need to add extra margin to the bottom of each "page"  to account for different screen sizes.  A netbook might only display 500 pixels, while a 27-inch monitor might display 1200 pixels (depending on the user's resolution settings).. I tend to give 1200 pixels if I want to be completely sure only one page will display at a time.

## The HTML
The html is actually pretty simple. You’ve seen the FAQ pages that have a list of questions at the top, and then you click one and it takes you to the middle of the page (like <a title="University of Michigan FAQ" href="http://www.law.umich.edu/prospectivestudents/admissions/pages/faq.aspx" target="_blank">this</a>)? That’s the technique we’re going to use.

Basically, you’re going to create a navigation just like normal, except where you normally do an href="Link Address", instead of a link address, you will put a pound sign followed by the unique id of each "page":

<pre rel="HTML" class="prettyprint"><code lang="xhtml">
&lt;div id="nav">
     &lt;ul>
	     &lt;li>&lt;a href="#about">About&lt;/a>&lt;/li>
	     &lt;li>&lt;a href="#portfolio">Portfolio&lt;/a>&lt;/li>
	     &lt;li>&lt;a href="#contact">Contact&lt;/a>&lt;/li>
     &lt;/ul>
&lt;/div>
</code></pre>

This lets the browser know that the link is within the page. (Just think about when you use href=”#” causing the page to refresh – it’s the same idea. The “#” is still telling the browser to load the same page, except when you include text after the # sign, it’s further telling the browser to look for link of that name on the same page, and scroll to that location).

So then if you wanted “three” pages in one, you just create an id for each page in the html. Then, the first thing you do within that div is insert the “id” you specified in the navigation within an anchor tag, like this:http://www.insitedesignlab.com/how-to-make-a-single-page-website/

<pre rel="HTML" class="prettyprint"><code lang="xhtml">
&lt;div id="page1">
  &lt;a id="about">&lt;/a>
    About page content goes here.
&lt;/div><!--END page1-->

&lt;div id="page2">
  &lt;a id="portfolio">&lt;/a>
    Portfolio page content goes here.
&lt;/div><!--END page2-->

&lt;div id="page3">
  &lt;a id="contact">&lt;/a>
    Contact page content goes here.
&lt;/div><!--END page3-->
</code></pre>

So that’s it for your html – just add the rest of the html content as you normally would, except it will all go in the same file (likely index.html), and each “page’s” content will go within the appropriate id (#page1, #page2, or #page3).
## The CSS
There is a lot I could tell you about the style sheet for a single page website, but the only crucial thing you need to do is give each page id (#page1, #page2 and #page3 from the HTML example) a height of ~1000 pixels (tall enough to take up a user’s computer screen, unless you want overlap – it’s up to you!). This will cause your total page to be several thousand pixels tall, depending on how many internal pages you have.

The other main consideration is the navigation bar. I tend to make a thin navigation bar (say 70px) that is fixed to the top of the screen, so the user can click between "pages" instead of having to use the scrollbar to find their way around (which ruins the fun of a 1-page website for me).
## JQuery Smooth Scroll
In order to make your page scroll up and down smoothly using jquery, just paste the following code into your html file, right before the “&lt;/body&gt;”. Seriously, that’s it. You don’t need anything in the header, and you don’t need to host a jquery file anywhere on your site. When you click a link in your site that takes you somewhere else **within the same page** it will slide smoothly.

<pre rel="JavaScript" class="prettyprint"><code>

&lt;script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js">&lt;/script>
&lt;script type="text/javascript">
$(document).ready(function(){
                $(".contactLink").click(function(){
                    if ($("#contactForm").is(":hidden")){
                        $("#contactForm").slideDown("slow");
                    }
                    else{
                        $("#contactForm").slideUp("slow");
                    }
                });
            });
            function closeForm(){
                $("#messageSent").show("slow");
                setTimeout('$("#messageSent").hide();$("#contactForm").slideUp("slow")', 2000);
           }

$(document).ready(function() {
  function filterPath(string) {
    return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
  }
  $('a[href*=#]').each(function() {
    if ( filterPath(location.pathname) == filterPath(this.pathname)
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
       if ($target) {
         var targetOffset = $target.offset().top;
         $(this).click(function() {
           $('html, body').animate({scrollTop: targetOffset}, 1000);
           var d = document.createElement("div");
		d.style.height = "101%";
		d.style.overflow = "hidden";
		document.body.appendChild(d);
		window.scrollTo(0,scrollToM);
		setTimeout(function() {
		d.parentNode.removeChild(d);
	        }, 10);
           return false;
         });
      }
    }
  });
});
/*! Smooth Scroll - v1.4.5 - 2012-07-22
* Copyright (c) 2012 Karl Swedberg; Licensed MIT, GPL */
&lt;/script>
</code></pre>

Voilà! Your site scrolls. If you want to change the speed, go to the line that reads

$(scrollElem).animate({scrollTop: targetOffset}, 400, function() {

and change the 400 to whatever you want. (400 = 400 milliseconds).

(Thanks to <a href="https://github.com/kswedberg/jquery-smooth-scroll/">Karl Swedberg</a> for this code!)

## Call To Action
If you appreciated this article, I would be very grateful if you would share it with your friends or leave me a comment. I'm just getting my start as a blogger and would love to hear what I could be doing better.
