<div id="<?php echo strtolower($title); ?>">
    <p><?php echo "ID: " . $fornecedor['id']; ?></p>
    <p><?php echo "Nome: " . $fornecedor['nome']; ?></p>
    <p><?php echo "Documento: " . $fornecedor['documento']; ?></p>

    <p><?php echo anchor('admin/fornecedor/forn/' . $fornecedor['id'], 'Editar'); ?></p>    
</div>
