<?php if ($auth->is_admin): ?>
    <h3><?= __("Testers") ?></h3>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <td>ID</td>
            <td>Eesnimi</td>
            <td>Perenimi</td>
            <td>Isikukood</td>
            <td>Teooria punktid</td>
            <td>Praktilise punktid</td>
            <td>Muuda</td>
        </tr>
        <?php foreach ($testers as $tester): ?>
            <tr>
                <td><?= $tester['tester_id'] ?></td>
                <td><?= $tester['first_name'] ?></td>
                <td><?= $tester['last_name'] ?></td>
                <td><?= $tester['personal_id'] ?></td>
                <td><?= $tester['theor_test'] ?></td>
                <td><?= $tester['practical_test'] ?></td>

                <td> <form action="testers/edit/<?= $tester['tester_id'] ?>">
                        <button class="btn btn-primary pull" style="width: 80px;">
                            Muuda
                        </button>
                    </form>
                </td>
            </tr>


        <?php endforeach ?>
    </table>

<?php endif; ?>
