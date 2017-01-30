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

<p><strong>Quiz</strong></p> 
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