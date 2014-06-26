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

	<img class="hero" src="lazy.jpg" width="375">

	<p>This lazy is <i>NOT</i> sitting on a couch watching the world go by all day.</p>

	<p>Lazy is <b>"I don’t like to do things twice or have to worry about remembering details"</b>.</p>

	<p>Memory of what you do day-to-day fades quickly. If it's noted in a coherent way, it’s a lot easier to track and bill.</p>

	<p><i>Doing a little extra work allows me to stay lazy.</i> My computer (and Google Docs) remember the details.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="my-tools-spreadsheets-a-stopwatch-and-notes">The tools</h1>

<p class="small"><i>Don't worry about taking notes. There will be a post on the intranet with links.</i></p>

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

	<ul>
		<li>Not overburdened with features you won’t need.</li>
		<li>Supports multiple named stopwatches</li>
		<li>Stopwatches start and stop independently and can run simultaneously.</li>
		<li>Records time even after restarting the browser or rebooting the computer.</li>
	</ul>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="the-spreadsheet">Spreadsheet Columns</h1>

	<img class="hero" src="spreadsheet.png" width="325">

	<h2 id="billed">Billed</h2>

	<p>Add a nice big <b>"X"</b> once a line item is entered in the billing system</p>

	<h2 id="client">Client</h2>

	<p>A quick nickname for the project.</p>

	<h2 id="hours">Hours</h2>

	<p>The amount to be billed, in quarter-hour increments.</p>

	<h2 id="hours">Descriptions</h2>

	<p>Important stuff! More on this later...</p>


<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="the-spreadsheet5">More columns</h1>

	<img class="hero" src="spreadsheet.png" width="300">

	<h2 id="task">Task</h2>

	<p>A place to cross-reference the task or tasks for this line item<ul>
	<li> Generally a URL, but sometimes just a description</li>
	<li> Cross-reference in the future</li>
	</ul></p>

	<h2 id="notes">Notes</h2>

	<p>Any quick notes that might be needed can be put in an additional <b>"Notes"</b> column. Lengthier notes should be written in your note taking system.</p>


<?php slide_close(); ?>

<?php slide_open(); ?>
	<h1 id="the-spreadsheet2">What are descriptions?</h1>

	<img class="hero" src="spreadsheet.png" width="350">
	<h2 id="description">Descriptions are billing line items</h2>

	<p>In plain words, tell what you did. Be descriptive. Heed our <b>“Line Item Language”</b>.</p>
	

	<h2 id="justification">Bigger is better</h2>

	<p>Descriptions that <b>go into detail</b> about steps taken is a lot <b>easier for the client to understand</b>. Line items are also less likely to get questioned
		if specifics are mentioned.</p>

	<p><i>A client that understands what was done is also a happy client.</i></p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="the-spreadsheet3">Justifying lenghty descriptions</h1>

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

	<p>Don Hewitt created the TV show <em>60 Minutes.</em> His advice to reporters was <b>"Tell me a story"</b>.</p>
	<p><i>Tell the client a story.</i></p>

<ul>
	<li>Be specific. </li>
	<li>Be truthful. </li>
	<li>Describe the entire effort.</li>
</ul>

	<p>Long descriptions can be broken into two or more billing lines. <i>Simply split the time and text appropriately.</i></p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="the-spreadsheet4">Good Descriptions equal<br> Happy Clients</h1>

	<img class="hero" src="happy-clients.jpg" width="375">

	<p>Our experience shows that:</p>

	<p><b>More billing line items with smaller times next to them ...</b></p>
	<p>... are better than ...</p>
	<p>... <i>large amounts of time billed to one line item.</i></p>

	<p>Put yourself in the client’s shoes, tell a good story, and use your own judgment. </p>

<?php slide_close(); ?>

<?php slide_open(); ?>

	<h1 id="notes">Worth Noting</h1>

	<img class="hero" src="capsule.png" width="300">

	<p><b>Notes:</b> That free-form human-friendly stuff that should be recorded for every single task.</p>

	<h2>Forms that notes can take</h2>

	<ul>
	<li> Plain language description of what was done</li>
	<li> Line items documenting a specific process</li>
	<li> End user or technial documentation</li>
	<li> Any combintation of these or anything else</li>
	</ul>

	<p class="small">What’s most important is that any fleeting thoughts that are not part of the code somehow get captured and organized.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="what-to-track">What should you track &amp; bill?</h1>

	<img class="hero border" src="tracking.jpg" width="300">

	<p>Answer: <b>Everything</b></p>

