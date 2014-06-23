<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>The Lazy Programmer's Guide to Time Tracking and Billing</title>
    
    <meta name="description" content="impress.js is a presentation tool based on the power of CSS3 transforms and transitions in modern browsers and inspired by the idea behind prezi.com." />
    <meta name="author" content="Bartek Szopka" />

	<link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One|Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
  
    <link href="css/impress-demo.css" rel="stylesheet" />
    
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
</head>
<body class="impress-not-supported">


<div class="fallback-message">
    <p>Your browser <b>doesn't support the features required</b> by impress.js, so you are presented with a simplified version of this presentation.</p>
    <p>For the best experience please use the latest <b>Chrome</b>, <b>Safari</b> or <b>Firefox</b> browser.</p>
</div>


<div id="impress">

<?php slide_open(); ?>
	<h4 style="z-index: 3;">The Lazy Programmer's Guide to Time Tracking and Billing</h4>
	<img class="title-graphic" src="stopwatch.jpg">
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="why">What is lazy?</h1>

	<img class="hero" src="lazy.jpg" width="325">


	<p>It is <i>NOT</i> sitting on a couch watching the world go by all day.</p>

	<p>Lazy is <b>I don’t like to do things twice or have to worry about remembering details</b>.</p>

	<p>Memory of what you do day-to-day fades quickly. If it's noted in a coherent way, it’s a lot easier to bill for.</p>

	<p>If there’s ever a question about what was done, there is an authoritative record of what was done, for whom, and when. </p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="my-tools-spreadsheets-a-stopwatch-and-notes">The tools</h1>

	<img class="hero" src="chrome-logo.jpg" width="225">
	<h2>A Browser with a Stopwatch</h2>
	<p>Google Chrome<br>
		&nbsp; &nbsp; - Simple Time Track Plugin</p>
	
	<img class="hero" src="spreadsheet.png" width="225">
	<h2>A Spreadsheet</h2>
	<p>Tracking Spreadsheet <br>
		&nbsp; &nbsp; - Sample in Google Docs</p>
	
	<img class="hero" src="capsule.png" width="225">
	<h2>Notes</h2>
	<p>Crowd Favorite's Capsule <br>
		&nbsp; &nbsp; - Or similar note editor</p>


