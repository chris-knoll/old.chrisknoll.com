# Git Reference

`git init`

Run in any folder to start tracking with Git.  This will create a hidden .git folder that has everything Git uses for tracking.  You shouldn't mess with anything in here except for config.

`git add`

Adds files that changed to the staging index.  If you want to include everything that changed, run `git add .`

`git commit -m "Message"`

Commits current changes to the local repository.

`git log`

Shows all commits and messages.  Can be useful if you want to find a SHA of a previous commit to checkout.

`git log -n 3`

Shows the last 3 commits only.  Some other examples of git log:
- `git log --since=2016-12-01`
- `git log --until=2016-12-01`
- `git log --author chris-knoll`
- `git log --grep nav`

`git status`

Reports differences between the local repository, staging index, and working directory.

`git diff`

Shows differences in modified files.

`git diff --staged`

Only show differences on local repo vs staged index (does not show any working directory files that aren't staged).

`git rm file_name`

Deletes a file and lets Git know that you removed it.  This way you don't have to do `git add deleted_file` in an additional step.

`git mv old_name new_name`

Renames a file.  This is the easy way to do it since Git will know what's going on and handle it gracefully.

`git checkout treeish`

Pulls resource from the repo.  This will change your entire working directory to how it was at that commit / branch.

`git checkout treeish --file.name`

Checkout just the file you specify.

`git reset HEAD file.name`

Unstage file.

`git commit --amend -n "  "`

Corrects last commit.  You can only change the last commit.

`git revert treeish`

Reverts commit specified.  It will make a new commit that reverses the changes from the specified commit.

`git reset --mode <treeish>`

Changes what HEAD is pointing at.

`git reset --soft`

Does not change staging index or working directory.

`git reset --mixed`

Moves HEAD and changes staging index to match.

`git reset --hard`

Changes everything to match the treeish specified - you will lose all changes you've made to the working directory.  Be careful!

`git clean -n`

Test run to remove untracked files.

`git clean -f`

Actually removes untracked files

`git ls_tree <treeish>`

ls all files / contents of that treeish.

`git diff <treeish>`

Show difference between treeish and current working directory.  Can specify a file to compare just one file.

`git diff [SHA]..[SHA]`

Compare two commits.  Can look at just one file.