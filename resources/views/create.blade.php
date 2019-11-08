<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Lessor</title>
</head>
<body>
	<h1>Add New Lessor</h1>
	@if(count($errors) > 0)
		<div class="errors">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
    @endif
    
	<form action="{{ action('LessorController@store') }}" method="post">
		{{ csrf_field() }}
		NAME: <input type="text" name="nameLessor" value="{{old('nameLessor')}}">
        <br>
        <br>
		DNI: <input type="text" name="dniLessor" value="{{old('dniLessor')}}">
        <br>
        <br>
		APELLIDOS: <input type="text" name="surnamesLessor" value="{{old('surnamesLessor')}}">
        <br>
        <br>
        GENERO: <input type="text" name="genderLessor" value="{{old('genderLessor')}}">
        <br>
        <br>
		<input type="submit" value="Crear">
	</form>
</body>
</html>