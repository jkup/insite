--- 
title: Using PHP Include To Speed Up Your Website
layout: post
tags: 
- PHP
---
## Front End to Back End

Recently, I've started moving away from designing websites and begun developing them. Mainly, I've moved away from being focused on graphic design, CSS and JavaScript and started working heavily with PHP and MySQL.

Although PHP is a tool mainly associated with back-end development. I recently noticed how helpful it can be for organizing your code.

## The Big Idea

It's pretty simple really.

+ Take your big messy HTML file and break it up into smaller files ( header, sidebar, content, footer )
+ Rename all of these new files with the .php extension instead of .html
+ Read the following paragraph to see what to add to the top of each .php file

### Meet PHP Include

It looks a little somethin' like this:

<pre rel="PHP" class="prettyprint"><code>
  &lt;?php include 'path/to/your/file.php'; ?>
</code></pre>

### Nifty or Not

Not sure if any of you will find this useful. But I've been breaking my websites up into separate files lately and it makes things a lot easier.
