<table border="1">
	<thead>
		<tr>
			<td>ID</td>
			<td>Roll No</td>
			<td>Name</td>
			<td>Address</td>
			<td>Mail ID</td>
			<td>Phone Number</td>
		</tr>
	</thead>
	<tbody>
		@foreach($stud as $stud)
		<tr>
			<td>{{$stud->id}}</td>
			<td>{{$stud->roll}}</td>
			<td>{{$stud->name}}</td>
			<td>{{$stud->address}}</td>
			<td>{{$stud->mail}}</td>
			<td>{{$stud->phone}}</td>
			<td><a href="{{ route('stud.edit',$stud->id)}}"> EDIT</a></td>
			<td><form action="{{route('stud.destroy', $stud->id)}}" method="post">
				@csrf
				@method('DELETE')
				<button type="submit">Delete</button>
			</form></td>
		</tr>
		@endforeach
	</tbody>
</table>