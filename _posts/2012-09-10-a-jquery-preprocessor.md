---
title: A jQuery Preprocessor
layout: post
tags: 
- Javascript
---
I've been doing a lot of CSS preprocessing lately with Compass-Sass.

<div class="img-wrap"><img class="alignnone size-full wp-image-2492" title="compass-sass-insite" src="{{ site.url }}/images/compass-sass-insite.jpg" alt="" /></div>

In case you're not familiar, Compass is a CSS Authoring Framework. It allows you to use either SCSS or SASS for CSS preprocessing. The basic idea is you can write CSS in a beautiful, easy, magical way ( the way CSS ought to be ) and it will compile at save time turning it into the plain and vendor prefixed reality we all know.

But enough about that for now. I was at a LAMP meeting earlier today and some of us started talking about CSS preprocessing and then we were discussing jQuery libraries.

Disclaimer: I know many people are sick of hearing others complain about jQuery as though it taxes website performance. Trust me, I'm one of those people. I know that it's only like 32kb minified and served from the most popular CDN in the world. I know it's really not a big deal in any way but bear with me on this!

## A jQuery Preprocessor

I had this kind of cool idea for a jQuery preprocessor.

<div class="img-wrap"><img class="alignnone size-full wp-image-2495" title="jquery_insite" src="{{ site.url }}/images/jquery_insite.jpg" alt="" /></div>

The idea is simple, but I have no clue on how to execute it. You would locally write the jQuery code you want for your web project, and then the preprocessor would turn your jQuery code into straight JavaScript. This would land you with a much smaller file at the end of the process and that may or may not be better than taking the full jQuery from Google CDN.

Thoughts?