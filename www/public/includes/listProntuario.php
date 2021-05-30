<section class="patient-info">
    <button style="margin-bottom: 10px;"><a style="margin: 0" href="cadNewAttendance.php?patient_id=<?=$patient['id'] ?? null?>">Novo atendimento</a></button>
    <table>
        <tr>
            <th>Paciente</th>
            <th>Data</th>
            <th>Ações</th>
        </tr>
        <?php
            if (!$prontuarios) { ?>
                <tr>
                    <td colspan="3">Nenhum dado encontrado!</td>
                </tr>
            <?php }
            foreach($prontuarios as $prontuario) { ?>
                <tr>
                    <td><?=$patient['name'] ?? null?></td>
                    <td><?=$prontuario['created_at'] ?? null?></td>
                    <td>
                        <a href="../editProntuario.php?prontuario=<?=$prontuario['id']?>">
                            <button>Visualizar</button>
                        </a>
                        <a href="../deleteProntuario.php?prontuario=<?=$prontuario['id']?>">
                            <button>Excluir cadastro</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>

        </table>
</section>
    