---
title: Why You Should Use Xmonad
layout: post
tags: 
- Linux
---
Xmonad is my absolute favorite window manager.

<div class="img-wrap"><img class="alignnone size-large wp-image-2430" title="Screenshot from 2012-08-29 22_21_50" src="{{ site.url }}/images/Screenshot-from-2012-08-29-22_21_50.png" alt="My Xmonad Desktop" /></div>

That's my awesome desktop running chrome, glxgears, vim, terminator, irssi and hotot for Twitter. In case you cared.

## What is Xmonad

<a href="http://xmonad.org/">Xmonad</a> is a tiling window manager written in Haskell.

Let's over simplify things for a minute.
### Xmonad is:

**Tiling:** Tiling, in this case is the opposite of floating. Think about a Mac running OSX or a Windows 7 computer. As you open up windows and applications they appear on your screen floating on top of each other. If you move one on top of another, it floats there mimicking a stack of papers on a desk.

Tiling window managers, by comparison snap windows into place in a two dimensional grid, nothing floats on top of anything else. This is awesome because you can stop using your mouse and fiddling to get things placed right. With Xmonad, you set up the way you want windows to layout and then as you open them they just go to the right place.

**Minimal:** By default, Xmonad doesn't come with a background image, a clock or anything to see / click on. In fact, the first few times I started my Ubuntu desktop with Xmonad I thought it was stuck at a loading screen. As you can see, I've since installed <a href="http://projects.haskell.org/xmobar/">Xmobar</a> to add a nice status bar at the top of my screen.

**Fast:** Xmonad is fast both in performance and in its ease of use. It's a bit weird to get used to using just your keyboard for window control but trust me, after a month or so you'll be flying faster than you ever thought possible.

## Getting Started

To install Xmonad on Ubuntu or any OS with apt-get, just open up a terminal and type:

<pre><code>sudo apt-get install xmonad</code></pre>

I also suggest installing Xmobar and dmenu ( for launching applications )

<pre><code>sudo apt-get install suckless-tools xmobar</code></pre>

That will get you all you need. Then you can just log out and select Xmonad as your default window manager.

## Customization

Last but not least, if you want to add some cool features to Xmobar or change the way Xmonad behaves you'll want to edit two files:

<pre><code>~/.xmonad/xmonad.hs</code></pre>

and

<pre><code>~/.xmobarrc</code></pre>

<a href="https://github.com/jkup/dotfiles" rel="attachment wp-att-2437">My Xmonad Files</a>!
