<?php if (!$auth->is_admin): ?>
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert">×</button>
        You are not an administrator.
    </div>
    <?php exit(); endif; ?>
<h1>Tester "<?= $tester['first_name'] ?> <?= $tester['last_name'] ?>"</h1>
<form id="form" method="post">
    <!--Testers data table -->
    <table class="table table-bordered">
        <tr>
            <th><?= __('ID') ?></th>
            <td><input type="number" name="data[tester_id]" disabled="disabled" style="background-color: #b0b1b2" value="<?= $tester['tester_id'] ?>"/></td>
        </tr>
        <tr>
            <th><?= __('Tester name') ?></th>
            <td><input type="text" name="data[first_name]" value="<?= $tester['first_name'] ?>"/></td>
        </tr>
        <tr>
            <th><?= __('Perenimi') ?></th>
            <td><input type="text" name="data[last_name]" value="<?= $tester['last_name'] ?>"/></td>
        </tr>
        <tr>
            <th><?= __('Isikukood') ?></th>
            <td><input type="text" name="data[personal_id]" value="<?= $tester['personal_id'] ?>"/></td>
        </tr>
        <tr>
            <th><?= __('Teooria punktid') ?></th>
            <td><input type="number" name="data[theor_test]" disabled="disabled" style="background-color: #b0b1b2" value="<?= $tester['theor_test'] ?>"/></td>
        </tr>
        <tr>
            <th><?= __('Praktilise punktid') ?></th>
            <td><input type="number" name="data[practical_test]" value="<?= $tester['practical_test'] ?>"/></td>
        </tr>
    </table>
</form>

<!-- BUTTONS -->
<div class="pull-right">

    <!-- CANCEL -->
    <button class="btn btn-default"
            onclick="window.location.href = 'testers/view/<?= $tester['tester_id'] ?>/<?= $tester['testername'] ?>'">
        <?= __("Cancel") ?>
    </button>

    <!-- DELETE -->
    <button class="btn btn-danger" onclick="delete_tester(<?= $tester['tester_id'] ?>)">
        <?= __("Delete") ?>
    </button>

    <!-- SAVE -->
    <button class="btn btn-primary" onclick="$('#form').submit()">
        <?= __("Save") ?>
    </button>

</div>
<!-- END BUTTONS -->

<!-- JAVASCRIPT
==============================================================================-->
<script type="application/javascript">
    function delete_tester() {
        $.post('<?=BASE_URL?>testers/delete', {tester_id: <?= $tester['tester_id'] ?>}, function (response) {
            if(response == 'Ok'){
                window.location.href = '<?=BASE_URL?>testers';
            }
        })
    }
</script>