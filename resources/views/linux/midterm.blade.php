@extends('layouts.master')

@section('content')
        <!-- Styles -->
        <style>
            @media (min-width: 768px) {
	           	html, body {
	                overflow:hidden;
	                height: 100%;
	                margin: 0;
	            }

            	#linux-commands {
	            	overflow-y: scroll;
	            	position: absolute;
	            	top:80px;
	            	bottom: 0;
	            	left:0;
            	}

            	#main-study {
	            	overflow-y:scroll;
	            	position:absolute;
	            	top:80px;
	            	bottom:0;
	            	right:0;
            	}
            }

            #linux-commands {
            	height:100%;
            	background:tan;
            	color: black;
            	padding-bottom: 80px;
            }

            #linux-commands dt {
            	margin-top: 10px;
            }

            #main-study {
            	height:100%;
            	padding-bottom:80px;
            }

            #main-study h3 {
            	padding:10px;
            	margin: 0;
            	background-color: tan;
            	color: black;
            }
        </style>

	<h1>Midterm Study Notes (Ch 1 - 14)</h1>

<div class="col-sm-3" id="linux-commands">
	@include('linux.commands')
</div>

<div class="col-sm-9" id="main-study">
	@include('linux.ch1')
	@include('linux.ch2')
	@include('linux.ch3')
	@include('linux.ch4')



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