---
title: My Git Cheat Sheet
layout: post
---

Hopefully this isn't too confusing to everyone. I've been learning a lot about git lately and have decided to use this post as a dumping ground for all the cool git tricks I pick up along the way.

Want to add a trick or have a better way? Just leave it in the comments.

<h2>To Add all 'modified' files and commit at the same time.</h2>

<pre>
git commit -a -m 'Commit message'
</pre>

<h2>To Undo a commit and put committed files back in staging</h2>

<pre>
git reset --soft HEAD^
</pre>

<h2>To unstage a file</h2>

<pre>
git reset HEAD filename
</pre>

<h2>Blow away all changes since last commit</h2>

<pre>
git checkout -- filename
</pre>

<h2>To add a file ( or files ) to the last commit</h2>

<pre>
git add filename
git commit --amend -m 'new commit message'
</pre>

<h2>Blow away the last commit entirely</h2>

<pre>
git reset --hard HEAD^
</pre>

<h2>Article about not having to enter username / password everytime</h2>

<pre>
https://help.github.com/articles/set-up-git
</pre>