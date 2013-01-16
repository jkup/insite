---  
description: This is an easy to follow guide for how to install VMware on either 64bit or 32bit Linux distributions. Including a patch for version.h bug.
title: How To Install VMware on Linux
layout: post
tags: 
- Linux
---
#### Step 1: Download VMware Player 

This requires going to the <a href="http://www.vmware.com/">VMware website</a>, registering and downloading the .bundle file for either the 64bit or 32bit version. If you are forced to download a .txt or a .bin just rename it to a .bundle

#### Step 2: Open up a terminal and type: 

<blockquote>sudo sh path/to/your/.bundle/file</blockquote>

Here is an example of the command I typed. Yours will differ based on version:

<blockquote>sudo sh Downloads/VMware-Player-4.0.4-744019.i386.bundle</blockquote>

*a handy trick with linux is you can type part of the file name and then tap the tab key to have it autocomplete. For example you can type: sudo sh Downloads/VMware tab tab tab and it should auto fill in your .bundle file

#### Step 3: Enter you administrative password 

#### Step 4: That should open up a nice GUI and walk you through the install 

#### Step 5: Try to open VMware 

If you are lucky it'll just work. More than likely it'll throw up an error and tell you to check a log file. Close VMware don't worry about log files.

Now, if you are like me you may get this error message:

<blockquote>Failed to find /lib/modules/preferred/build/include/linux/version.h</blockquote>

**-- Only to be followed if VMware isn't working --**

#### Step 6: Download The Patch 

<a href="http://communities.vmware.com/servlet/JiveServlet/download/2025997-86343/vmware802fixlinux320.tar.gz" target="_blank">http://communities.vmware.com/<wbr>servlet/JiveServlet/download/<wbr>2025997-86343/<wbr>vmware802fixlinux320.tar.gz</wbr></wbr></wbr></a>

#### Step 7: Extract the tarball 

I put mine on the desktop for easy access because you are going to delete these two files in a minute.

#### Step 8: Open patch-modules_3.2.0.sh in  a text editor 

In terminal you can use:

<blockquote>sudo gedit Desktop/patch-modules_3.2.0.sh</blockquote>

#### Step 9: Edit line 8 so it says the current version instead of 4.0.2 

#### Step 10: Save that file and then in terminal run 

<blockquote>sudo Desktop/patch-modules_3.2.0.sh</blockquote>

#### Step 11: Enter your pw if needed, then try opening VMware again, it should work! 