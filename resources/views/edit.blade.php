    <h1>UPDATE LESSOR</h1>

    <form action="{{ route('lessor.update', $lessor->id)  }}" method="post" >
        {{ csrf_field() }}
        <input name="_method" type="hidden" value="PATCH">
		NAME: <input type="text" name="nameLessor"  value="<?=$lessor['nameLessor'] ?>">
        <br>
        <br>
		DNI: <input type="text" name="dniLessor" value="<?=$lessor['dniLessor'] ?>">
        <br>
        <br>
		APELLIDOS: <input type="text" name="surnamesLessor" value="<?=$lessor['surnamesLessor'] ?>">
        <br>
        <br>
        GENERO: <input type="text" name="genderLessor" value="<?=$lessor['genderLessor'] ?>">
        <br>
        <br>
		<input   type="submit" value="Actualizar">
	</form>
