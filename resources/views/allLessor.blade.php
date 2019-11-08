<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LESSOR</title>
</head>
    <body>
        <form action="{{ action('LessorController@create') }}" method="get">
            <button>
                <b>CREAR LESSOR</b>
            </button>
        </form>
        <form action="{{ action('LessorController@index') }}" method="get">
            <button>
                <b>ACTUALIZAR LESSOR</b>
            </button>
        </form>
    </body>
</html>