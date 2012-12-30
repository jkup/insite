---
title: Passing Parameters in Javascript onClick Event
layout: post
tags: 
- Javascript
---
I ran into a problem today.

I was trying to generate a bunch of input buttons with JavaScript and have each of them do something unique onClick.

## The Wrong Way

<pre rel="JavaScript"><code>
&lt;script type="text/javascript">
    var temp;
    var myArr = new Array();
    myArr[0] = "Peter";
    myArr[1] = "Paul";
    myArr[2] = "Tony";
    myArr[3] = "Adam";

    function display(name) {

        alert(name);

    }

    for(var i = 0; i < 4; i ++)
    {
        temp = myArr[i];
        document.write('&lt;input type="button" onclick="display(temp)" value="Display">');
    }
&lt;/script>
</code></pre>

### The Problem

The issue is in JavaScript global variable. Since temp is a global variable, the onclick trigger sends the content of temp after the loop is all finished. Since Adam is the last value to be stored in temp, that's what all buttons alert. The trick is to use input name as a non-global and then pass the whole input tag to the function like so:

## The Right Way

<pre rel="JavaScript"><code>
&lt;script type="text/javascript">
    var myArr = new Array();
    myArr[0] = "Peter";
    myArr[1] = "Paul";
    myArr[2] = "Tony";
    myArr[3] = "Adam";

    function display(object) {

        alert(object.name);

    }

    for(var i = 0; i < 4; i ++)
    {
        document.write('&lt;input type="button" onclick="display(this)" name="'+myArr[i]+'" value="'+myArr[i]+'">');
    }
&lt;/script>
</code></pre>