
<form action="/your/path" method="post" accept-charset="utf-8">

	<div class="field">
		<img src="library/images/nothumb.gif" alt="Profile Photo" />
		<label for="your-photo">Photo Name</label>
		<input type="file" id="your-photo" name="your_photo" value="">
	</div>
	<div class="field">
		<label for="your-name">Your Name</label>
		<input type="text" id="your-name" name="your_name" value="">
	</div>
	<div class="field">
		<label for="website">Your Website</label>
		<input type="text"  id="website" name="website_url" value="">
	</div>
	<div class="field">
		<label for="good-at">What are you good at?</label>
		<textarea id="good-at" name="good_at"></textarea>
	</div>
	<div class="field">
		<label for="looking-for">What are you looking for?</label>
		<textarea id="looking-for" name="looking_for"></textarea>
	</div>

	<input type="submit" id="button-send" name="button_send" value="Update">

</form>

