--- 
description: "Looking to add google analytics to your WordPress website? This brief tutorial will show you just how! "
title: Add Google Analytics To WordPress
layout: post
tags: 
- Wordpress
---
Are you looking to add google analytics to your self hosted WordPress website? This tutorial will show you how. Google Analytics is a great way to analyze your traffic and WordPress makes it easy to use.

**Step 1. Sign Up For Google Analytics**
Head on over to <a href="http://www.google.com/analytics/">http://www.google.com/analytics/</a> and sign up for a free account. If you already have a Google account, all you need to do is click the 'Access Analytics' button and sign in.

<div class="img-wrap"><img class="aligncenter size-full wp-image-1199" title="sign_up_for_google_analytics" src="{{ site.url }}/images/sign_up_for_google_analytics.jpg" alt="Sign Up Screen For Google Analytics" /></div>

**Step 2. Sign Up Your Website**
After Signing up for your Google Analytics account. Click the *+ Add New Profile* link and fill out your domain information.

<div class="img-wrap"><img class="aligncenter size-full wp-image-1245" title="google_analytics_install_wordpress" src="{{ site.url }}/images/google_analytics_install_wordpress.jpg" alt="" /></div>

**Step 3. Grab The Code**
Now you'll be taken to a screen where they give you a paragraph of JavaScript (don't worry!) and tell you to paste it into your site. It should look something like this:

<div class="img-wrap"><img class="aligncenter size-full wp-image-1246" title="grab-google-analytics-code" src="{{ site.url }}/images/grab-google-analytics-code.jpg" alt="How To Install Google Analytics On WordPress" /></div>

**Step 4. Log Into Your WordPress Dashboard**

Now, head over to your WordPress dashboard. Go to www.mywebsite.com/wp-login.php and enter your username and password. 

Now click:Appearance &gt;&gt; Editor

And look on the right sidebar for a file called *footer.php*

click that and you should see something like this:

<div class="img-wrap"><img class="aligncenter size-full wp-image-1248" title="edit-the-wordpress-footer-google-analytics" src="{{ site.url }}/images/edit-the-wordpress-footer-google-analytics.jpg" alt="" /></div>

Now, yours will have different code inside, but you get the idea.

**Step 5. Paste That Code**

Now if you scroll to the bottom of this file you'll see one of two things:

A comment that says something like *Don't Forget About Analytics*

Or, you'll see at the end of the file&lt; /body&gt; &lt; /html&gt;

So you'll either  paste the code where the comment is, or right before the body html tags. Just paste it in and click **Save File.**

**Step 6. That's it! You're Done**

Now you're all done, go back to your Google Analytics page and it should say something like *Gathering Data* (It might take up to a few hours to recognize you've entered the code.) Anyway, check back in a few hours and you should be all set tracking your website! Have fun!