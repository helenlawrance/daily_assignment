<form method="post" action="{{route('stud.store')}}">
	@csrf
	<label>Roll No</label>
	<input type="text" name="roll"/><br>
	<label>Name   </label>
	<input type="text" name="name"/><br>
	<label>Address</label>
	<input type="text" name="address"/><br>
	<label>E-mail </label>
	<input type="text" name="mail"/><br>
	<label>Phone Number</label>
	<input type="text" name="phone"/><br>
	<button type="submit">Add</button>
</form>