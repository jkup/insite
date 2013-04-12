---  
title: Decision Time - Speed vs. Features
layout: post
tags: 
- Web_Design
---
If you had to choose, would you prioritize speed or features on your website?

<div class="img-wrap"><img class="size-full wp-image-2341" title="speed_vs_performance" src="{{ site.url }}/images/speed_vs_performance.jpeg" alt="" /></div>

I've been on a strange path recently. I went from spending my time as a front-end designer to a back-end developer and am now coming back full circle.

There are a lot of differences between the two paths but one I've been struggling with lately is balancing great visual features with website performance. All things in moderation, there is usually a good balance to be struck but there are times where I find myself conflicted.

When it comes to website performance, the thing that has the greatest impact is the number of HTTP requests being sent from your website. Every image, CSS file, JavaScript file, etc is another HTTP request.

In short, every image you add or JavaScript plugin you use is another request and contributes to slowing down your website. So let's discuss what can be done to allow a feature full experience without taking a major performance hit.

## Images

<div class="img-wrap"><img src="{{ site.url }}/images/speed_v_performance_images.jpeg" alt="" title="speed_v_performance_images" class="alignnone size-full wp-image-2346" /></div>

Although JavaScript always takes flack for slowing down websites, images are typically the real culprit. Luckily, there are a few great techniques you can use to greatly improve performance while still using images:

+ Image Sprites - You can combine all of your images into one big image sprite making it just one HTTP request. Check out <a href="http://css-tricks.com/css-sprites/">This Post</a> to learn more about them.
+ Serve Compressed Images - Check out <a href="http://html5boilerplate.com/">HTML5 Boilerplate</a> for the htaccess code to serve gzipped images
+ Use CSS3 - Some things like gradients, rounded corners, etc can now be done with CSS which will load much faster than images. Keep in mind that these CSS attributes have limited browser support, however they degrade nicely

## JavaScript

<div class="img-wrap"><img src="{{ site.url }}/images/libraries.jpg" alt="" title="libraries" class="alignnone size-full wp-image-2349" /></div>

Although relatively small in size, JavaScript files and libraries can quickly add up and slow down your website. Again, luckily there are some easy fixes:

+ Combine JS files - similar to image sprites, you can make one super JavaScript file with all the libraries you are using. That way it's only one HTTP request. The only drawback is this makes it tougher to update the JS libraries as they progress.
+ Serve from CDN - the big bummer with HTTP requests is that your browser can only handle one at a time. So you are forced to wait while it downloads one before grabbing the next. The one loophole is that your browser can grab multiple requests as long as they are from different domains. Basically, serve as many files as you can from fast domains like <a href="https://developers.google.com/speed/libraries/devguide">Google CDN</a> and things will be better.

## Features vs. Performance

Ultimately, I think performance wins out as long as you make sure to do what you can to optimize. For all you designers / developers out there, how do you feel about images and JS files? How many do you think is too many? I'd love to hear your thoughts!