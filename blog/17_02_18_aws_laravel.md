I finally have my live site environment set up the way I want!  I'm using an Ubuntu server on AWS running Apache2 and Laravel.  I wish I would have written about all the steps I took to get it setup while I was setting it up, because there's no way I'm going to remember everything I did to configure the server on AWS.  And of course in the likely event that I have to set up a new server in the future, I'll have to struggle through some of the first steps.  But I have learned a lot and it will definitely help for future setups.

### Setting Up the Server on AWS

I like saving money whenever possible.  You can call me cheap if you want.  I had already owned my domain chrisknoll.com, but I was looking for the cheapest possible hosting.  I was originally considering transferring my domain to Google and finding hosting through one of their partners, because, well, Google.  But then I stumbled upon AWS.  I didn't really know much about it, and I was surprised that Amazon had so much going on in the tech game.  After doing some research it seemed like AWS was the way to go - it was going to be the cheapest possible route, and while it was going to take more work than a host like GoDaddy, it was at least going to give me some relevant experience.

I transferred my domain over to Amazon's Route 53 and set up a hosted zone.  As of the time of this post, each hosted zone costs $.50 a month with tax making it $.56 cents.  As of now, that's all I'm paying for, making my total cost per year $6.72 to host my personal site.  I'd say that's a pretty good deal.

While I didn't have to transfer my domain over, I figured it would make the whole process easier having everything housed in AWS.  I think I was probably wrong - it took me several days to finally get the DNS and everything set up properly and get my Apache server loading correctly on chrisknoll.com.

I wasn't really sure what type of service I needed to use to host my site.  I started with some kind of static page, but that obviously wasn't going to cut it.  After researching, I came to the conclusion that I either needed to set up an Elastic Beanstalk server with Laravel, or an EC2 server.  It seems like if you use Beanstalk you don't have to configure the server at all.  So I choose to do it the hard way, and used an Ubuntu server on EC2.  I figured it would give me some practice with the command line (I'm taking a Linux class right now and need all the practice I can get), and allow me more control over the server if I ever need it.

### Logging Into an EC2 Instance with SSH

Once my EC2 instance was set up, I had to figure out how to log in using SSH.  Turns out the Key Pair file for the instance is a pretty important file that you shouldn't lose.  So naturally I accidentally deleted the Key Pair to the first instance I set up.  There's a way to assign a new Key Pair, but it seemed like more effort than just creating a new instance, so that's what I did.

If you _don't_ lose your Key Pair file, you can log in to your EC2 instance like so:

```ssh -i /path/to/yourKey/yourKeyPair.pem user@yourdomain.com```

One thing to note is that your default user name in Ubuntu is `ubuntu`.

Once I was in on the command line, getting everything installed was pretty simple.  I installed everything I needed for my LAMP stack, installed node.js and npm, and installed Laravel with composer.  There was some configuration I had to do with Apache in order to get it working with Laravel correctly, and I do recall that being a slight headache.

### Developing Locally

I've finally started seeing the value and benefits of developing locally on my Mac before deploying to a live site.  Before, I was using a live site and either using a text editor with FTP built-in, or (worse yet) using an FTP client like FileZilla to open the files and upload them as they change.  The problem with the latter is that you have to switch over to FileZilla _every time_ you save a change to a file, and click yes to upload it.  The problem with the former is, well it's just still not as good as developing locally.  Having a text editor that automatically uploads to your server is a little faster, but you still have to deal with internet connections and transfer time.  Developing local everything is instant, and you don't have to have a separate online environment other than your live site.

Understanding Git better and using GitHub played a major part in being able to feel confident developing locally.  My workflow now goes something like this:

- Make edits to site locally
- Commit changes and push them to GitHub
- Pull changes from the CLI on my EC2 server
- If necessary, update composer and npm packages

It's so easy.  And it makes me happy.