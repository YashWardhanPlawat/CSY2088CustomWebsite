<main>
  <div class="freelancer_container">
    <div class="box">
      <div class="profile-pic"></div>
	  <div class="name-box">
        <h1><?=$account['Name']?></h1>
        <div class="contact-details"><?=$account['Phone_number']?></div>
      </div>
    </div>
      <div class="specialization">
        <h2>Specialization</h2>
        <p>Man Fashion Advisor</p>
      </div>
    </div>
    <div class="availability">
      <h2>Availability</h2>
      <ul>
        <li class="<?php if ($account['WorkMo']== 0){echo "availability_R";}else{echo "availability_G";} ?>" >Mo</li>
        <li class="<?php if ($account['WorkTu']== 0){echo "availability_R";}else{echo "availability_G";} ?>" >Tu</li>
        <li class="<?php if ($account['WorkWe']== 0){echo "availability_R";}else{echo "availability_G";} ?>" >We</li>
        <li class="<?php if ($account['WorkTh']== 0){echo "availability_R";}else{echo "availability_G";} ?>" >Th</li>
        <li class="<?php if ($account['WorkFr']== 0){echo "availability_R";}else{echo "availability_G";} ?>" >Fr</li>
      </ul>
      <ul>
        <li class="<?php if ($account['WorkSa']== 0){echo "availability_R";}else{echo "availability_G";} ?>" >Sa</li>
        <li class="<?php if ($account['WorkSu']== 0){echo "availability_R";}else{echo "availability_G";} ?>" >Su</li>
      </ul>
    </div>
  </div>

	<div class="box">
		<h2>Work Images</h2>
		<div class="work-images">
			<div class="work-image"></div>
			<div class="work-image"></div>
			<div class="work-image"></div>
			<div class="work-image"></div>
			<div class="work-image"></div>
		</div>
	</div>

	<div class="box">
		<div class="work-history">
			<h2>Work History</h2>
			<div class="work-entry">
				<h3>Senior Fashion Advisor</h3>
				<p><strong>Company:</strong> Trendsetters Inc.</p>
				<p><strong>Duration:</strong> January 2018 - Present</p>
				<p><strong>Description:</strong> Leading a team of junior fashion advisors, overseeing the seasonal
					campaign designs, and maintaining client relationships with high-profile industry leaders.</p>
			</div>
			<div class="work-entry">
				<h3>Fashion Consultant</h3>
				<p><strong>Company:</strong> StyleSavvy Boutique</p>
				<p><strong>Duration:</strong> October 2015 - December 2017</p>
				<p><strong>Description:</strong> Provided tailored fashion advice to boutique customers, managed
					inventory levels, and organized monthly fashion events to drive sales and brand visibility.</p>
			</div>
			<div class="work-entry">
				<h3>Junior Stylist</h3>
				<p><strong>Company:</strong> Glamour & Gowns</p>
				<p><strong>Duration:</strong> June 2013 - September 2015</p>
				<p><strong>Description:</strong> Assisted lead stylists in preparing outfits for fashion shows,
					conducted market research on upcoming fashion trends, and contributed to the creative process in
					campaign development.</p>
			</div>
		</div>
		<div class="info">
			<h2>Information</h2>
			<p><?=$account['Description']?></p>
		</div>
	</div>

	<div class="box">
		<div class="comments">
			<h2>Comment Section</h2>
			<form action="#" method="POST">
				<label for="comment">Add your comment:</label> <br>
				<textarea id="comment" name="comment" rows="4" cols="50"
					placeholder="Type your comment here..."></textarea> <br>
				<button type="submit">Submit Comment</button>
			</form>
		</div>
	</div>
	</div>
</main>