<h2><?= $titol ?></h2>

<?php if (empty($cites)): ?>
    <p>No hi ha cites programades.</p>
<?php else: ?>
    <div class="responsive-table">
        <table>
            <thead>
                <tr>
                    <th>Data i Hora</th>
                    <th>Pacient</th>
                    <th>Telèfon</th>
                    <th>Metge</th>
                    <th>Especialitat</th>
                    <th>Observacions</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cites as $cita): ?>
                    <tr>
                        <td><?= htmlspecialchars($cita['data_hora']) ?></td>
                        <td><?= htmlspecialchars($cita['pacient_nom']) ?></td>
                        <td><?= htmlspecialchars($cita['telefon']) ?></td>
                        <td><?= htmlspecialchars($cita['metge_nom']) ?></td>
                        <td><?= htmlspecialchars($cita['especialitat']) ?></td>
                        <td><?= nl2br(htmlspecialchars($cita['observacions'])) ?></td>
                        <td class="icona-cancel">
                            <a href="cancel·la-cita.php?id=<?= $cita['id'] ?>" onclick="return confirm('Vols cancel·lar aquesta cita?');">
                                <img src="assets/img/delete-icon.png" alt="Cancel·lar">
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php endif; ?>

</main>
</body>
</html>
