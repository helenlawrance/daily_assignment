<form method="post" action="{{route('book.update', $books->id)}}">
	@method('PATCH')
	@csrf
	<div class="form-group">
		<label for="name">Title:</label>
		<input type="text" name="title" value="{{$books->title}}">
	</div>
	<div class="form-group">
		<label for="price">Body:</label>
		<input type="text" name="body" value="{{$books->body}}">
	</div>
	<button type="submit">UPDATE</button>
</form>