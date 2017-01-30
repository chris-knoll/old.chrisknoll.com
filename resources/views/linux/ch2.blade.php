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