--- 
title: Why Building Your Own Blog Software is a Bad Idea
layout: post
tags: 
- PHP
---
Four weeks and a thousand lines of code later, I've come to the conclusion that building custom blog software is just a bad idea.

<div class="img-wrap"><img class="alignnone size-full wp-image-2420" title="php_frameworks" src="{{ site.url }}/images/php_frameworks.jpeg" alt="" /></div>

## Developing a Blog

I recently started developing web applications for myself using PHP and a variety of great frameworks. This is what lead me to believe creating my own blog was a good idea.

I've been using WordPress to blog since forever, and although I think it's the best CMS currently in existence, there were just a few things I always wanted done differently and I thought I was up to the challenge.

## My Blog Idea

Lately I've become intrigued, maybe obsessed, with website performance. I really wanted to build a blog that was lighting fast. This meant a few goals for my project:

+ As few HTTP requests as possible
+ Keep my MySQL queries down to a minimum
+ Use as few images as possible
+ Really tighten security, as I'm the only person using this software

## The Foundation

After a lot of consideration, I picked <a href="http://codeigniter.com/">Codeigniter</a> as my framework for the project and got to work. I build the basics in a night and was feeling pretty good about everything. I had a great login system, the ability to create and edit posts and it was lighting fast!

## Issues, issues and more issues

It was at this point that I discovered a new appreciation for WordPress. I ran into a few problems I just couldn't solve:

+ Pretty Permalinks - I really need to work on my Regex skills. I just could not get this working properly
+ A good editor. I tried CKEditor and TinyMCE but neither of them even came close to WordPress' custom TinyMCE theme
+ RSS. I really took advantage of WordPress automatically publishing an RSS feed. Building this functionality myself was tough

## Home Sweet Home

<div class="img-wrap"><img class="alignnone size-full wp-image-2424" title="Wordpress-logo" src="{{ site.url }}/images/Wordpress-logo.png" alt="" /></div>

At least for now, I'm back to WordPress with a new found appreciation. Any of you ever tried building your own CMS? Care to share your thoughts?