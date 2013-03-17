---
title: Deploying Your Website
layout: post
---

This weekend I gave a presentation at the <a href="http://www.meetup.com/ann-arbor-php-mysql/">Ann Arbor PHP Meetup</a> on website deployment.

We covered three basic methods:

+ File Transfer Protocol (FTP)
+ Rsync
+ Git

## File Transfer Protocol

Built in the early 70's, File Transfer Protocol ( or FTP ) was designed to transfer files from one host to another over the internet.

Today there are many great ( and free ) tools that make FTP the easiest way to move files from your computer to your web server. We took a look at <a href="http://filezilla-project.org/">FileZilla</a> as it's cross-platform and completely free.

You can download FileZilla from the companies website and have it installed within minutes. From there, you just need to know the hostname, username and password necessary to access your website.

Typically the hostname is ftp.yourwebsite.com and often times the username and password are the same as what you use to log in to your hosting provider's control panel. If you don't know the specific credentials for this, contact your web host for details.

Once you're set up, you should see something like this:

<div class="img-wrap"><img src="{{ site_url }}/images/connect-to-web-host-with-filezilla.jpg" /></div>

On the left is a file broswer for *your computer* and on the right is the same browser view for *your server*. From here, you can move files from the left to the right to put them online, or from right to left to download them to your computer.

The one major caveat with deploying your website this way is the lack of versioning. It's difficult to tell where the most recent copy of a file is and if two or more people are working on the same project, you will almost definitely run into problems with code being overwritten.

> Example:
Let's say you and a coworker need to make changes to the same file, you both start out with a copy of the file locally. You make your changes ( say changing the title ) and when you're finished, you open up FileZilla and push those changes live to your server. Just then, your coworker finishes their changes ( say adding a list to the page ) and they push their changes. Since they never saw your title change, and there is no versioning, their copy of the file will overwrite yours and your changes will be lost.



###FTP Pros
+ Easy to setup
+ Fast

###FTP Cons
+ Collisions
+ Data Loss

##Rsync

Created in the late 90's, Rsync is a tool that synchronizes files from one host to another. Note the significant distinction of synchrinization vs. transference. Rsync is very capable of dealing with collisions and collaboration as it will recognize differences between the two locations.

Rsync has a great deal of options, and checking out it's man page is definitely worthwhile. This can be done by typing this in your terminal:

<pre>man rsync</pre>

on a UNIX machine.

It's simplest usage, however, can be seen here:

<pre>
rsync file_to_copy.txt username@yourwebsite.com:/path/to/your/directory

#Real life example to move all files in deployment folder to the deploy folder on my host
rsync deployment/* root@a2lamp.com:/var/www/a2lamp.com/deploy
</pre>

The only real issue I have with Rsync deployment is it's lack of versioning. Although you can specify things like overwrite with the newer file, it's hard to see a deployment log with valid data in it unless you write something yourself.

###Rsync Pros
+ Fast
+ Highly Configurable

###Rsync Cons
+ Lack of versioning

##Git Deployment

Released to the world in 2005, git has quickly become the de-facto startard in version control. Git does a great many things including:

+ Keeps a version log of all changes to your codebase
+ Gracefully handles merges and merge conflicts ( see example above )
+ Allows easy script automation through hooks
+ Lets you peel back your code to any point in time

Git comes pre-installed on Mac's and most linux distributions but is freely available on all operating systems. There are tons of advantages to using Git but most of them fall outside of the scope of this blog post.

There are three common methods for deploying code with git.

### The push and pull

Perhaps the simplest way to deploy with git is to have copies of your repository both on your computer and on your web server. You can make changes locally, push them to master, and then log into your server and pull them down. I've done this before and it's far superior to FTP but we can make it even better!

### The direct push

You can simplify the above process by setting your web server as master and directly pushing your code to deployment with a:

<pre>git push origin master</pre>

This works well for some projects, but sometimes you need only a subset of your codebase to go public, which brings us to step three.

### The bare repo

Git offers these things called bare repositories. They are great for having a central place for your codebase although they don't provide editable files like a full repository. One thing that's commonly done is to set up three copies of your codebase:

+ A local repository on your computer. This is where you write code.
+ A bare repository on your server but not public facing. This is where you push code.
+ A folder on your web server where you want your public code to go.

#### Git hooks

Once you have this setup you can use a git post-recieve hook. These are easy to customize and can be found in your .git/hooks/ directory of your repository. Essentially what you do is write a script that runs whenever code is pushed to the bare repository. This code can grab just the public facing files and send them to your public directory. Here's an example of a post-recieve hook I'm using for this website ( which is running Jekyll ).

<pre><code>
#Add these commands to the file
echo "********************"
echo "Post receive hook: Updating website"
echo "********************"

#Change to working git repository to pull changes from bare repository
#cd /var/www/insitedesignlab.com || exit
#unset GIT_DIR
#git pull origin master
#End of commands for post-receive hook

GIT_REPO=/home/m1ck3y/insite.git
TMP_GIT_CLONE=$HOME/tmp/myrepo
PUBLIC_WWW=/var/www/insitedesignlab.com

git clone $GIT_REPO $TMP_GIT_CLONE
cd $TMP_GIT_CLONE
jekyll --no-auto $TMP_GIT_CLONE $PUBLIC_WWW
cd $HOME
rm -Rf $TMP_GIT_CLONE
exit
</code></pre>

Basically this code just takes my public directory of my codebase ( the code I want the world to see ) and only moves that to my public folder.

### Git Pros
+ Fast
+ Secure
+ Versioning

### Git Cons
+ None, this is seriously an awesome way to deploy!