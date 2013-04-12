---
title: Terminal-Fu
layout: post
tags: Linux
---

Recently, I started working for <a href="http://www.barracudanetworks.com">Barracuda Networks</a>.

I spend *a lot* of time in the terminal at work now, which is totally awesome.

I've been learning some great pro-tips lately and I think they're worth a share!

## 1. Jump To The Beginning / End of the Line

Say you've got a long line in your terminal

<pre><code>Username$: vim /path/to/a/super/long/file.txt</code></pre>

Then you realize you mispelled something at the beginning of the line! No worry, just use

<code>Ctrl + a</code>

to jump to the beginning of the line and then you can just type

<code>Ctrl + e</code>

to jump back to the end!

## 2. Search Your Terminal History

So often you'll need to re-use a command that you used recently, or maybe you just can't remember how a certain command goes.

It's pretty cool that you can just type <code>history</code> like this:

<pre><code>Username$: history</code></pre>

in the terminal and it will give you a list of the last commands you used.

Way cooler, however, is the interactive, fuzzy search through your history by hitting

<code>Ctrl + r</code>

Then just start typing something you need from your history and it'll find it for you.

Some cool notes on <code>Ctrl + r</code> are that you can:

+ Hit tab to bring the search result into your current line ( for editing )
+ Hit Ctrl + r again to find another appropriate selection
+ Hit Ctrl + Shift + r to go back if you pass the result you want

## Multiplex Like a G&trade;

If you're a terminal champion -- eventually you will run out of screen space. I tried to make it work for a while but eventually you need more than will fit on 2 ( or 3 ) screens!

What's the solution?

Have tons of terminals inside each terminal!

Terminal Multiplexers, namely Screen and Tmux, allow you to have a bunch of terminal sessions inside one terminal ( think internal tabs ) and navigate between them with ease.

Both Screen and Tmux are pretty sweet, but screen hasn't been supported in forever so just save yourself some pain and go with tmux. I'm going to write a tmux post soon with install instructions and some basic usage but just know it's sweet for now!

## Use the Amazing Tools in Front of You

Last thing. If you're using the terminal a lot, you should really check out all of the amazing tools sitting in front of you -- they'll make your life way better! I recommend reading about and regularly using:

+ Grep
+ Htop
+ Ack
+ Ps
+ SSH
+ Scp

Just look them up with a quick 'man grep' and start living better!
