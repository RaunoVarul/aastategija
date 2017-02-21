<div class="row">
    <div class="col-xs-10"><h1><?=$course['course_name']?></h1></div>
    <div class="col-xs-2">
        <a href="courses/edit/<?= $course['course_id']?>">
        <button class="btn btn-success">
                edit
        </button></a>
    </div>
</div>

<div class="row">
    <div class="row">


        <table class="table table-bordered table-hover">

            <tr>
                <th><?= __('Course name') ?></th>
                <td><?=$course['course_name']?></td>
            </tr>

        </table>
    </div>
</div>
