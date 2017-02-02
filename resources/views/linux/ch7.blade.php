<h3>Chapter 7: Finding Files</h3>
<hr />

<p>The <code>find</code> command also offers many options for searching files, unlike the <code>locate</code> command which searches only for files based on filename.  The following table illustrates some of the more commonly used criteria:</p>

<table class="table ">
	<thead><tr>
	<th>Example</th>
	<th>Meaning</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code>-iname LOSTFILE</code></td>
	<td>Case insensitive search by name</td>
	</tr>
	<tr>
	<td><code>-mtime -3</code></td>
	<td>Files modified less than three days ago</td>
	</tr>
	<tr>
	<td><code>-mmin -10</code></td>
	<td>Files modified less than ten minutes ago</td>
	</tr>
	<tr>
	<td><code>-size +1M</code></td>
	<td>Files larger than one megabyte</td>
	</tr>
	<tr>
	<td><code>-user joe</code></td>
	<td>Files owned by the user joe</td>
	</tr>
	<tr>
	<td><code>-nouser</code></td>
	<td>Files not owned by any user</td>
	</tr>
	<tr>
	<td><code>-empty</code></td>
	<td>Files that are empty</td>
	</tr>
	<tr>
	<td><code>-type d</code></td>
	<td>Files that are directory files</td>
	</tr>
	<tr>
	<td><code>-maxdepth 1</code></td>
	<td>Do not use recursion to enter subdirectories; only search primary directory</td>
	</tr>
	</tbody>
</table>

<table class="table ">
	<thead><tr>
	<th>Directory</th>
	<th>Purpose</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code class="console">/</code></td>
	<td>The root of the primary filesystem hierarchy.</td>
	</tr>
	<tr>
	<td><code class="console">/bin</code></td>
	<td>Contains essential user binary executables.</td>
	</tr>
	<tr>
	<td><code class="console">/boot</code></td>
	<td>Contains the kernel and bootloader files.</td>
	</tr>
	<tr>
	<td><code class="console">/dev</code></td>
	<td>Populated with files representing attached devices.</td>
	</tr>
	<tr>
	<td><code class="console">/etc</code></td>
	<td>Configuration files specific to the host.</td>
	</tr>
	<tr>
	<td><code class="console">/home</code></td>
	<td>Common location for user home directories.</td>
	</tr>
	<tr>
	<td><code class="console">/lib</code></td>
	<td>Essential libraries to support <code class="console">/bin</code> and <code class="console">/sbin</code> executables.</td>
	</tr>
	<tr>
	<td><code class="console">/mnt</code></td>
	<td>Mount point for temporarily mounting a filesystem.</td>
	</tr>
	<tr>
	<td><code class="console">/opt</code></td>
	<td>Optional third party add-on software.</td>
	</tr>
	<tr>
	<td><code class="console">/root</code></td>
	<td>Home directory for the root user.</td>
	</tr>
	<tr>
	<td><code class="console">/sbin</code></td>
	<td>Contains system or administrative binary executables.</td>
	</tr>
	<tr>
	<td><code class="console">/srv</code></td>
	<td>May contain data provided by services of the system.</td>
	</tr>
	<tr>
	<td><code class="console">/tmp</code></td>
	<td>Location for creating temporary files.</td>
	</tr>
	<tr>
	<td><code class="console">/usr</code></td>
	<td>The root of the secondary filesystem hierarchy.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/bin</code></td>
	<td>Contains the majority of the user commands.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/include</code></td>
	<td>Header files for compiling C-based software.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/lib</code></td>
	<td>Shared libraries to support <code class="console">/usr/bin</code> and <code class="console">/usr/sbin</code>.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/local</code></td>
	<td>The root of the third filesystem hierarchy for local software.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/sbin</code></td>
	<td>Non-vital system or administrative executables.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/share</code></td>
	<td>Location for architecturally-independent data files.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/share/dict</code></td>
	<td>Word lists.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/share/doc</code></td>
	<td>Documentation for software packages.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/share/info</code></td>
	<td>Information pages for software packages.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/share/locale</code></td>
	<td>Locale information.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/share/man</code></td>
	<td>Location for man pages.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/share/nls</code></td>
	<td>Native language support files.</td>
	</tr>
	</tbody>
</table> 

<p>The table below summarizes the main distinctions between file types:</p>

<table class="table ">
	<thead><tr>
	<th></th>
	<th>Shareable</th>
	<th>Unshareable</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><strong>Static</strong></td>
	<td>
	<p><code class="console">/usr</code></p>
	<p><code class="console">/opt</code></p>
	</td>
	<td>
	<p><code class="console">/etc</code></p>
	<p><code class="console">/boot</code></p>
	</td>
	</tr>
	<tr>
	<td><strong>Variable</strong></td>
	<td>
	<p><code class="console">/var/mail</code></p>
	<p><code class="console">/var/spool/news</code></p>
	</td>
	<td>
	<p><code class="console">/var/run</code></p>
	<p><code class="console">/var/lock</code></p>
	</td>
	</tr>
	</tbody>
</table>

<p><strong>Quiz</strong></p> 
<ul>
	<li>Which of the following are advantages of using the locate command?: It is quicker than the find command</li>
	<li>Which of the following are advantages of using the find command?: Its results are always the most up-to-date, It can search by file attribute types</li>
	<li>The FHS sets which standard?: Which directories should be used to hold specific files</li>
	<li>Which directory is used to store files representing attached devices?: /dev</li>
	<li>The _____ command will search for files using a database of all files, which is generated daily.: <code>locate</code></li>
	<li>Which option to the locate command will have the command perform case-insensitive searches?: <code>-i</code></li>
	<li>Which option to the find command will prompt the user to execute a command on each matching file?: <code>-ok</code></li>
	<li>Which option to the find command will search by name using a case-insensitive match?: <code>-iname</code></li>
	<li>Which directory is used to store temporary files?: /tmp</li>
	<li>Which directory is used to store essential libraries?: /lib</li>
</ul>