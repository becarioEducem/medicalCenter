<h2><?= $titol ?></h2>

<?php if ($missatge): ?>
    <p class="missatge-ok"><?= htmlspecialchars($missatge) ?></p>
<?php endif; ?>

<?php if (!empty($errors)): ?>
    <ul class="errors">
        <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post" action="nova-cita.php">

    <!-- TODO: Create <select> input for patients using $pacients -->
    <!-- Each option should have value = id and show the patient name -->

    <!-- TODO: Create <select> input for doctors using $metges -->
    <!-- Each option should have value = id and show the doctor name -->

    <label for="data_hora">Date and Time:</label>
    <input type="datetime-local" name="data_hora" id="data_hora" required>

    <label for="observacions">Observations:</label>
    <textarea name="observacions" id="observacions"></textarea>

    <button type="submit">Save Appointment</button>
</form>

</main>
</body>
</html>