<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="the-stopwatch">The stopwatch</h1>

	<img class="hero" src="simple-time-track.png" width="325">

	<p><b>Simple Time Track</b><p>

	<p>Not overburdened with features you won’t need.</p>
	<p>Supports multiple named stopwatches</p>
	<p>Stopwatches start and stop independently and can run simultaneously.</p>
	<p>Records time even after restarting the browser or rebooting the computer.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h2 id="the-spreadsheet">The spreadsheet</h2>

	<p>The spreadsheet linked above is a template and the core of how I track my work. I have honed it for more than a year to be a mean, lean time tracking machine. Please save your own copy before making changes.</p>

	<p>There are sheets for all 7 days of the week (just in case some weekend work sneaks in) and an “Hours Summary” sheet.</p>

	<p>The daily sheets for Monday-Friday are pre-filled with an Internal “Billing, email, task management” items with no time as a convenience. If there are items that are billed every day, it’s a good idea to put them in your own template to save typing them over and over.</p>

	<p>Each day also has columns:</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h3 id="billed">Billed</h3>

	<p>Once a line item is entered in the billing system, I put a nice big “X” here. It helps prevent double billing and if I get interrupted while entering my billing I know where I left off. It’s also a quick visual indicator. If you’re looking at Monday’s sheet on Wednesday and there are no “X’s” under billed, you should probably double check the billing for Monday.</p>

	<h3 id="client">Client</h3>

	<p>A quick nickname for the project. Use whatever you want to track where this will be billed. It’s for your use, not really to copy into the billing system.</p>

	<h3 id="hours">Hours</h3>

	<p>The amount to be billed, in quarter-hour increments.</p>

	<h3 id="description">Description</h3>

	<p>In plain words, tell what you did. Be descriptive. Heed the <a href="https://crowdfave.org/policies/billing-hours/">“Line Item Language”</a>.</p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h4 id="justification">Justification</h4>

	<p>If you were paying a bill with line items, which would you rather see? Which one would you be happy to pay 3 hours of development time for?</p>

	<blockquote>
	  <p>Update authors and speakers code. Put on staging server.</p>
	</blockquote>

	<p>or</p>

	<blockquote>
	  <p>Restore proper authors and speakers functionality after merge into master. Restore local dev data for same. Add logic to output speakers and authors in excerpts, but only if post is in correct categories. Pull onto cfrev, configuration, updates and testing. </p>
	</blockquote>

	<p><a href="http://en.wikipedia.org/wiki/Don_Hewitt">Don Hewitt</a> created the TV show <em>60 Minutes.</em> His line to  the reporters was “Tell me a story”. Tell our clients a story. Be specific. Make them realize the entire effort that went into their project.</p>

	<p>I’ve also found that sometimes the descriptions get a bit long and need to be broken into two or more billing lines. This is fine. Simply split the time and text appropriately. Clients seem to like more billing lines with smaller times next to them that having large amounts of time billed to one line item, even with a lengthy description. </p>

	<p>Bottom line: put yourself in the client’s shoes, tell a good story, and use your own judgment. </p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h3 id="task">Task</h3>

	<p>A place to cross-reference the task or tasks (generally a URL, but sometimes just a description). When pulling up a task to work on, it’s a tiny bit of work to copy that Tasks Pro or Sifter URL into this, but a huge gain in being able to link back to what you’ve done.</p>

	<h3 id="notes">Notes</h3>

	<p>Notes are the free-form human-friendly stuff that should be recorded for every non-trivial task and many of the trivial ones as well. Sometime my notes are a plain language description of what I did that will be entered into the task or even proto-documentation. Other times, they are a bunch of quick line items documenting a specific process. A lot of times I copy the text of the task into my note taking pages and edit that heavily as I move on. </p>

	<p>What goes here obviously varies greatly. What’s most important is that any fleeting thoughts that are not part of the code get captured somehow. They may not have apparent value now, but can later. And I’ve found these notes invaluable when producing documentation.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="what-to-track">What to track</h1>

	<p>Everything. </p>

	<p>If you’re doing something internal, bill it. If you’re doing something for a client project, bill it. If you’re doing something “miscellaneous”, bill it. My rule of thumb is that any task that requires only a minute or two (answering a simple question, a quick reply to an email) doesn’t necessarily need to be billed and can get rolled into the “Billing, email, task management” task. Anything that takes more than a few minutes gets billed. If in doubt, bill it instead of rolling it into “Billing, email, task management”, which should generally be around 30 minutes a day or less.</p>

	<p>It’s perfectly fine to roll two or three minor tasks into one billing line if they’re all related to one client.</p>

	<p>As developers, it’s our responsibility to provide an accurate <em>and complete</em> record of what we do. If something needs to be adjusted, it’s up to managers to make the adjustment or at least bring it to your attention. By not billing everything, even internal or “overhead”, you are denying the company that critical information. </p>

	<p>Bottom line: if you’re going to err, err on the side of billing too much and providing too much information. It’s far easier to remove unneeded information and adjust a billing line than it is to read someone’s mind.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="workflow">Workflow</h1>

	<p>The workflow is simple and deliberate, designed to be easy to become a habit and to minimize any extra work. Entering time into the billing system is a snap, since it’s basically copy and paste. There are a few items things that occur on specific days, but generally each item is ongoing.</p>

	<h2 id="monday-morning-or-first-day-of-your-week">Monday morning (or first day of your week)</h2>

	<p>Open up this week’s spreadsheet and “File &gt;&gt; Make a copy…” to save next week’s spreadsheet. Edit the tabs to the appropriate dates on the new spreadsheet.</p>

	<p>That gives you a fresh and empty spreadsheet for next week and lets you get started billing this week’s activities.</p>

	<h2 id="starting-a-new-task">Starting a new task</h2>

	<p>When starting a new task, I click on the Simple Time Track icon and add a new stopwatch with a name for that task. I then create a line item on today’s spreadsheet with the client name and paste the URL to the task (Sifter, TasksPro, GitHub issue, etc.) into the task column. I also usually put in a quick summary under “Description”.</p>

	<p>This is also a good time to fire up a new note (or edit a previous one as appropriate) in Capsule or whatever you’re using to take notes.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h2 id="switching-tasks">Switching tasks</h2>

	<p>When switching tasks, I’ve gotten into the habit of also switching the stopwatch or creating a new one as necessary. That way, you’re always correctly tracking time. You can always split time out or combine it later if necessary, but always track it.</p>

<?php slide_close(); ?>



<?php slide_open(); ?>
	<h1 id="tldr">TL;DR</h1>

	<p>If you don’t bill, the company doesn’t get paid. If the company doesn’t get paid, you get don’t paid. Do your billing and get paid. Tracking time is actually easy. Bonus: if you track everything you do accurately, explaining what you did later on is a lot easier. </p>

	<p>I call all of this effort “Love Notes to Future Chris”. Feel free to insert your own name where “Chris” is in the previous sentence.</p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="conclusion">Conclusion</h1>

	<p>The more successful you are at tracking time completely and accurately as well as billing that time, the more successful your projects, and therefore the company, will be. You will also have a comprehensive record of everything you do, which makes those “down the road” questions much easier to answer.</p>

<?php slide_open(); ?>





<script src="js/impress.js"></script>
<script>impress().init();</script>
</body>
</html>

<?php 

function slide_open() {
	static $position;
	static $slide;
	$slide++;
	?>
	    <div id="slide-<?php echo $slide; ?>" class="step slide" data-x="0" data-y="<?php echo $position; ?>">
	<?php
	$position += 1000;
}

function slide_close() {
	?>
	    </div>
	<?php
}