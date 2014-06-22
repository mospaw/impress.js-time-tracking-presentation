<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>WP_FASE</title>
    
    <meta name="description" content="impress.js is a presentation tool based on the power of CSS3 transforms and transitions in modern browsers and inspired by the idea behind prezi.com." />
    <meta name="author" content="Bartek Szopka" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />

  
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
	<h4>Turbos</h4>
	<h6>and superchargers</h6>
	<h5>They mean <b>MOAR POWERS</b> and greater efficiency!</h5>
	<h6>And why they're a good thing in Colorado</h6>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="first">First thing's first: How <span class="b">ICE</span> engines work</h1>
	<img src="Antique_gasoline_engine.jpg" width="300" class="hero">
	<p>All <b>I</b>nternal <b>C</b>ombustion <b>E</b>ngines turn a combination of fuel and air (or other oxidizers) to cause an
		explosion. 
	<p>This explosion causes force to get applied to various components in an engine.</p>
	<p>These components then move, transforming the chemical energy into mechanical energy.</p>
	<h3>Source: http://en.wikipedia.org/wiki/Internal_combustion_engines</h3>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="limitations">Naturally Aspirated &amp; Limitations</h1>
	<img src="Atmospheric_Pressure_vs._Altitude.png" width="425" class="hero">
	<p>Naturally aspirated engines rely solely on atmospheric pressure for their air intake.</p>
	<p>The more air and fuel you can put into an engine, the bigger the explosion you get. Bigger explosions equal <b>MOAR POWERS</b>.</p>
	<p><i>However:</i> Higher altitudes equal lower air pressure and less power. I'm looking at you, Colorado. <img src="coloradoflag_erin.gif" height="32"></p>
	<h3>Graph Source: http://en.wikipedia.org/wiki/File:Atmospheric_Pressure_vs._Altitude.png</h3>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="">Let's get us some more Air Pressure!</h1>
	<img src="Appstrip_High-Pressure-Pumping_rev.jpg" width="300" class="hero">
	<p>If more air and fuel equals more power, how do we get more air and fuel into the engine?</p>
	<h2>Forced induction!</h2>
	<p>Forced induction is the process of delivering compressed air to the intake of an internal combustion engine.</p>
	<p>This adds the potential to make the enigne more powerful and offset the pressure drop that comes with altitude. <img src="coloradoflag_erin.gif" height="32"></p>
	<h3>Source: http://en.wikipedia.org/wiki/Forced_induction</h3>
<?php slide_close(); ?>

<?php slide_open(); ?>
	<h1 id="">Forced Induction: What's it good for?</h1>
	<p>Forced induction engines create more power more efficiently than naturally aspirated engines of the same size.</p>
	<p class="img"><img src="na-vs-turbo.jpg" width="575"></p>
	<p>In this example, a 6 cylinder 3.6 liter turbo engine creates as much power as an 8 cylinder 6.2 liter engine. 
	<h3>Image Source: http://gmauthority.com/</h3>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="">Turbos vs. Superchargers</h1>
	<img src="t-v-s.jpg" width="475" class="hero">
	<p>There are two main types of forced induction: superchargers and turbochargers (turbos).</p>
	<p>Superchargers (left) are mechanically driven.</p>
	<p>Turbos (right) are driven by exhaust gasses.</p>
	<p>Aside from how they spinning power is derived, they work in essentially the same way.</p>
	<h3>Image Source: http://www.automoblog.net/</h3>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="">Disadvantages</h1>
	<p class="img" style="margin: 0;"><img src="V6_3.5L_ecoboost.jpg" height="300"> <img src="cov-duratec35.jpg" height="250"></p>
	<p>Forced induction engines (left) are more complicated and expensive to produce than naturally aspirated
		engines (right).
	<p>Forced induction engines typically have more "plumbing" and may require premium fuel.
	<h3>Image Sources: http://www.full-race.com/ and http://www.themustangnews.com/</h3>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id="">But is it worth it?</h1>
	<img src="" width="200" class="hero">
	<p>Yes. :)</p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id=""></h1>
	<img src="" width="200" class="hero">
	<p></p>
<?php slide_close(); ?>


<?php slide_open(); ?>
	<h1 id=""></h1>
	<img src="" width="200" class="hero">
	<p></p>
<?php slide_close(); ?>




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