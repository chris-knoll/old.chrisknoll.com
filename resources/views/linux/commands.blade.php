	<h3>Commands</h3>
	<dl>
		<dt><code>alias</code></dt>
		<dd>Set an alias to perform a specified command.</dd>
		<dt><code>cat file1 file2 > newfile</code></dt>
		<dd>Concatenates two files together.  Pass only one file to view contents.</dd>
		<dt><code>cp</code></dt>
		<dd>Copy first file to a new file in the second argument.</dd>
		<dt><code>file</code></dt>
		<dd>Displays file type.</dd>
		<dt><code>find</code></dt>
		<dd>Finds files, even new ones.  Slower than locate since it's not using a database.</dd>
		<dt><code>info</code></dt>
		<dd>More information than <code>whatis</code>.</dd>
		<dt><code>locate</code></dt>
		<dd>Uses a database to find files.  <code>updatedb</code> can be ran to update the database of files.  Faster than <code>find</code> since it uses the database.</dd>
		<dt><code>ls</code></dt>
		<dd>List - lists files and directories where you currently are.  <code>ls -al</code> shows long / all.</dd>
		<dt><code>man [option]</code></dt>
		<dd>Display manual for passed command.</dd>
		<dt><code>mkdir</code></dt>
		<dd>Makes a directory.</dd>
		<dt><code>pwd</code></dt>
		<dd>Print working directory - displays what directory you are currently in.</dd>
		<dt><code>rm</code></dt>
		<dd>Deletes a file.  Doesn't work on directories.</dd>
		<dt><code>rmdir</code></dt>
		<dd>Removes a directory.</dd>
		<dt><code>touch</code></dt>
		<dd>Creates an empty file with the given name.</dd>
		<dt><code>type</code></dt>
		<dd>Determines information about various commands.  Will display if the command is in the shell, or an alias.</dd>
		<dt><code>unalias</code></dt>
		<dd>Remove a previously defined alias.</dd>
		<dt><code>uname</code></dt>
		<dd>System information, such as kernal, CPU, OS.</dd>
		<dt><code>whatis</code></dt>
		<dd>Shows manual page descriptions.</dd>
		<dt><code>whereis</code></dt>
		<dd>Locates the path where a particular command is located.</dd>
		<dt><code>which</code></dt>
		<dd>Shows the "real" command path if there is more than one result with whereis.</dd>
	</dl>