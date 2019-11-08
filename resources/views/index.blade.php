
<div ><h3>Lista LESSOR</h3></div>
    <body>
        
        <?php foreach ($lessor as $less): ?>
        <p>
            <td><a  href="lessor/<?=$less ['codeLessor']?>/edit" method="post">
                <?=$less['nameLessor']?></a></td>, => <?=$less['dniLessor']?> =>
                <?=$less['surnamesLessor']?> => <?=$less['genderLessor']?>
                
            <br>
        </p>
        <?php endforeach ?>
    </body>
    <a href="{{ route('lessor.create') }}" >Añadir LESSOR</a>
    <br>
    <br>
    