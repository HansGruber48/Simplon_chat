<!DOCTYPE html>
<html lang="fr">
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" class="col-2" hidden>date</th>
            <th scope="col" class="col-2" hidden>pseudo</th>
            <th scope="col" class="col-8" hidden>message</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $messages = findAll();
        foreach ($messages as $message) {
        ?>
            <tr class="table-light">
                <td class="col-2"><?= htmlspecialchars($message['date']) ?></td>
                <td class="col-2"><?= htmlspecialchars($message['pseudo']) ?></td>
                <td class="col-8"><?= htmlspecialchars($message['content']) ?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</html>