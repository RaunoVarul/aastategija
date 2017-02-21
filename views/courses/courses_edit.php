<div class="row">
    <div class="col-xs-10">
        <h1><?= $course['course_name']?></h1>
        <form id="form" method="post">
            <table class="table table-bordered">
                <tr>
                    <th><?= __('Course name') ?></th>
                    <td><input type="text" name="data[course_name]" value="<?= $course['course_name'] ?>"/></td>
                </tr>
            </table>
        </form>

        <!-- BUTTONS -->
        <div class="pull-right">

            <!-- SAVE -->
            <button class="btn btn-primary" onclick="$('#form').submit()">
                <?= __("Save") ?>
            </button>

        </div>
    </div>