--- 
description: This tutorial will show you how to edit WordPress. This is great if you are just getting your start with a WordPress website.
title: How To Edit WordPress
layout: post
tags: 
- Wordpress
---
Are You Ready To Get Started Editing Your WordPress Site?

Let's dive in!

<span style="color: #ff0000;">This tutorial focuses on people with WordPress.org websites, not the free hosted WordPress.com!</span>

Just wanted to let you all know right out of the gate what we're going to be talking about.
## How To Edit WordPress
If you want to edit your WordPress site you need to take one of two approaches. They are:

1. Using an FTP client
2. Using the built in WordPress editor

### Edit WordPress Using an FTP Client

Before we start this tutorial, there are a few things you'll need to get going.

1. An FTP Client (I recommend downloading <a href="http://filezilla-project.org/">FileZilla</a>)
2. Access To Your Website (Check Our <a href="http://www.insitedesignlab.com/how-to-install-wordpress/">This Post</a> For More Information)
3. A Text Editor. **Windows** comes default with *Notepad*. **Mac** comes with *TextEdit*. **Linux** typically comes with *Gedit*.
Personally I recommend going with:
**Windows:** <a href="http://notepad-plus-plus.org/">Notepad++</a>
**Mac:** <a href="http://macromates.com/">TextMate</a>
**Linux: **Stick with <a href="http://projects.gnome.org/gedit/">Gedit</a>!
4. An Internet Connection (arguable point but for beginners let's focus on editing a live website)

Alright, now that you have the necessary software, you can begin editing your WordPress website!

Let's Fire Up FileZilla, you should see something like this:

<div class="img-wrap"><img class="aligncenter size-full wp-image-700" title="How-To-Edit-WordPress-Filezilla" src="{{ site.url }}/images/How-To-Edit-WordPress-Filezilla.jpg" alt="" /></a></div>

Now you need to enter your FTP information and connect. When you're all connected you'll want to follow this filepath:

#### www.yourwebsite.com &gt;&gt; wp-content &gt;&gt; themes &gt;&gt; *yourthemename

You'll want to replace www.yourwebsite.com with your url. Also *yourthemename should be replaced with whatever your actual theme name is.

If you aren't sure what your theme is names. Head into your WordPress dashboard and go to

#### Appearance &gt;&gt; Themes &gt;&gt; Look at which theme is marked *active

Alright! Now we're in the proper folder and ready to start editing your theme. I'm not going to get too far into how WordPress works but I will cover a few of the PHP files and what purposes they serve.
+ **404.php **- The generic 404 page. This page is called whenever someone types a url or clicks a link to a page that doesn't exist on your website.
+ **archive.php** - This is the page that is called when someone clicks on your blogs archive
+ **category.php **- This is the page that is called when someone clicks on your blogs categories or a specific category
+ **footer.php **- The footer of your blog. The footer will be appended to the bottom of every other WordPress page
+ **functions.php** - This file holds the code defining the core functionality of your theme. If you ever see a tutorial on how to add something like *image thumbnails, custom widget areas, etc* that code goes in here.
+ ****header.php** - **This is the header for all of your WordPress Pages. Inside you will find your meta info, page title, and other things. This will be appended to the top of all of your pages. **
**
+ **index.php **- This is the default page for your blog. If you specified a static homepage, this page will control your /blog page. Otherwise this will be the content on your main page.
+ **page.php** - This is the default template for any static pages you make on your website. If you add a new page and write something in it, this template will control how it looks.
+ **single.php** - This is the default template for any single blog post. index.php controls the entire blog and** single.php** is what displays when someone clicks on an individual post.

### Edit WordPress Using The Built-In Editor

The first thing you have to do is log in to your WordPress Dashboard. You can get there one of two ways:

1. Go To http://www.yourwebsite.com/wp-login.php
2. Go To http://www.yourwebsite.com/wp-admin

Either way will get your there. Once you're logged in, click the *appearance* tab and then click *editor. *You should see something like this:

<div class="img-wrap"><a href="http://www.insitedesignlab.com/wp-content/uploads/2011/08/how-to-edit-wordpress-editor.jpg"><img class="aligncenter size-full wp-image-713" title="how-to-edit-wordpress-editor" src="{{ site.url }}/images/how-to-edit-wordpress-editor.jpg" alt="" /></a></div>

From this point on, editing your WordPress files will be very similar to doing so with an FTP client. For more information on the individual files, look above as my WordPress files list still applies to this method.

I hope this helped!