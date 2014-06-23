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
<div class="background"></div>

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
	<h1 id="the-spreadsheet">The spreadsheet</h1>

	<img class="hero" src="spreadsheet.png" width="325">
	<p>What the columns mean...<p>

	<h2 id="billed">Billed</h2>

	<p>"X" Once a line item is entered in the billing system</p>

	<h2 id="client">Client</h2>

	<p>A quick nickname for the project.</p>

	<h2 id="hours">Hours</h2>

	<p>The amount to be billed, in quarter-hour increments.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="the-spreadsheet2">The spreadsheet continued</h1>

	<img class="hero" src="spreadsheet.png" width="350">
	<h2 id="description">Description</h2>

	<p>In plain words, tell what you did. Be descriptive. Heed our <a href="https://crowdfave.org/policies/billing-hours/">“Line Item Language”</a>.</p>
	
	<br>

	<h2 id="justification">Bigger is better</h2>

	<p>A description that goes into detail about steps taken is a lot easier for the client to understand. It's also less likely to get questioned
		if specifics are mentioned.</p>

	<p>A client that understands what was done is also a happy client.</p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="the-spreadsheet3">Justifying descriptions</h1>

	<p>Which one of these line items better justifies 3 hours of billing?<p>

	<blockquote>
	  <p>Update authors and speakers code and put on staging server.</p>
	</blockquote>

	<p style="text-align: center;">OR</p>

	<blockquote>
	  <p>Restore proper authors and speakers functionality after merge into master. Restore local dev data for same. Add logic to output speakers and authors in excerpts, but only if post is in correct categories. Pull onto cfrev, configuration, updates and testing. </p>
	</blockquote>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="the-spreadsheet4">Descriptions are Story Telling</h1>

	<img class="hero" src="don-hewitt.jpg" width="325">

	<p>Don Hewitt created the TV show <em>60 Minutes.</em> His line to  the reporters was <b>Tell me a story</b>. Tell the client a story. Be specific. Show the entire effort.</p>

	<p>Long descriptions can be broken into two or more billing lines. <i>Simply split the time and text appropriately.</i></p>

	<p>More billing lines with smaller times next to them is better than large amounts of time billed to one line item. </p>

	<p>Put yourself in the client’s shoes, tell a good story, and use your own judgment. </p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="the-spreadsheet5">More columns</h1>

	<img class="hero" src="spreadsheet.png" width="350">

	<h2 id="task">Task</h2>

	<p>A place to cross-reference the task or tasks<br>
	&nbsp; &nbsp; - Generally a URL, but sometimes just a description<br>
	&nbsp; &nbsp; - Great cross-reference in the future

	<h2 id="notes">Notes</h2>

	<p>Any quick notes that might be needed can be put in an additional notes column. Lengthier Notes should be taken in the note taking editor and linked here.</p>


<?php slide_close(); ?>


<?php slide_open(); ?>

	<h1 id="notes">Speaking of Notes</h1>

	<img class="hero" src="capsule.png" width="300">

	<p>The free-form human-friendly stuff that should be recorded for every non-trivial task and many of the trivial ones as well.</p>

	<h2>Forms that notes can take</h2>

	<p> - Plain language description of what was done<br>
		- Line items documenting a specific process<br>
		- End user or technial documentation<br>
		- Any combintation of these
	</p>

	<p>What’s most important is that any fleeting thoughts that are not part of the code get captured and organized somehow.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="what-to-track">What should you track &amp; bill?</h1>

	<img class="hero border" src="tracking.jpg" width="300">

	<p>Answer: <b>Everything</b></p>

	<p>If a task takes minute or two it can get rolled into “Billing, email, task management”</p>
	
	<p>Anything that takes more than a few minutes gets billed.</p>

	<p>If in doubt, <b>bill it</b> instead of rolling it into “Billing, email, task management”, which should generally be around 30 minutes a day or less.</p>

	<p class="small"><b>Note:</b> It’s perfectly fine to roll two or three minor tasks into one billing line if they’re all related to one client.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="what-to-track">Why track <i>everything</i>?</h1>

	<p>It’s our responsibility to provide an accurate <em>and complete</em> record of what we do.<p>

	<p>If something needs to be adjusted, it’s up to managers to make the adjustment or at least bring it to your attention. By billing everything &mdash; even internal or “overhead” &mdash; you are providing the company critical information. </p>

	<h2>Bottom Line</h2>

	<p>If you’re going to err, err on the side of billing too much and providing too much information.</p>

	<p>It’s far easier to remove unneeded information and adjust a billing line than it is to read someone’s mind.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="workflow">Workflow</h1>

	<p>The workflow is simple and deliberate, designed to be easy to become a habit and to minimize any extra work. Entering time into the billing system is a snap, since it’s basically copy and paste. There are a few items things that occur on specific days, but generally each item is ongoing.</p>

	<h2 id="monday-morning-or-first-day-of-your-week">Monday morning (or first day of your week)</h2>

	<p>Open up this week’s spreadsheet and “File &gt;&gt; Make a copy…” to save next week’s spreadsheet. Edit the tabs to the appropriate dates on the new spreadsheet.</p>

	<p>That gives you a fresh and empty spreadsheet for next week and lets you get started billing this week’s activities.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="workflow2">Workflow</h1>

	<h2 id="starting-a-new-task">Starting a new task</h2>

	<p>When starting a new task, I click on the Simple Time Track icon and add a new stopwatch with a name for that task. I then create a line item on today’s spreadsheet with the client name and paste the URL to the task (Sifter, TasksPro, GitHub issue, etc.) into the task column. I also usually put in a quick summary under “Description”.</p>

	<p>This is also a good time to fire up a new note (or edit a previous one as appropriate) in Capsule or whatever you’re using to take notes.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="switching-tasks">Switching tasks</h1>

	<img class="hero" src="simple-time-track.png" width="375">

	<p>When switching tasks, I’ve gotten into the habit of also switching the stopwatch or creating a new one as necessary.</p>

	<p>By doing this, you’re always correctly tracking time. You can always split time out or combine it later if necessary. 

	<p>But no matter what, <b>always track your time</b>.</p>

<?php slide_close(); ?>



<?php slide_open(); ?>
	<h1 id="tldr">TL;DR</h1>

	<img class="hero" src="cool-story.jpg" width="325">

	<p>If you don’t bill, the company doesn’t get paid. If the company doesn’t get paid, you get don’t paid. Do your billing and get paid. Tracking time is actually easy. Bonus: if you track everything you do accurately, explaining what you did later on is a lot easier. </p>

	<p>I call all of this effort “Love Notes to Future Chris”. Feel free to insert your own name where “Chris” is in the previous sentence.</p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="conclusion">Conclusion</h1>

	<img class="hero" src="aliens.jpg" width="325">

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