I grew up as a Windows user, only being shown the light that is Mac about a year ago.  I didn't do a lot of DOS, so naturally I relied on the GUI in Windows to do everything.  Having a GUI is great and might seem like it's **better**, but in most cases relying on a point and click system just slows you down.  Because a GUI gets the job done and is often the first way you learn to use a computer, it's hard to change your habits and learn a new, more efficient way to do things.

I'm learning Linux at the moment, and while I can see how powerful it is, it's hard to switch from a GUI to a purely or mostly CLI operating system.  To me, Mac is the perfect balance between a GUI and the power of a CLI in it's UNIX terminal.  But I want to start transitioning from relying heavily on the GUI to doing more things on the command line.  And I want to be more productive.  Here is my plan to accomplish that.

### Eliminating Distractions

First of all, let's get rid of some of the GUI crutches that we rely upon.

I have a bad habit of getting distracted -- especially by people trying to communicate with me via e-mail, Messages, Slack, or Facebook.  I always want to be responsive to people trying to reach me.  But if I need to get something done I've found shutting off all these mediums of communication helps me focus immensely.

**Get Rid of the Dock**

Why?  Because it's a waste of screen space, and because Messages, Slack and several other programs will tempt you with little notifications of how many new messages you need to go read.  It also slows you down if you're using the mouse to go to the dock to open / maximize programs.  It's way faster to use keyboard shortcuts.

- System Preferences -> Notifications (or `Command + P` dock)
- Check "Automatically hide and show the Dock"
- Run the following command in a terminal: `defaults write com.apple.dock autohide-delay -float 5; killall Dock`

What you're actually doing with this command is changing the amount of time it takes to autoshow the dock to 5 seconds: it's not completely removing it.  The `killall Dock` command kills the current Dock process which will restart a couple seconds after running it.

If you ever want to make the dock show quicker, just replace the 5 with a shorter delay time in seconds.

I also like to set my dock to the left side of the screen - I've found my cursor rarely rests there, so it is the least likely place I'll accidentally trip the dock to show.

**Turn off Notifications**

Hiding the dock is a start, but it won't do much good if you are constantly getting popups in the top right of your screen showing new messages you're receiving.  Turn off all notifications in messaging programs, or set a Do Not Disturb during your normal productivity hours.

- System Preferences -> Notifications (or `Command + P` notifications)

**Hide the Menu Bar**

This one is a little more personal preference, but I find it a waste of space.  I rarely go to the menu bar to perform meaningful tasks.  Usually it's just an annoying reminder of how late it is in the day and how unproductive you've been.

- System Preferences -> General -> (or `Command + P` general)
- Check "Automatically hide and show the menu bar"

If you need to check what time it is, you can mouse up to the top of the screen.  Or better yet set reminders for your appointments and stop worrying about what time it is.

### Keyboard Shortcuts

Relying on the mouse / trackpad to navigate only slows you down.  The more shortcuts you know on the keyboard to navigate and perform actions, the quicker and more productive you'll be.

Here are my favorite keyboard shortcuts that I rely on the most.

`Command + Tab`

Same function as `Alt + Tab` on Windows - allows you to switch between open applications.  I used to rely heavily on this, but have found it's much faster to use the next shortcut in most cases.  The exception is if you're switching back and forth constantly between just two apps - then `Command + Tab` is your best option.

`Command + Spacebar`

Opens Spotlight Search - allows you to to run or switch focus to an open app.  If you want to open or switch to Chrome, just type ch and hit enter.  So much faster than a mouse once you get used to it.

`Command + M`

Minimize the current app.

`Command + Q`

Quit the current app.

`Control + Command + F`

Toggle fullscreen on current app.

`Command + R`

Refresh a webpage.

`Command + Shift + R`

Clear cache and refresh webpage.

`Command + Option + I`

Open / close Developer Tools in Chrome.

`Command + Shift + 4`

Allows you to take a snippet screenshot.  Saves to the desktop.