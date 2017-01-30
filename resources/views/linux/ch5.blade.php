<h3>Chapter 5: Configuring the Shell</h3>
<hr />

<p><strong>File Type</strong></p>

<pre class="config">
<span class="attention">-</span>rw-r--r-- 1 root root	14100 Jul 23 18:45 alternatives.log
<span class="attention">d</span>rwxr-xr-x 1 root root	38    Jul 23 18:43 apt
</pre>

<p>The first field actually contains eleven characters, where the first character indicates the type of file and the next ten specify permissions. The file types are: </p>

<ul type="disc" class="">
<li>
<code class="console">d</code> for directory </li>
<li>
<code class="console">-</code> for regular file</li>
<li>
<code class="console">l</code> for a symbolic link</li>
<li>
<code class="console">s</code> for a socket</li>
<li>
<code class="console">p</code> for a pipe</li>
<li>
<code class="console">b</code> for a block file</li>
<li>
<code class="console">c</code> for a character file</li>
</ul>


<p>Note that <code class="console">alternatives.log</code> is a regular file <code class="console">-</code>, while the <code class="console">apt</code> is a directory <code class="console">d</code>.</p>



<p><strong>Permissions</strong></p> 

<pre class="config">d<span class="attention">rwxr-xr-x</span> 1 root root	0 Apr 11 21:58 upstart</pre>

<p>
The permissions are read <code class="console">r</code>, write <code class="console">w</code>, and execute <code class="console">x</code>. Breaking this down a bit:
</p>

<ul type="disc" class="">
<li>
<code class="console">rwx</code> : Owner Permissions</li>
<li>
<code class="console">r-x</code> : Group Permissions</li>
<li>
<code class="console">r-x</code> : Everyone Else’s Permissions</li>
</ul>

<p><strong>Quiz</strong></p> 
<ul>
	<li>Use the ___ option to display hidden files with the ls command: <code>-a</code></li>
	<li>The "." in an ls listing represents: The current directory</li>
	<li>To copy the contents of a directory, use the following option(s) for the cp command: <code>-r</code>, <code>-R</code></li>
	<li>The mv command can be used to move more than one file at a time: true</li>
	<li>Which option for the rm command will cause it to prompt before deleting files?: <code>-i</code></li>
	<li>Which mkdir option should be used to create parent directories (that don't already exist) along with the specified directory?: <code>-p</code></li>
	<li>The rmdir command can be used to delete directories and their contents: False</li>
	<li>Which character at the beginning of a long listing indicates a directory?: d</li>
	<li>Which character at the beginning of a long listing indicates a symbolic link?: l</li>
	<li>Which option to the ls command will sort the output by size instead of alphabetically?: <code>-S</code></li>
</ul>