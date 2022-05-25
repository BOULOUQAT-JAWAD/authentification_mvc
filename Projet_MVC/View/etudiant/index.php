<a href="../ProfsC/logout">Logout</a>
<center>
    <h1>La liste des profs </h1>
    <table border="1">
        <tr>
            <th> CNE </th>
            <th> Nom </th>
            <th> Prénom </th>
            <th> Adress </th>
            <th> Ville </th>
            <th> Email </th>
<!--            <th> Image </th>-->
<!--            <th colspan="3"><a href="ProfsC/create">Ajouter</a> </th>-->
        </tr>
        <?php
        //$data=(array)$data;
        foreach ($data as $E)
        {
            ?>
            <tr>
                <td><?=$E->cne ?></td>
                <td><?=$E->nom ?></td>
                <td><?=$E->prenom ?></td>
                <td><?=$E->adress ?></td>
                <td><?=$E->ville ?></td>
                <td><?=$E->email ?></td>
                <?php
/*                <td><img src="'../../View'.<?=$data->image ?>"></td>                */
                ?>
            </tr>
        <?php } ?>
    </table>
</center>
