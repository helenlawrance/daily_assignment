<form method="post" action="{{route('stud.update', $stud->id)}}">
	@method('PATCH')
	@csrf
	<div class="form-group">
		<label for="name">Roll NO:</label>
		<input type="text" name="roll" value="{{$stud->roll}}">
	</div>
	<div class="form-group">
		<label for="price">Name:</label>
		<input type="text" name="name" value="{{$stud->name}}">
	</div>
	<div class="form-group">
		<label for="adde">Address:</label>
		<input type="text" name="address" value="{{$stud->address}}">
	</div>
	<div class="form-group">
		<label for="mai">Mail:</label>
		<input type="text" name="mail" value="{{$stud->mail}}">
	</div>
	<div class="form-group">
		<label for="phoe">Phone:</label>
		<input type="text" name="phone" value="{{$stud->phone}}">
	</div>
	<button type="submit">UPDATE</button>
</form>