<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('head.php') ?>
</head>
<body>


	<header>
		<inner-column>
			<h1 class="top-level-heading">How Well Do You Know Your Nephews?</h1>
		</inner-column>
	</header>

	<section class="modal modal-pass">
	
			<div class="pass">
		
				<div class="mt-container">
					<inner-column>
						<div class="modal-text">
							<h2 class="second-level-heading heading-pass">You Scores 100%</h2>
							<h3 class="fourth-level-heading">Congrats! You Know Your Nephews!</h3>
							<button class="pass-btn">Take the Quiz Again</button>
						</div>
						</inner-column>
				</div>

				<div class="mp-container">
					<inner-column>
						<picture>
							<img src="images/ronan_approve.png" alt="">
						</picture>
					</inner-column>
				</div>

			</div>


	</section>

	<section class="modal modal-fail">
			<div class="fail">
		
				<div class="mt-container">
					<inner-column>
						<div class="modal-text">
							<h2 class="second-level-heading heading-fail">You Scored 50%</h2>
							<h3 class="fourth-level-heading">You Suck! Learn More About Them!</h3>
							<button class="fail-btn">Take the Quiz Again</button>
						</div>
						</inner-column>
				</div>

				<div class="mp-container">
					<inner-column>
						<picture>
							<img src="images/ronan_mad.png" alt="">
						</picture>
					</inner-column>
				</div>

			</div>
	</section>


	<section class="question-form">
		<?php include('quiz-data.php') ?>

		<form class="quiz-form">
			<?php foreach ($quiz as $input){ ?>
				<div class="question-container">

					<inner-column>
						<h1 class="fourth-level-heading"><?=$input['question']?></h1>
						
						<div class="form-check">
							<input type="radio" 
								   name= "<?=$input['questionNumber']?>"
								   value = "A"
								   id="<?=$input['A']?>"
							>
							<label for ="<?=$input['A']?>" class="form-check-label"><?=$input['A']?> </label>
						</div>
						<div class="form-check">
							<input type="radio" 
								   name= "<?=$input['questionNumber']?>"
								   value = "B"
								   id="<?=$input['B']?>"

							>
							<label for ="<?=$input['B']?>" class="form-check-label"><?=$input['B']?> </label>
						</div>
						<div class="form-check">
							<input type="radio" 
								   name= "<?=$input['questionNumber']?>"
								   value = "C"
								   id="<?=$input['C']?>"

							>
							<label for = "<?=$input['C']?>" class="form-check-label"><?=$input['C']?> </label>
						</div>
						<div class="form-check">
							<input type="radio" 
								   name= "<?=$input['questionNumber']?>"
								   value = "D"
								   id="<?=$input['D']?>"

							>
							<label for= "<?=$input['D']?>" class="form-check-label"><?=$input['D']?> </label>
						</div>
					</div>

					<?php } ?>
					<p class="error">Please Answer All the Questions</p>
					<input type="submit" value="Submit" class="submit">
			</inner-column>
		</form>



		
	</section>

	<script src='app.js'></script>
</body>
</html>