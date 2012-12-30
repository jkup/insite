--- 
description: This is an easy to follow tutorial that walks you though the WordPress installation. Learn how to install wordpress.
title: How To Install WordPress
layout: post
tags: 
- Wordpress
---
Alright, so you want to start using WordPress.

Just one problem right? How do you install WordPress on your Web Server?

No worries. We're going to cover all the possible ways to install WordPress on your web site. Before we get started, let's make sure you're ready to start your journey into the wonderful world of WordPress.
## What You'll Need

+ A Domain Name
+ A Web Host
+ FTP Access To Your Web Host
+ An Internet Connection
+ Some Time...hopefully not much!

## Is There A Better Way To Do This?

Before we get into the guts of the WordPress install, let's make sure you're in the right place. If you don't have a domain name or a web host, you either need to get these things or try a free hosted blogging solution like <a href="http://www.wordpress.com">Wordpress.com</a> or <a href="http://www.blogger.com">Blogger.com</a>.  In fact, if you are missing any of the things on the above list, you should read my post on <a href="http://www.insitedesignlab.com/what-you-need-to-have-a-web-site/">The Things You Need To Have Your Own Website</a>.

Also, if you're looking to install WordPress as quickly as possible, you should check to see if your web host offers a free 1-click install. I know a lot of popular hosts such as <a href="http://dreamhost.com/">Dreamhost</a>, <a href="http://www.bluehost.com/">Bluehost</a> and <a href="http://mediatemple.net">Media Temple</a> offer easy to use 1-click applications. If your host offers this, you should be able to navigate to the appropriate area, click the install WordPress button and follow the steps on your screen.
## How To Install WordPress

+ **Step 1 - Head over to <a href="http://www.wordpress.org">WordPress.org</a>**

<div class="img-wrap"><img class="aligncenter size-full wp-image-582" title="how-to-install-wordpress" src="{{ site.url }}/images/how-to-install-wordpress.jpg" alt="how-to-install-wordpress-image" /></div>

+ **Step 2 -  Download The Latest Version Of WordPress**

<div class="img-wrap"><img class="aligncenter size-full wp-image-585" title="how-to-install-wordpress-2" src="{{ site.url }}/images/how-to-install-wordpress-2.jpg" alt="" /></div>

+ **Step 3 - *Tricky - Set Up A MySQL DataBase**

Alright, so this is really the only hard part you'll face while installing WordPress. I'm going to give you an overview here but if you have any specific questions, leave a comment with the name of your web host and I'll show you specifically how to set one up.

1. Log In to your web host's control panel
2. Find the MySQL databases tab
3. Click 'Create a New Database'
4. Fill out the information (what you'll need for the WordPress Install is **Database Name**, **Host Name**,** User Name**, **Password**)
Sometimes, hosts will have a pre-set Host Name like 'localhost' or 'MySQL'. If you aren't asked to create one, look around and see what their default is.
5. Click 'OK' and hope for the best!
6. *Important write down the information you entered as you'll be needing it soon

<div>This is an example of setting up a new MySQL Database in **Dreamhost**. (In Dreamhost, go to your Control Panel &gt;&gt; Goodies &gt;&gt; MySQL Databases)</div>

<div class="img-wrap"><img title="dreamhost-create-new-mysql-database" src="{{ site.url }}/images/dreamhost-create-new-mysql-database.jpg" alt="Create New Database In Dreamhost" /></div>

+ **Step 4 - Connect To Your Host via FTP**

Personally, I use <a href="http://filezilla-project.org/">FileZilla</a> for my FTP client. It's Fast, Free and Open Source.

In order to connect to your web host, you'll need to know your **Host**, **User Name, **and **Password**.

*These will not necessarily be the same as your MySQL information

Typically, when you sign up with your hosting company you'll either be given, or asked to set-up FTP information. Most of the time your **host** is going to be ftp.yourdomainname.com.

<div class="img-wrap"><img class="aligncenter size-full wp-image-596" title="connect-to-web-host-with-filezilla" src="{{ site.url }}/images/connect-to-web-host-with-filezilla.jpg" alt="" /></div>

+ **Step 5 - Unzip WordPress**

<div>When you downloaded WordPress, it came in a .ZIP file. You need to unzip this file into a folder on your computer. Most Operating Systems come with some sort of unzipping tool built in. In this case you just need to open the file and click 'Extract All'. Send the contents to a folder on your computer. If you don't have software to do this, go download something like <a href="http://www.7-zip.org/">7 Zip</a> and extract the files into a folder you can remember.</div>

+ **Step 6 - Move WordPress To Your Web Host**

At this point you should have WordPress Unzipped, Your FTP Client opened and connected to your web server and your MySQL Database information readily available.


1. Go to your FTP Client
2. On the left side you should have your extracted WordPress folder open. On the right side you should have the root directory of your domain. Use the picture below to make sure everything is set up correctly.
3. Once you are sure everything is ready to go. Select all of the files on the left side, right click, and select upload. Or just drag them over to the right side.
4. This will take anywhere from 5 - 45 minutes depending on your internet speed.
5. Make sure no files failed to upload, and then your done with this part!

<div class="img-wrap"><img class="aligncenter size-full wp-image-598" title="moving-wordpress-files-to-your-web-host" src="{{ site.url }}/images/moving-wordpress-files-to-your-web-host.jpg" alt="" /></div>

+ **Step 7 - Finishing the WordPress Install (You're almost done!)**

Now it's time to head on over to your website. Go to www.yourwebsite.com and you should see a screen like this one:

<div class="img-wrap"><img class="aligncenter size-full wp-image-615" title="finishing-the-wordpress-install" src="{{ site.url }}/images/finishing-the-wordpress-install.jpg" alt="" /></div>

Click **'Create A Configuration File'**

Now you'll be presented with a screen like this one:

<div class="img-wrap"><img class="aligncenter size-full wp-image-604" title="finishing-the-wordpress-install-2" src="{{ site.url }}/images/finishing-the-wordpress-install-2.jpg" alt="" /></div>

Click **'Let's go!'** and you'll see this screen:

<div class="img-wrap"><img class="aligncenter size-full wp-image-605" title="finishing-the-wordpress-install-3" src="{{ site.url }}/images/finishing-the-wordpress-install-3.jpg" alt="" /></div>

This is where you'll enter your MySQL information that luckily you have written down right next to you! Right?

After you complete this form, all you have to do is pick a title for your website and a username password combination.

Then You're **Good To Go!**

## What Did We Miss?

I know there are a lot of moving parts here, if anything looks different for you or you're having problems, leave a comment with your question and I'll get back to you as soon as I can.