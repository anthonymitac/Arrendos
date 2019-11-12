
<div ><h3>Lista LESSOR</h3></div>
    <body>
        
        <?php foreach ($lessor as $less): ?>
        <p>
            <td><a  href="lessor/<?=$less ['id']?>/edit" method="post">
                <?=$less['nameLessor']?></a></td>, => <?=$less['dniLessor']?> =>
                <?=$less['surnamesLessor']?> => <?=$less['genderLessor']?>
                <button onclick="window.location='lessor/<?=$less ['id']?>/edit'" method='post'>Buscar los locales que tiene</button>
                
            <br>
        </p>
        <?php endforeach ?>
    </body>
    <a href="{{ route('lessor.create') }}" >Añadir LESSOR</a>
    <br>
    <br>
    