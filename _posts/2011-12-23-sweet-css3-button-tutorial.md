--- 
title: Sweet CSS3 Button Tutorial
layout: post
tags: 
- CSS
- Tutorials
---
I've gotten a few people interested in how I made my push buttons for my blog. Here's a quick tutorial to show you how!
## My Inspiration
I like to give credit where credit is due. I got my inspiration ( and some of the code ) from this <a href="http://hellohappy.org/css3-buttons/">awesome collection</a> of CSS3 Buttons.
## Example
<div class="punch" style="float: left !important;"><a href="#">Don't Push</a></div>
<div style="clear: both;"></div>
## The Code
<pre rel="CSS"><code>
div.punch {
	background: #E86A03;
	border-top: 1px solid #38538c;
	border-right: 1px solid #1f2d4d;
	border-bottom: 1px solid #151e33;
	border-left: 1px solid #1f2d4d;
	-webkit-border-radius: 4px;
	-moz-border-radius: 23px;
	-ms-border-radius: 23px;
	-o-border-radius: 23px;
	border-radius: 23px;
	-webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 4px 4px 1px #111111;
	-moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 4px 4px 1px #111111;
	-ms-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 4px 4px 1px #111111;
	-o-box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 4px 4px 1px #111111;
	box-shadow: inset 0 1px 10px 1px #5c8bee, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 4px 4px 1px #111111;
	color: #fff;
	font: bold 17px "helvetica neue", helvetica, arial, sans-serif;
	line-height: 1;
	margin-bottom: 10px;
	padding: 10px 0 12px 0;
	text-align: center;
	width: 150px;
	float: right;
	-webkit-background-clip: padding-box; 
}

div.punch:hover {
	background: #4DBCE9;
	-webkit-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
	-moz-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
	-ms-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
	-o-box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
	box-shadow: inset 0 0px 20px 1px #87adff, 0px 1px 0 #1d2c4d, 0 6px 0px #1f3053, 0 8px 4px 1px #111111;
	cursor: pointer; 
}

div.punch:active {
	-webkit-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
	-moz-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
	-ms-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
	-o-box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
	box-shadow: inset 0 1px 10px 1px #5c8bee, 0 1px 0 #1d2c4d, 0 2px 0 #1f3053, 0 4px 3px 0 #111111;
	margin-top: 8px; 
}

div.punch a { color: #FFF; text-decoration: none; }


</code></pre>
