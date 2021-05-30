<section class="patient-info">

  <h2>Excluir Atendimento</h2>

  <form method="post">

    <div style="margin: 20px 0;">
      <p>Você deseja realmente excluir este atendimento <strong><?=$prontuario['created_at'] ?? null?></strong>?</p>
    </div>

    <div>
      <a href="index.php">
        <button type="button">Cancelar</button>
      </a>

      <button type="submit" name="excluir" style="background-color: #9c261c;">Excluir</button>
    </div>

  </form>
</section>