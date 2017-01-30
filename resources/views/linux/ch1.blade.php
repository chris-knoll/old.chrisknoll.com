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

<p><strong>Quiz</strong></p> 
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