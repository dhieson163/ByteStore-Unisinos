<script type="text/javascript">
    function confirma(id) {
        if(confirm('Deseja excluir o fornecedor '+id+'?')) {
            window.location = 'delete/'+id;
        } else {
            return false;
        }
    }
</script>
<div id="<?php echo strtolower($title); ?>">
    <p>
        <?php echo $this->session->flashdata('erro'); ?>
    </p>
    <p>
        <?php echo anchor('admin/fornecedor/novo/', 'Inserir Novo Fornecedor'); ?>
    </p>

    <?php echo $this->pagination->create_links(); ?>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Documento</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php
        foreach ($fornecedor as $fornecedor) {
            echo "<tr>";
            echo "<td>".$fornecedor['id']."</td>";
            echo "<td>" . anchor('admin/fornecedor/view/' . $fornecedor['id'], $fornecedor['nome']) . "</td>";
            echo "<td>".$fornecedor['documento']."</td>";
            echo "<td>" . anchor('admin/fornecedor/edit/' . $fornecedor['id'], 'Editar') . "</td>";
            echo "<td><a href='#' onclick='confirma(" . $fornecedor['id'] . ");return false;'>Excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php echo $this->pagination->create_links(); ?>
</div>