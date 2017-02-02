<h3>Chapter 9: vi</h3>
<hr />

<p> The following table summarizes the motion keys available:</p>

<table class="table ">
	<thead><tr>
	<th>Motion</th>
	<th>Result</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code class="input">h</code></td>
	<td>Left one character</td>
	</tr>
	<tr>
	<td><code class="input">j</code></td>
	<td>Down one line</td>
	</tr>
	<tr>
	<td><code class="input">k</code></td>
	<td>Up one line</td>
	</tr>
	<tr>
	<td><code class="input">l</code></td>
	<td>Right one character</td>
	</tr>
	<tr>
	<td><code class="input">w</code></td>

	<td>One word forward</td>
	</tr>
	<tr>
	<td><code class="input">b</code></td>
	<td>One word back</td>
	</tr>
	<tr>
	<td><code class="input">^</code></td>
	<td>Beginning of line</td>
	</tr>
	<tr>
	<td><code class="input">$</code></td>
	<td>End of the line</td>
	</tr>
	</tbody>
</table>

<table class="table ">
	<thead><tr>
	<th>Standard</th>
	<th>Vi</th>
	<th>Meaning</th>
	</tr></thead>
	<tbody>
	<tr>
	<td>cut</td>
	<td><code class="input">d</code></td>
	<td>delete</td>
	</tr>
	<tr>
	<td>copy</td>
	<td><code class="input">y</code></td>
	<td>yank</td>
	</tr>
	<tr>
	<td>paste</td>
	<td>
	<code class="input">P</code> | <code class="input">p</code>
	</td>
	<td>put</td>
	</tr>
	</tbody>
</table>

<p>Delete removes the indicated text from the page and saves it into the buffer, the buffer being the equivalent of the "clipboard" used in Windows or Mac OSX. The following table provides some common usage examples:</p>

<table class="table ">
<thead><tr>
<th>Action</th>
<th>Result</th>
</tr></thead>
<tbody>
<tr>
<td><code class="input">dd</code></td>
<td>Delete current line</td>
</tr>
<tr>
<td><code class="input">3dd</code></td>
<td>Delete the next three lines</td>
</tr>
<tr>
<td><code class="input">dw</code></td>
<td>Delete the current word</td>
</tr>
<tr>
<td><code class="input">d3w</code></td>
<td>Delete the next three words</td>
</tr>
<tr>
<td><code class="input">d4h</code></td>
<td>Delete four characters to the left</td>
</tr>
</tbody>
</table>

<p>Change is very similar to delete, the text is removed and saved into the buffer, however the program is switched to insert mode to allow immediate changes to the text. The following table provides some common usage examples:</p>

<table class="table ">
<thead><tr>
<th>Action</th>
<th>Result</th>
</tr></thead>
<tbody>
<tr>
<td><code class="input">cc</code></td>
<td>Change current line</td>
</tr>
<tr>
<td><code class="input">cw</code></td>
<td>Change current word</td>
</tr>
<tr>
<td><code class="input">c3w</code></td>
<td>Change the next three words</td>
</tr>
<tr>
<td><code class="input">c5h</code></td>
<td>Change five characters to the left</td>
</tr>
</tbody>
</table>

<p>Yank places content into the buffer without deleting it. The following table provides some common usage examples:</p>

<table class="table ">
<thead><tr>
<th>Action</th>
<th>Result</th>
</tr></thead>
<tbody>
<tr>
<td><code class="input">yy</code></td>
<td>Yank current line</td>
</tr>
<tr>
<td><code class="input">3yy</code></td>
<td>Yank the next three lines</td>
</tr>
<tr>
<td><code class="input">yw</code></td>
<td>Yank the current word</td>
</tr>
<tr>
<td><code class="input">y$</code></td>
<td>Yank to the end of the line</td>
</tr>
</tbody>
</table>

<p>Put places the text saved in the buffer either before or after the cursor position. Notice that these are the only two options, put does not use the motions like the previous action commands.</p>

<table class="table ">
<thead><tr>
<th>Action</th>
<th>Result</th>
</tr></thead>
<tbody>
<tr>
<td><code class="input">p</code></td>
<td>Put (paste) after cursor</td>
</tr>
<tr>
<td><code class="input">P</code></td>
<td>Put before cursor</td>
</tr>
</tbody>
</table>

<table class="table ">
<thead><tr>
<th>Input</th>
<th>Purpose</th>
</tr></thead>
<tbody>
<tr>
<td><code class="input">a</code></td>
<td>Enter insert mode right after the cursor</td>
</tr>
<tr>
<td><code class="input">A</code></td>
<td>Enter insert mode at the end of the line</td>
</tr>
<tr>
<td><code class="input">i</code></td>
<td>Enter insert mode right before the cursor</td>
</tr>
<tr>
<td><code class="input">I</code></td>
<td>Enter insert mode at the beginning of the line</td>
</tr>
<tr>
<td><code class="input">o</code></td>
<td>Enter insert mode on a blank line after the cursor</td>
</tr>
<tr>
<td><code class="input">O</code></td>
<td>Enter insert mode on a blank line before the cursor</td>
</tr>
</tbody>
</table>

<table class="table ">
<thead><tr>
<th>Input</th>
<th>Purpose</th>
</tr></thead>
<tbody>
<tr>
<td><code class="input">:w</code></td>
<td>Write the current file to the filesystem</td>
</tr>
<tr>
<td><code class="input">:w <var>filename</var></code></td>
<td>Save a copy of the current file as filename</td>
</tr>
<tr>
<td><code class="input">:w!</code></td>
<td>Force writing to the current file</td>
</tr>
<tr>
<td><code class="input">:1</code></td>
<td>Go to line number 1 or whatever number is given</td>
</tr>
<tr>
<td><code class="input">:e <var>filename</var></code></td>
<td>Open filename</td>
</tr>
<tr>
<td><code class="input">:q</code></td>
<td>Quit if no changes made to file</td>
</tr>
<tr>
<td><code class="input">:q!</code></td>
<td>Quit without saving changes to file</td>
</tr>
</tbody>
</table>

<p><strong>Quiz</strong></p> 
<ul>
	<li>To move forward one word at a time in the vi command mode, you press: w</li>
	<li>To go to the first line of a vi document in command mode, you can type: gg or 1G</li>
	<li>To move backward through a vi document, word by word, you press: b</li>
	<li>What would typing "4dh" do in vi command mode?: Delete the previous four characters</li>
	<li>If you want to quit the vi program without saving any of the changes you made to your file, you can type in command mode: :q!</li>
	<li>To save and then quit, you can type in command mode: :wq</li>
	<li>To perform cut and paste in a vi document, you actually do: delete and put</li>
	<li>If you are in vi command mode and want to add a new line after your cursor, you can type: o</li>
	<li>If you want to move a character to the left in vi command mode, you can press the left arrow key or: h</li>
	<li>If you want to move a character to the right in vi command mode, you can press the right arrow key or: l</li>
</ul>