<legend>
    <h1>Lista TO-DO</h1>
    <p>Data de hoje: <?=date('d/m/Y h:i:s')?></p>
</legend>
<table class="pure-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Fabricante</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Editar</th>
        </tr>
    </thead>

    <tbody>
        <tr class="pure-table-odd">
            <td>1</td>
            <td>Honda</td>
            <td>Accord</td>
            <td>2009</td>
            <td><a href="<?=url('todo/ver/1')?>">ver</a> - <a href="#">editar</a> - <a href="#">concluir</a></td>
        </tr>

        <tr>
            <td>2</td>
            <td>Toyota</td>
            <td>Camry</td>
            <td>2012</td>
            <td><a href="ver.php">ver</a> - <a href="#">editar</a> - <a href="#">concluir</a></td>
        </tr>

        <tr class="pure-table-odd">
            <td>3</td>
            <td>Hyundai</td>
            <td>Elantra</td>
            <td>2010</td>
            <td><a href="ver.php">ver</a> - <a href="#">editar</a> - <a href="#">concluir</a></td>
        </tr>

        <tr>
            <td>4</td>
            <td>Ford</td>
            <td>Focus</td>
            <td>2008</td>
            <td><a href="ver.php">ver</a> - <a href="#">editar</a> - <a href="#">concluir</a></td>
        </tr>

        <tr class="pure-table-odd">
            <td>5</td>
            <td>Nissan</td>
            <td>Sentra</td>
            <td>2011</td>
            <td><a href="ver.php">ver</a> - <a href="#">editar</a> - <a href="#">concluir</a></td>
        </tr>

        <tr>
            <td>6</td>
            <td>BMW</td>
            <td>M3</td>
            <td>2009</td>
            <td><a href="ver.php">ver</a> - <a href="#">editar</a> - <a href="#">concluir</a></td>
        </tr>

        <tr class="pure-table-odd">
            <td>7</td>
            <td>Honda</td>
            <td>Civic</td>
            <td>2010</td>
            <td><a href="ver.php">ver</a> - <a href="#">editar</a> - <a href="#">concluir</a></td>
        </tr>

        <tr>
            <td>8</td>
            <td>Kia</td>
            <td>Soul</td>
            <td>2010</td>
            <td><a href="ver.php">ver</a> - <a href="#">editar</a> - <a href="#">concluir</a></td>
        </tr>
    </tbody>
</table>	
