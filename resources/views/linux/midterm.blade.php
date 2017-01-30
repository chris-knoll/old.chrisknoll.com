@extends('layouts.master')

@section('content')
        <!-- Styles -->
        <style>
            html, body {
                overflow:hidden;
                height: 100%;
                margin: 0;
            }

            #linux-commands {
            	height:100%;
            	overflow-y: scroll;
            	position: absolute;
            	top:80px;
            	bottom: 0;
            	left:0;
            	background:tan;
            	color: black;
            }

            #linux-commands dt {
            	margin-top: 10px;
            }

            #main-study {
            	height:100%;
            	overflow-y:scroll;
            	position:absolute;
            	top:80px;
            	bottom:0;
            	right:0;
            }
        </style>

	<h1>Midterm Study Notes (Ch 1 - 14)</h1>

<div class="col-sm-3" id="linux-commands">
	<h3>Commands</h3>
	<dl>
		<dt><code>pwd</code></dt>
		<dd>Print working directory - displays what directory you are currently in.</dd>
		<dt><code>ls</code></dt>
		<dd>List - lists files and directories where you currently are.  <code>ls -al</code> shows long / all.</dd>
		<dt><code>uname</code></dt>
		<dd>System information, such as kernal, CPU, OS.</dd>
		<dt><code>touch</code></dt>
		<dd>Creates an empty file with the given name.</dd>
		<dt><code>rm</code></dt>
		<dd>Deletes a file.  Doesn't work on directories.</dd>
		<dt><code>cp</code></dt>
		<dd>Copy first file to a new file in the second argument.</dd>
		<dt><code>alias</code></dt>
		<dd>Set an alias to perform a specified command.</dd>
		<dt><code>unalias</code></dt>
		<dd>Remove a previously defined alias.</dd>
		<dt><code>man [option]</code></dt>
		<dd>Display manual for passed command.</dd>
		<dt><code>whatis</code></dt>
		<dd>Shows manual page descriptions.</dd>
		<dt><code>info</code></dt>
		<dd>More information than <code>whatis</code>.</dd>
		<dt><code>cat file1 file2 > newfile</code></dt>
		<dd>Concatenates two files together.  Pass only one file to view contents.</dd>
		<dt><code>file</code></dt>
		<dd>Displays file type.</dd>
	</dl>
</div>

