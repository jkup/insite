---
title: Getting Started With Jekyll
layout: post
tags: Web_Design
---

I've been really interested in checking out <a href="http://jekyllrb.com/">Jekyll</a> for a while now.

According to their website:

<blockquote><p>Jekyll is a simple, blog aware, static site generator.</p></blockquote>

Yeah. That didn't clear things up for me either.

Basically, Jekyll is a great little ruby program that allows you to make a blog with all the bells and whistles you're used to, and then export the entire thing into fast, secure, cachable HTML files.

# Getting Started

I found the actual Jekyll install a bit confusing. So I started with this <a href="https://github.com/danielmcgraw/Jekyll-Base">Jekyll Base</a> project that Daniel McGraw has been working on.

You should see something like this after you download it:

<pre rel="File Structure"><code>
    | _layouts
    | _posts
    | README.md
    | _config.yml
    | index.html
</code></pre>

And that's it.

Download that project from github and stash it in a folder. Next we need to install Jekyll.

## Installation

Fire up that terminal ( I know it can be scary but this is pretty painless! )

<pre>
    sudo gem install jekyll
</pre>

Assuming you already have ruby installed that should take care of that. Otherwise you might have to install ruby manually but that's not for this tutorial.

Next step, and this is totally optional is to install RDiscount so we can use Markdown to make blog posts.

<pre>
    sudo gem install rdiscount
</pre>

We're good to go!

## The Setup

Let's move to that folder where you put Daniel's Jekyll Base.

Pop open your terminal and change directory to that folder.

<pre>
    cd ~/path/to/that/folder
</pre>

Then type:

<pre>
    jekyll --server
</pre>

In order for Jekyll to update files as you edit, the terminal running jekyll --server either needs to be left on or turned on after each change and before you expect to see anything in the browser.

Then open up your favorite browser and navigation to:

http://localhost:4000

and there you have it!

If you look back in your file directory, you'll see that Jekyll added some more files and folders. For more information on what those are and why they're important, check out Daniel's post <a href="http://danielmcgraw.com/2011/04/18/The-Ultimate-Guide-To-Getting-Started-With-Jekyll-Part-2/">on his personal blog</a>. We're just going to jump right in!

## Writing Your First Post

Open up your favorite text editor and use it to open _posts/1985-10-26-Test-Post.md. You should see something like this:

<pre rel="Markdown"><code>
---
layout: post
title: Test Post
---

This is a test post writen in markdown. To learn more about markdown check out the 
[documentation](http://daringfireball.net/projects/markdown/) on 
[Daring Fireball](http://daringfireball.net/).
</code></pre>

Like the post says, if you want more information on Markdown, check out <a href="http://daringfireball.net/projects/markdown/">Daring Fireball</a>

Go ahead and get your hands dirty! Use that Daring Fireball post to figure out the syntax of Markdown. Feel free to just use regular HTML if you prefer although I think you'll find Markdown very elegant. If you want to change the 'date' of the post, just change the date in the filename. When you're ready to see your post, just head over to the browser and refresh.

## Deployment

I'm going to do a whole series on Jekyll deployment. For now, just know that you can take the entire contents of _site and stick them on the web via FTP. They should be all good to go.

## Common Pitfalls

+ Remember that jekyll --server both compiles all your Jekyll code into HTML and is needed for local viewing.
+ Before trying anything tricky, check if there is already a <a href="https://github.com/mojombo/jekyll/wiki/Plugins">plugin</a> for what you're attempting.
+ Make backups before trying to export your current blog format to Jekyll ( there are good tools but it can get messy ).

Also, if you're moving from a more robust platform like WordPress here are some things you'll need to figure out that Jekyll doesn't offer out of the box.

+ Custom 404 page ( use htaccess )
+ sitemap ( Jekyll plugin )
+ RSS Feed ( Jekyll plugin )
+ Pretty Permalinks ( edit _config.yml )

## Good Luck Out There

Let me know in the comments if any of this was unclear or just isn't working. I'm planning on doing **a lot** more posts on Jekyll so check back soon!