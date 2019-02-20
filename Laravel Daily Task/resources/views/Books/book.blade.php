<form method="post" action="{{route('book.store')}}">
	@csrf
	<label>Title</label>
	<input type="text" name="title"/><br>
	<label>Body</label>
	<input type="text" name="body"/><br>
	<button type="submit">Add</button>
</form>