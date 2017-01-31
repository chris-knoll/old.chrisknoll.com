<h3>Chapter 6: File Globbing</h3>
<hr />

<p><strong>File Glob Wildcard Characters</strong></p>

<ul type="disc" class="">
	<li><code class="console">*</code> wildcard that can be used to match any string, even an empty one.</li>
	<li><code class="console">?</code> matches exactly one character</li>
	<li><code class="console">[ ]</code> similar to <code>?</code> in that it matches only one character, but which characters to match can be specified inside the brackets.  Wildcards lose all meaning when inside the square brackets and only match themselves.</li>
</ul>

<p><strong>Quiz</strong></p> 
<ul>
	<li>How many times can you use a * glob character in a pattern?: No limit</li>
	<li>Assuming at least one file matching the pattern is in the current directory, the command echo a* will display: All of the files in the current directory that begin with an "a" character</li>
	<li>The range defined inside of square brackets is based on the: ASCII text table</li>
	<li>To view the ASCII text table in Linux, you can use the following command: <code>man ASCII</code></li>
	<li>Within square brackets, (Example: [?]) the ? character means: Match a ? character</li>
	<li>Which command performs globbing?: The bash command</li>
	<li>Which of the following will match files that have the string "hello" somewhere in the file name?: echo *hello*</li>
	<li>The glob pattern [a-d] would match: A file name with a single character that is either a "a", "b", "c", or "d".</li>
	<li>The glob pattern [!abc]* would match: All files that start with any character except "a", "b" or "c"</li>
	<li>Which glob character matches "zero or more characters"?: *</li>
</ul>