<section class="patient-info">
    <table>
        <tr>
            <th>Paciente</th>
            <th>Documento</th>
            <th>Ações</th>
        </tr>
        <?php 
            foreach($patients as $patient) { ?>
                <tr>
                    <td><?=$patient['name']?></td>
                    <td><?=$patient['CPF']?></td>
                    <td>
                        <a href="../prontuario.php?patient=<?=$patient['id']?>">
                            <button>Protuário</button>
                        </a>
                        <a href="../editPatient.php?patient=<?=$patient['id']?>">
                            <button>Alterar dados</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>

        </table>
</section>
    