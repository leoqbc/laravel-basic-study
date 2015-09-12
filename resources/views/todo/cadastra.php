<?php
$prioridade = isset($todo->prioridade)?$todo->prioridade:null;
?>
<legend>
    <h1>Cadastra</h1>
</legend>
<form class="pure-form pure-form-aligned" method="POST" action="<?=url('todo/insert');?>">
    <fieldset>
        <div id="login">
            <div class="pure-control-group">
                <label>Titulo:</label>
                <input type="text" placeholder="Titulo" value="" name="titulo" required>
            </div>
            <div class="pure-control-group">
                <label>Descrição:</label>
                <textarea name="descricao" required></textarea>
            </div>
            <div class="pure-control-group">
                <label>Prioridade:</label>
                <select name="prioridade">
                    <option value="1" <?=helperDrop($prioridade, 1)?>>Baixa</option>
                     <option value="2" <?=helperDrop($prioridade, 2)?>>Media</option>
                     <option value="3" <?=helperDrop($prioridade, 3)?>>Alta</option>
                </select>
            </div>
            <div class="pure-control-group">
                <label>Previsão:</label>
                <input type="text" placeholder="Previsão" name="previsao" required>
            </div>
            <p style="color:red"><?=$erro=isset($erro)?$erro:null?></p>
            <div class="pure-controls">
                <input type="submit" class="pure-button pure-button-primary" value="Enviar">
            </div>
        </div>
        <input type="hidden" name="_token" value="<?=csrf_token()?>">
    </fieldset>
</form>
