<?php
define('APP', 'running');

include 'inc/functions.php';

// initiate class
$participants = new Participants();
$joined = $participants->joined(); // get number joined
$has_joined = $participants->has_joined(); // check whether user has joined earlier
$just_joined = $participants->just_joined(); // check whether user has just joined

if ( isset( $_POST['submit'] ) ) {
	
	$participants->add_participant(); // add a new participant
	$joined = $participants->joined();
	$just_joined = $participants->just_joined();
}

require 'inc/header.php'; ?>

			<nav id="nav">
				<ul class="cf">
					<li><a href="/" rel="home">Facts</a></li>
					<li><a href="causes">Causes</a></li>
					<li class="act"><a href="act">Act!</a></li>
				</ul>
			</nav>
		</header>

		<main id="cont" class="cf">
			<h1 class="p-title"><a href="#list">Be the Change You Want to See in the World</a></h1>
			
			<div id="count" class="bg">
				<p><span><?php echo (int) $joined; ?></span> people committed to fight global warming</p>
				<?php if ( $just_joined ) : ?>
				<p><strong>Thank you for joining!</strong></p>
				<?php else : ?>
					<?php if ( isset( $_POST['submit'] ) && $has_joined ) : ?>
					<p><strong>You have already joined!</strong></p>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			
			<p>We need to do this <strong>together</strong>. Read below what you can do and <a href="#join">join!</a></p>

			<section id="list" class="alarm cf">
				<div>
					<h2>Save Energy</h2>
					<p>There are several ways for <a href="http://energy.gov/energysaver/downloads/energy-saver-guide">saving energy</a>. An additional advantage is that in most cases you save money as well. Using <a href="https://en.wikipedia.org/wiki/Renewable_energy">renewable energy</a> - energy collected from sunlight, wind, water... - may be the most opportune, long-term solution.</p>
				</div>
				<div>
					<h2>Travel Smart</h2>
					<p>Needless to say that mobility contributes significantly to the amount of carbon dioxide (CO<sub>2</sub>) in the atmosphere. Try to fly as infrequently as possible, consider alternatives like the train. Drive less, carpool or even better, make use of public transportation to go to work.</p>
				</div>
				<div>
					<h2>Reduce, Reuse, Recycle</h2>
					<p>Buy less new products and consider environmental friendly ones. Reuse bottles, recycle paper, reduce your waste. Avoid products with a lot of packaging. <a href="https://www.epa.gov/recycle">And more...</a></p>
				</div>
				<div>
					<h2>Plant a Tree</h2>
					<p><a href="http://onetreeplanted.org/">Planting trees</a> or growing your own fruit and vegetables, can help reducing global warming. They consume CO<sub>2</sub> during the process of photosynthesis and lower its presence in the atmosphere.</p>
				</div>
				<div>
					<h2>Eat Local, Seasonal Food</h2>
					<p>Eating fruit and vegetables is important for your health. But transportation of food is expensive in terms of environmental impact. Eat as much local, seasonal fruit and vegetables as possible. They taste best, too.</p>
				</div>
				<div>
					<h2>Eat Less Meat</h2>
					<p>Meat production costs a significant amount of natural resources and produces greenhouse gases like methane. Skipping meat two days a week or eating less each day gets you far in reducing your ecological footprint.</p>
				</div>
				<div>
					<h2>Disconnect</h2>
					<p>Don&rsquo;t check your email, Facebook, Twitter, ... every 5 minutes. It all consumes energy. Less surfing saves you time, too. An average website loads in > 2 Mb, this one in less then 10 kb to save energy!</p>
				</div>
				<div>
					<h2>Join!</h2>
					<p>There are <a href="http://www.conserve-energy-future.com/StopGlobalWarming.php">many more things you can do</a>, but you can start here, <a href="#join">committing to try</a>!</p>
				</div>
			</section>
			
			<?php if ( ! $just_joined ) : ?>
			<form action="act#count" method="post" class="bg" novalidate>
				<p>
					<label for="join">By filling in my email address I swear to follow these and other best practices to fight global warming, so we can change the world</label>
					<input type="email" id="join" name="email" size="30" placeholder="your@email.com">
					<input type="name" id="name" name="name">
					<span>We don&rsquo;t need your email address for the contest version of this site.</span>
				</p>
				<p><button type="submit" id="submit" name="submit">Join!</button></p>
			</form>
			<?php endif; ?>
		</main>

<?php require 'inc/footer.php'; ?>