<div class="col-sm-9" id="main-study">

	<h3>Chapter 1: Using the Shell</h3>
	<hr />
	<ul>
		<li>Kernal: The kernel of the operating system is like an air traffic controller at an airport. The kernel dictates which program gets which pieces of memory, it starts and kills programs, and it handles displaying text on a monitor.</li>
		<li>Bootloader: When the computer starts up, it loads a small piece of code called a bootloader. The bootloader’s job is to load the kernel and get it started.</li>
	</ul>

	<h5><code>uname</code> options</h5>
	<table class="table ">
		<thead><tr>
		<th>Short Option</th>
		<th>Long Option</th>
		<th>Prints</th>
		</tr></thead>
		<tbody>
		<tr>
		<td><code>-a</code></td>
		<td><code>--all</code></td>
		<td>All information</td>
		</tr>
		<tr>
		<td><code>-s</code></td>
		<td><code>--kernel-name</code></td>
		<td>Kernel name</td>
		</tr>
		<tr>
		<td><code>-n</code></td>
		<td><code>--node-name</code></td>
		<td>Network node name</td>
		</tr>
		<tr>
		<td><code>-r</code></td>
		<td><code>--kernel-release</code></td>
		<td>Kernel release</td>
		</tr>
		<tr>
		<td><code>-v</code></td>
		<td><code>--kernel-version</code></td>
		<td>Kernel version</td>
		</tr>
		<tr>
		<td><code>-m</code></td>
		<td><code>--machine</code></td>
		<td>Machine hardware name</td>
		</tr>
		<tr>
		<td><code>-p</code></td>
		<td><code>--processor</code></td>
		<td>Processor type or unknown</td>
		</tr>
		<tr>
		<td><code>-i</code></td>
		<td><code>--hardware-platform</code></td>
		<td>Hardware platform or unknown</td>
		</tr>
		<tr>
		<td><code>-o</code></td>
		<td><code>--operating-system</code></td>
		<td>Operating system</td>
		</tr>
		<tr>
		<td></td>
		<td><code>--help</code></td>
		<td>Help information</td>
		</tr>
		<tr>
		<td></td>
		<td><code>--version</code></td>
		<td>Version information</td>
		</tr>
		</tbody>
	</table>

	<ul>
		<li>Which command will send text to the terminal display: <code>echo</code></li>
		<li>To display your current location within the filesystem, you can type: <code>pwd</code></li>
		<li>The _____ command displays information about the Linux kernel: <code>uname</code></li>
		<li>The basic form of a command line is: <code>command [options…] [arguments…]</code></li>
		<li>The two login types are: CLI and GUI</li>
		<li>You want to execute the ls command with two options: -r and -l. Which of the following are valid ways to run this command: (choose three) <code>ls -l -r</code>, <code>ls -r -l</code>, <code>ls -rl</code></li>
		<li>The location of users' default shells is stored in the ______ file: /etc/passwd</li>
		<li>Which two characters do you use to tell the command that you are finished providing options and that the remaining data on the command line is arguments?: <code>--</code></li>
		<li>The _____ option to the uname command will display the kernel name: <code>-s</code></li>
		<li>The ______ command will display your current working directory: <code>pwd</code></li>

	</ul>

	<h3>Chapter 2: <code>man</code> Pages</h3>
	<hr />

	<div class="alert alert-info">
		<p>By default there are nine default sections of <code class="console">man</code> pages:</p>
		<ol type="disc" class="">
			<li>Executable programs or shell commands</li>
			<li>System calls (functions provided by the kernel)</li>
			<li>Library calls (functions within program libraries)</li>
			<li>Special files (usually found in <code class="console">/dev</code>)</li>
			<li>File formats and conventions, e.g. <code class="console">/etc/passwd</code>
			</li>
			<li>Games</li>
			<li>Miscellaneous (including macro  packages and conventions), e.g. <code class="console">man(7)</code>, <code class="console">groff(7)</code>
			</li>
			<li>System administration commands (usually only for root)</li>
			<li>Kernel routines [Non standard]</li>
		</ol>
	</div>

	<h5><code>man</code> page commands</h5>
	<table class="table ">
		<thead><tr>
		<th>Command</th>
		<th>Function</th>
		</tr></thead>
		<tbody>
		<tr>
		<td>
		<strong>Return</strong> (or <strong>Enter</strong>)</td>
		<td>Go down one line</td>
		</tr>
		<tr>
		<td><strong>Space</strong></td>
		<td>Go down one page</td>
		</tr>
		<tr>
		<td><code class="input">/<var>term</var></code></td>
		<td>Search for <var><code class="console">term</code></var>
		</td>
		</tr>
		<tr>
		<td><code class="input">n</code></td>
		<td>Find next search item</td>
		</tr>
		<tr>
		<td><code class="input">1G</code></td>
		<td>Go to beginning of the page</td>
		</tr>
		<tr>
		<td><code class="input">G</code></td>
		<td>Go to end of the page</td>
		</tr>
		<tr>
		<td><code class="input">h</code></td>
		<td>Display help</td>
		</tr>
		<tr>
		<td><code class="input">q</code></td>
		<td>Quit <code class="console">man</code> page</td>
		</tr>
		</tbody>
	</table>

	<h5>man page sections</h5>

	<table class="table ">
		<thead><tr>
		<th>Command</th>
		<th>Function</th>
		</tr></thead>
		<tbody>
		<tr>
		<td>
		<strong>Return</strong> (or <strong>Enter</strong>)</td>
		<td>Go down one line</td>
		</tr>
		<tr>
		<td><strong>Space</strong></td>
		<td>Go down one page</td>
		</tr>
		<tr>
		<td><code class="input">/<var>term</var></code></td>
		<td>Search for <var><code class="console">term</code></var>
		</td>
		</tr>
		<tr>
		<td><code class="input">n</code></td>
		<td>Find next search item</td>
		</tr>
		<tr>
		<td><code class="input">1G</code></td>
		<td>Go to beginning of the page</td>
		</tr>
		<tr>
		<td><code class="input">G</code></td>
		<td>Go to end of the page</td>
		</tr>
		<tr>
		<td><code class="input">h</code></td>
		<td>Display help</td>
		</tr>
		<tr>
		<td><code class="input">q</code></td>
		<td>Quit <code class="console">man</code> page</td>
		</tr>
		</tbody>
	</table>

	<h5>Navigating man pages</h5>
	<table class="table ">
		<thead><tr>
		<th>Command</th>
		<th>Function</th>
		</tr></thead>
		<tbody>
		<tr>
		<td>
		<strong>Return</strong> (or <strong>Enter</strong>)</td>
		<td>Go down one line</td>
		</tr>
		<tr>
		<td><strong>Space</strong></td>
		<td>Go down one page</td>
		</tr>
		<tr>
		<td><code class="input">/<var>term</var></code></td>
		<td>Search for <var><code class="console">term</code></var>
		</td>
		</tr>
		<tr>
		<td><code class="input">n</code></td>
		<td>Find next search item</td>
		</tr>
		<tr>
		<td><code class="input">1G</code></td>
		<td>Go to beginning of the page</td>
		</tr>
		<tr>
		<td><code class="input">G</code></td>
		<td>Go to end of the page</td>
		</tr>
		<tr>
		<td><code class="input">h</code></td>
		<td>Display help</td>
		</tr>
		<tr>
		<td><code class="input">q</code></td>
		<td>Quit <code class="console">man</code> page</td>
		</tr>
		</tbody>
	</table>

	<ul>
		<li>Which command is used in order to view the manual page for a topic?: <code>man</code></li>
		<li>Which of the following man page sections will provide an example of how a command is executed?: The SYNOPSIS section</li>
		<li>The [ ] characters around day in the example <code>cal [-smjy13] [[[day] month] year]</code> means that day is: Optional</li>
		<li>The syntax <code>[-u|--utc|--universal]</code> means: These three options mean the same thing</li>
		<li>The command man 5 passwd will: Display the man page of Section 5 for <code>passwd</code></li>
		<li>To see a list of commands that are available while viewing a man page, you can type the __ character: <code>h</code></li>
		<li>To search for something while viewing a man page, you first type a __ character: <code>/</code></li>
		<li>Special file man pages are typically located in section ____: 4</li>
		<li>System Administration man pages are typically located in section ___: 8</li>
		<li>Shell command man pages are typically located in section ___: 1</li>
	</ul>

	<h3>Chapter 3: Text Utilities</h3>
	<hr />

	<h5><code>od</code> formats</h5>
	<table class="table ">
		<thead><tr>
		<th>Single Option</th>
		<th>Option with Argument</th>
		<th>Meaning</th>
		</tr></thead>
		<tbody>
		<tr>
		<td><code>-a</code></td>
		<td><code>-t a</code></td>
		<td>Named characters, ignoring high bit</td>
		</tr>
		<tr>
		<td><code>-b</code></td>
		<td><code>-t o1</code></td>
		<td>Octal bytes</td>
		</tr>
		<tr>
		<td><code>-c</code></td>
		<td><code>-t c</code></td>
		<td>ASCII characters or backslash escapes</td>
		</tr>
		<tr>
		<td><code>-d</code></td>
		<td><code>-t u2</code></td>
		<td>Unsigned decimal 2-byte units</td>
		</tr>
		<tr>
		<td><code>-f</code></td>
		<td><code>-t fF</code></td>
		<td>Floats</td>
		</tr>
		<tr>
		<td><code>-i</code></td>
		<td><code>-t dI</code></td>
		<td>Decimal integers</td>
		</tr>
		<tr>
		<td><code>-l</code></td>
		<td><code>-t dL</code></td>
		<td>Decimal longs</td>
		</tr>
		<tr>
		<td><code>-o</code></td>
		<td><code>-t o2</code></td>
		<td>Octal 2 byte units</td>
		</tr>
		<tr>
		<td><code>-s</code></td>
		<td><code>-t d2</code></td>
		<td>Decimal 2 byte units</td>
		</tr>
		<tr>
		<td><code>-x</code></td>
		<td><code>-t x2</code></td>
		<td>Hexadecimal 2 byte units</td>
		</tr>
		</tbody>
	</table>

	<ul>
		<li>If you want to see the entire contents of a text file, you can use the _____ command: <code>cat</code></li>
		<li>The <code>head -n -1 readme.txt</code> command will: Display all but the last line of readme.txt</li>
		<li>Why would you press CTRL+C when executing tail?: To stop tail from following a file</li>
		<li>Which command merges two files like related tables in a database?: <code>join</code></li>
		<li>Which command will merge two files together line by line?: <code>paste</code></li>
		<li>If you want to break apart a large file into smaller files, you can use: <code>split</code></li>
		<li>Select the function that the tr command cannot perform: Insert characters</li>
		<li>If you want to set the maximum line width for a text file, you can use: <code>fmt</code></li>
		<li>The _____ command provides many options for formatting a file for printing: <code>pr</code></li>
		<li>Two tables have columns with the same field names. What is required in order to join the two tables?: Field names must be prefixed by the table name and a period.</li>
	</ul>

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

</div>
@endsection