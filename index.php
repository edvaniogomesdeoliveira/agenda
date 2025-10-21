<?php

require 'hearder.php';
?>

<h1>Agenda Pessoal</h1>
<form method="post" action="salvar.php">
    <filedset>
        <legend></legend>
            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto">                
            </div>
            <div class="mb-3">
                <label for="descrissao" class="form-label">Descrissao</label>
                <input type="text" class="form-control" id="descrissao" name="descrissao">    
            </div>
         
            <button type="submit" class="btn btn-primary">Salvar</button>
    </filedset>
</form>

<?php 
require 'footer.php';
?>