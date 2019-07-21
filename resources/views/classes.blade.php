<table border="1">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Teacher_name</th>
		<th>Major</th>
		<th>Max_student</th>

	</thead>

	<tbody>
		<?php foreach ($classes as $key => $value): ?>
			
			<tr style="background: {{$value->id % 2 ? 'yellow' : 'green'}}">
				<td>{{$value->id}}</td>
				<td>{{$value->name}}</td>
				<td>{{$value->teacher_name}}</td>
				<td>{{$value->major}}</td>
				<td>{{$value->max_student}}</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>