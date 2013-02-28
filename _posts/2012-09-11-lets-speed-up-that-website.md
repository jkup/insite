---
title: Let's Speed Up That Website
layout: post
tags: 
- Web Design
---
I've been on a crusade lately to get my website running at top speed.

<div class="img-wrap"><img class="alignnone size-full wp-image-2502" title="speed_up_that_website" src="{{ site.url }}/images/speed_up_that_website.jpg" alt="" /></div>

##  Analyze

Before we get to speeding things up, let's find out what's slowing you down. Lately I've been using <a href="http://gtmetrix.com/">GTmetrix</a> for analysis as it combines many of the other popular services.

<div class="img-wrap"><img class="alignnone size-full wp-image-2505" title="how_fast_is_my_website" src="{{ site.url }}/images/how_fast_is_my_website.jpg" alt="" /></div>

After analyzing your website, you can really just follow the report and make the important changes but let's cover a few of the big ones first:

## Gzip Everything

Did you know you're allowed to zip all of the data on your website and send the zipped data to your users browser? This way they can have their browsers unzip it and things go way faster!

The web gangsters at <a href="http://html5boilerplate.com/">HTML5Boilerplate</a> came up with some really cool stuff in the boilerplate's .htaccess file. Perhaps the best gem is allowing your server to Gzip everything. Just stick this in your .htaccess of your website's root directory.

<pre rel="htaccess" class="prettyprint"><code>
# ----------------------------------------------------------------------
# Gzip compression
# ----------------------------------------------------------------------

&lt;IfModule mod_deflate.c>

  # Force deflate for mangled headers developer.yahoo.com/blogs/ydn/posts/2010/12/pushing-beyond-gzipping/
  &lt;IfModule mod_setenvif.c>
    &lt;IfModule mod_headers.c>
      SetEnvIfNoCase ^(Accept-EncodXng|X-cept-Encoding|X{15}|~{15}|-{15})$ ^((gzip|deflate)\s*,?\s*)+|[X~-]{4,13}$ HAVE_Accept-Encoding
      RequestHeader append Accept-Encoding "gzip,deflate" env=HAVE_Accept-Encoding
    &lt;/IfModule>
  &lt;/IfModule>

  # Compress all output labeled with one of the following MIME-types
  &lt;IfModule mod_filter.c>
    AddOutputFilterByType DEFLATE application/atom+xml \
                                  application/javascript \
                                  application/json \
                                  application/rss+xml \
                                  application/vnd.ms-fontobject \
                                  application/x-font-ttf \
                                  application/xhtml+xml \
                                  application/xml \
                                  font/opentype \
                                  image/svg+xml \
                                  image/x-icon \
                                  text/css \
                                  text/html \
                                  text/plain \
                                  text/x-component \
                                  text/xml
  &lt;/IfModule>
&lt;/IfModule>
</code></pre>

## Reduce HTTP Requests

I've written about this before, every image, CSS file and JavaScript file is another request that the server has to send to your computer.

Check out <a href="http://tools.pingdom.com/fpt/">This Free Tool</a> to see how many HTTP requests your website is sending and think about things like Combining images into one sprite and JS and CSS into one file each to makes things go a bit quicker.

## Losslessly Compress Images

Although you should always be doing your best to compress your images before uploading them, using tools like <a href="http://incident57.com/codekit/">Codekit</a> or <a href="http://trimage.org/">Timage</a> can save a bunch on image size.

## Enable Page Caching

Hopefully, you are either familiar with .htaccess files or using a sweet CMS like WordPress so caching will be easy. In its simplest form, caching is turning your complex PHP pages assembled with sometimes hundreds of specific queries into a static HTML file so it will load faster. If you are using WordPress, go ahead and install <a href="http://wordpress.org/extend/plugins/w3-total-cache/">W3 Total Cache</a> and be amazed at how much faster your website will load.

## What Are Your Suggestions?

What are you doing to speed up your website? Share in the comments and I'll add your ideas to the post!