<ul>
	<li>If a task takes <b>minute or two</b> it can get rolled into “Billing, email, task management”</li>
	
	<li>Anything that takes more than a few minutes <b>gets billed</b>.</li>

	<li>If in doubt, <b>bill it</b> instead of rolling it into “Billing, email, task management”, which should generally be around 30 minutes a day or less.</li>
</ul>
	<p class="small"><b>Note:</b> It’s perfectly fine to roll two or three minor tasks into one billing line if they’re all related to one client.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="what-to-track">Why track <i>everything</i>?</h1>

	<img class="hero" src="tracking2.jpg" width="300">

	<p>We should provide an accurate <em>and complete</em> record of what we do.<p>

	<p>If something needs to be adjusted, <b>it’s up to managers to make the adjustment or at least bring it to your attention.</b></p>

	<h2>Bottom Line</h2>

	<p>If you’re going to err, <b>err on the side of billing too much</b> and providing too much information. Yep, even on internal stuff.</p>

	<p class="small"><i>It’s far easier to remove unneeded information and adjust a billing line than it is to read someone’s mind.</i></p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="workflow">Workflow</h1>

<div class="hero">
	<img class="hero" src="interesting.jpg" width="300"><br>
	<p style="margin-left: 10px; text-align: center;"><b>Stay lazy, my friends.</b></p>
</div>

	<ul>
	<li>This workflow is simple and deliberate</li>
	<li>Designed to become a habit and minimize extra work</li>
	<li>Makes entering time into the billing system is a snap. Descriptions get copied and pasted in</li>
	<li>Finding out what you did in the past is a search away</li>
	</ul>

<?php slide_close(); ?>

<?php slide_open(); ?>
	<h1 id="workflow">Monday Morning</h1>

	<h2 id="monday-morning-or-first-day-of-your-week">(or first day of your week)</h2>

	<img class="hero" src="spreadsheet.png" width="325">
<ul>
	<li>Open up this week’s spreadsheet and <b>“File &gt;&gt; Make a copy…”</b> and rename to save next week’s spreadsheet</li>
	<li>Edit the tabs to the appropriate dates on the new spreadsheet.</li>
</ul>

	<p>That gives you a fresh and empty spreadsheet for next week and lets you get started billing this week’s activities.</p>

<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="workflow2">Starting a new task</h1>

	<div class="hero">
	<img  src="simple-time-track.png" width="250"><br>
	<img  src="spreadsheet.png" width="250"><br>
	<img  src="capsule.png" width="250">
	</div>

<ul>
	<li>Add a new stopwatch with task and client info to <i>Simple Time Track</i>
	<li>Create a line item on today’s spreadsheet with the client name and paste the URL to the task (Sifter, TasksPro, GitHub issue, etc.) into the task column</p>
	<li>Fire up a new note or edit a previous one inyour note taker</p>
</ul>
<?php slide_close(); ?>

<?php slide_open(); ?>
	<h1 id="tldr">TL;DR</h1>

	<img class="hero" src="cool-story.jpg" width="350">

	<p>If you don’t bill, the company doesn’t get paid. <b>If the company doesn’t get paid, you get don’t paid.</b></p>
	<p>Do your billing and get paid. <b>Tracking time actually becomes easy.</b></p>
	<p><b>Bonus:</b> If you track everything you do accurately, explaining what you did later on is a lot easier. </p>

	<p>I call all of this effort <b>“Love Notes to Future Chris”</b>.</p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="conclusion">Conclusion</h1>

	<img class="hero" src="aliens.jpg" width="350">

	<p>Thoroughly accurate time tracking and billing leads to:</p>

	<ul>
		<li>Successful projects</li>
		<li>A profitable company</li>
		<li>A comprehensive record of everything you do, which makes those “down the road” questions much easier to answer.</li>
	</ul>
	<img class="hero" src="chris.jpg" width="125">

<br>
	<p>This will be covered in detail on an intranet page. Feel free to ping <b>Chris Mospaw</b> with questions.</p>

<?php slide_close(); ?>
<?php slide_open('step'); ?>
<img src="thats-All-folks.jpg" width="900">
<?php slide_close(); ?>

<?php slide_open('step'); ?>


<script src="js/impress.js"></script>
<script>impress().init();</script>
</body>
</html>

<?php 

function slide_open($override_classes = null) {
	static $position;
	static $slide;
	$classes = 'step slide';
	if (null !== $override_classes) {
		$classes = $override_classes;
	}
	$slide++;
	?>
	    <div id="slide-<?php echo $slide; ?>" class="<?php echo $classes; ?>" data-x="0" data-y="<?php echo $position; ?>">
	<?php
	$position += 1000;
}

function slide_close() {
	?>
	    </div>
	<?php
}