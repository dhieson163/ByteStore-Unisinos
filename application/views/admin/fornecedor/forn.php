<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
    </head>
    <body>        
        <form name="f_fornecedor" id="f_forn"
              method="post" action=<?php echo $action ?>>
            <p>
                <label for="fornecedor">Fornecedor</label><br />
            </p>  
            <?php
            if ($fornecedor['id'] > 0) {
                echo "<p>";
                echo '<input type="hidden"  id="id" name="id" width="100" size="30"';
                echo 'value="' . $fornecedor['id'] . '"/>';
                echo "</p>";
            }
            ?>
            <p>
                <label for="nomefornecedor">Nome do Fornecedor:</label><br />
            </p>  
            <p>
                <input type="text" id="fornecedor" name="fornecedor" width="30" size="30"                        
                <?php if ($fornecedor['id'] > 0)
                    echo 'value="' . $fornecedor['fornecedor'] . '"'; ?>
                       />                    
            </p>
            <p>
                <label for="documento">Documento:</label><br />
            </p>  
            <p>
                <input type="text" id="documento" name="documento" width="30" size="30"                        
                       <?php if ($fornecedor['id'] > 0)
                           echo 'value="' . $fornecedor['documento'] . '"'; ?>
                       />                    
            </p>
            <p>
                <?php
                if ($fornecedor['id'] > 0)
                    echo '<input type="submit" value="Salvar"/>';
                else
                    echo '<input type="submit" value="Inserir"/>';
                ?>                   
            </p>                
        </form>
    </body>
</html>