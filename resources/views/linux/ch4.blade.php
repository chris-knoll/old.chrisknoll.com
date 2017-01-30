<h3>Chapter 4: Configuring the Shell</h3>
<hr />


<table class="table ">
	<thead><tr>
	<th>Valid Variable Assignments</th>
	<th>Invalid Variable Assignments</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code class="console">a=1</code></td>
	<td><code class="console">1=a</code></td>
	</tr>
	<tr>
	<td><code class="console">_1=a</code></td>
	<td><code class="console">a-1=3</code></td>
	</tr>
	<tr>
	<td><code class="console">LONG_VARIABLE='OK'</code></td>
	<td><code class="console">LONG-VARIABLE='WRONG'</code></td>
	</tr>
	<tr>
	<td><code class="console">Name='Jose Romero'</code></td>
	<td><code class="console">'user name'=anything</code></td>
	</tr>
	</tbody>
</table>

<table class="table ">
	<thead><tr>
	<th>Directory</th>
	<th>Contents</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code class="console">/home/sysadmin/bin</code></td>
	<td>A directory for the current user <code class="console">sysadmin</code> to place programs. Typically used by users who create their own scripts.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/local/sbin</code></td>
	<td>Normally empty, but may have administrative commands that have been compiled from local sources.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/local/bin</code></td>
	<td>Normally empty, but may have commands that have been compiled from local sources.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/sbin</code></td>
	<td>Contains the majority of the administrative command files.</td>
	</tr>
	<tr>
	<td><code class="console">/usr/bin</code></td>
	<td>Contains the majority of the commands that are available for regular users to execute.</td>
	</tr>
	<tr>
	<td><code class="console">/sbin</code></td>
	<td>Contains the essential administrative commands.</td>
	</tr>
	<tr>
	<td><code class="console">/bin</code></td>
	<td>Contains the most fundamental commands that are essential for the operating system to function.</td>
	</tr>
	</tbody>
</table>

<table class="table ">
	<thead><tr>
	<th>File</th>
	<th>Purpose</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code class="console">/etc/profile</code></td>
	<td>This file can only be modified by the administrator and will be executed by every user who logs in. Administrators use this file to create key environment variables, display messages to users as they log in and set key system values.</td>
	</tr>
	<tr>
	<td><code class="console">~/.bash_profile</code></td>
	<td>Each user has their own <code class="console">.bash_profile</code> file in their home directory.  The purpose for this file is the same as the <code class="console">/etc/profile</code> file, but having this file allows a user to customize the shell to their own tastes.  Normally used to create customized environment variables.</td>
	</tr>
	<tr>
	<td><code class="console">~/.bashrc</code></td>
	<td>Each user has their own <code class="console">.bashrc</code> file in their home directory.  The purpose for this file is to generate things that need to be created for each shell, such as local variables and aliases.</td>
	</tr>
	<tr>
	<td><code class="console">/etc/bashrc</code></td>
	<td>This file may affect every user on the system.  Only the administrator can modify this file.  Like the <code class="console">.bashrc</code> file, the purpose for this file is to generate things that need to be created for each shell, such as local variables and aliases.</td>
	</tr>
	</tbody>
</table>

<table class="table ">
	<thead><tr>
	<th>Action</th>
	<th>Key</th>
	<th>Alternate Key Combination</th>
	</tr></thead>
	<tbody>
	<tr>
	<td>Previous history item</td>
	<td>↑</td>
	<td><strong>Ctrl+P</strong></td>
	</tr>
	<tr>
	<td>Next history item</td>
	<td>↓</td>
	<td><strong>Ctrl+N</strong></td>
	</tr>
	<tr>
	<td>Reverse history search</td>
	<td></td>
	<td><strong>Ctrl+R</strong></td>
	</tr>
	<tr>
	<td>Beginning of line</td>
	<td><strong>Home</strong></td>
	<td><strong>Ctrl+A</strong></td>
	</tr>
	<tr>
	<td>End of line</td>
	<td><strong>End</strong></td>
	<td><strong>Ctrl+E</strong></td>
	</tr>
	<tr>
	<td>Delete current character</td>
	<td><strong>Delete</strong></td>
	<td><strong>Ctrl+D</strong></td>
	</tr>
	<tr>
	<td>Delete to left of cursor</td>
	<td><strong>Backspace</strong></td>
	<td><strong>Ctrl+X</strong></td>
	</tr>
	<tr>
	<td>Move cursor left</td>
	<td>←</td>
	<td><strong>Ctrl+B</strong></td>
	</tr>
	<tr>
	<td>Move cursor right</td>
	<td>→</td>
	<td><strong>Ctrl+F</strong></td>
	</tr>
	</tbody>
</table>

<table class="table ">
	<thead><tr>
	<th>Option</th>
	<th>Purpose</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code>-c</code></td>
	<td>Clear the list</td>
	</tr>
	<tr>
	<td><code>-r</code></td>
	<td>Read the history file and replace the current history</td>
	</tr>
	<tr>
	<td><code>-w</code></td>
	<td>Write the current history list to the history file</td>
	</tr>
	</tbody>
</table>

<table class="table ">
	<thead><tr>
	<th>History Command</th>
	<th>Meaning</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code>!!</code></td>
	<td>Repeat the last command</td>
	</tr>
	<tr>
	<td><code>!-4</code></td>
	<td>Execute the command that was run four commands ago</td>
	</tr>
	<tr>
	<td><code>!555</code></td>
	<td>Execute command number <code class="console">555</code>
	</td>
	</tr>
	<tr>
	<td><code>!ec</code></td>
	<td>Execute the last command that started with <code class="console">ec</code>
	</td>
	</tr>
	<tr>
	<td><code>!?joe</code></td>
	<td>Execute the last command that contained <code class="console">joe</code>
	</td>
	</tr>
	</tbody>
</table>

<ul>
	<li>The PATH environment variable is used for: Specifying directories to search for executable files</li>
	<li>Which of the following will create a variable?: <code>VAR=value</code></li>
	<li>Environment variables are: Passed into shells and commands</li>
	<li>The PATH variable will be used under which situation?: The command is not found</li>
	<li>The path /data/file.txt is: An absolute path</li>
	<li>Which of the following files is specific to each user and executed only during login?: ~/.bash_profile</li>
	<li>Which of the following files is for all bash shell users and executed every time a bash shell is opened?: /etc/bashrc</li>
	<li>The _____ variable stores directories that the shell used to find executable files: PATH</li>
	<li>When specifying a path, the __ character symbolizes the current directory: .</li>
	<li>The _____ command will tell you if a command exists as a built-in command, function, alias or a command located within the PATH variable: type</li>
</ul>