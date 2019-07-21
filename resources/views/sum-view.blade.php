<form action="{{route('sum')}}" method="POST"> {{csrf_field()}}
	<input type="number" placeholder="N 1" name="n1">
	<input type="number" placeholder="N 2" name="n2">
	<button type="submit">SUM</button>
	
</form>