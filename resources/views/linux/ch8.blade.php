<h3>Chapter 8: Regular Expressions</h3>
<hr />

<p>The following table summarizes basic regular expression characters:</p>

<table class="table ">
	<thead><tr>
	<th>Basic Regex Character(s)</th>
	<th>Meaning</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code class="console">.</code></td>
	<td>Any one single character</td>
	</tr>
	<tr>
	<td><code class="console">[ ]</code></td>
	<td>Any one specified character</td>
	</tr>
	<tr>
	<td><code class="console">[^ ]</code></td>
	<td>Not the one specified character</td>
	</tr>
	<tr>
	<td><code class="console">*</code></td>
	<td>Zero or more of the previous character</td>
	</tr>
	<tr>
	<td><code class="console">^</code></td>
	<td>If first character in the pattern, then pattern must be at beginning of the line to match, otherwise just a literal <code class="console">^</code>
	</td>
	</tr>
	<tr>
	<td><code class="console">$</code></td>
	<td>If last character in the pattern, then pattern must be at the end of the line to match, otherwise just a literal <code class="console">$</code>
	</td>
	</tr>
	</tbody>
</table>

<p>The following table summarizes the extended regular expressions, which must be used with either the <code>egrep</code> command or the <code>-E</code> option with the <code>grep</code> command:</p>

<table class="table ">
	<thead><tr>
	<th>Extended Regex Character(s)</th>
	<th>Meaning</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code class="console">+</code></td>
	<td>One or more of the previous pattern</td>
	</tr>
	<tr>
	<td><code class="console">?</code></td>
	<td>The preceding pattern is optional</td>
	</tr>
	<tr>
	<td><code class="console">{ }</code></td>
	<td>Specify minimum, maximum or exact matches of the previous pattern</td>
	</tr>
	<tr>
	<td><code class="console">|</code></td>
	<td>Alternation - a logical "or"</td>
	</tr>
	<tr>
	<td><code class="console">( )</code></td>
	<td>Used to create groups</td>
	</tr>
	</tbody>
</table>

<p>The curly braces also modify the preceding character or pattern.  They can be used instead of either the <code class="console">*</code>,  <code class="console">+</code>, or <code class="console">?</code> characters.  The following chart illustrates some examples of using curly braces:</p>

<table class="table ">
	<thead><tr>
	<th>Curly Brace Example</th>
	<th>Other Regex Equivalent</th>
	<th>Meaning</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code class="console">a{0,}</code></td>
	<td><code class="console">a*</code></td>
	<td>Zero or more <code class="console">a</code> characters</td>
	</tr>
	<tr>
	<td><code class="console">a{1,}</code></td>
	<td><code class="console">a+</code></td>
	<td>One or more <code class="console">a</code> characters</td>
	</tr>
	<tr>
	<td><code class="console">a{0,1}</code></td>
	<td><code class="console">a?</code></td>
	<td>Zero or one <code class="console">a</code> characters</td>
	</tr>
	<tr>
	<td><code class="console">a{5}</code></td>
	<td>N/A</td>
	<td>Five <code class="console">a</code> characters</td>
	</tr>
	<tr>
	<td><code class="console">a{,5}</code></td>
	<td>N/A</td>
	<td>Five or fewer <code class="console">a</code> characters</td>
	</tr>
	<tr>
	<td><code class="console">a{3,5}</code></td>
	<td>N/A</td>
	<td>From three to five <code class="console">a</code> characters</td>
	</tr>
	</tbody>
</table>

<p>Special backslash character combinations</p>

<table class="table ">
	<thead><tr>
	<th>Backslash Sequence</th>
	<th>Matches</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code class="console">\b</code></td>
	<td>A word boundary</td>
	</tr>
	<tr>
	<td><code class="console">\B</code></td>
	<td>Not a word boundary</td>
	</tr>
	<tr>
	<td><code class="console">\w</code></td>
	<td>A word character</td>
	</tr>
	<tr>
	<td><code class="console">\W</code></td>
	<td>Not a word character</td>
	</tr>
	<tr>
	<td><code class="console">\s</code></td>
	<td>A whitespace character</td>
	</tr>
	<tr>
	<td><code class="console">\S</code></td>
	<td>Not a whitespace character</td>
	</tr>
	<tr>
	<td><code class="console">\\</code></td>
	<td>A backslash character</td>
	</tr>
	</tbody>
</table>

<p>The man page for the <code>grep</code> command provides basic information about regular expressions, as well as options for the <code>grep</code>, <code>egrep</code> and <code>fgrep</code> commands.  The following table lists some of the more commonly used options:</p>

<table class="table ">
	<thead><tr>
	<th>Option</th>
	<th>Meaning</th>
	</tr></thead>
	<tbody>
	<tr>
	<td><code>-i</code></td>
	<td>Case insensitive</td>
	</tr>
	<tr>
	<td><code>-v</code></td>
	<td>Invert search results (logically negates criteria) - returns all lines that don't contain specified pattern</td>
	</tr>
	<tr>
	<td><code>-l</code></td>
	<td>List filename of content in file matches</td>
	</tr>
	<tr>
	<td><code>-r</code></td>
	<td>Perform a recursive search including subdirectories</td>
	</tr>
	<tr>
	<td><code>-w</code></td>
	<td>Match whole word only</td>
	</tr>
	<tr>
	<td><code>-q</code></td>
	<td>Quietly operate without producing output</td>
	</tr>
	</tbody>
</table>

<p><strong>Quiz</strong></p> 
<ul>
	<li>Which regular expression character matches any one character?: .</li>
	<li>Which regular expression character matches zero or more of the previous character?: *</li>
	<li>Which regular expression character matches one or more of the previous character?: +</li>
	<li>What does "|" do in a regular expression?: Separates alternative patterns that can be matches</li>
	<li>The regular expression a? is equivalent to: a{0,1}</li>
	<li>The regular expression a+ is equivalent to: a{1,}</li>
	<li>To use extended regular expressions, you can use: <code>egrep</code>, <code>grep -E</code></li>
	<li>To use regular expression characters to match themselves, you cannot: Use the slash in front of the character</li>
	<li>What is NOT a purpose of using parentheses around parts of a regular expression?: They can be used to change the order that the pattern is evaluating</li>
	<li>If you want to use grep without regard to the capitalization of text, you can use the option: <code>-i</code></li>
</ul>