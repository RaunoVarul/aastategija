<style>
    /*
    Changed Answers size.
    */
    .col-lg-4, .col-lg-8
    {
     font-size: 13px;
    }
    /*
    Textarea resizing off
     */
    textarea{
        resize: none;
    }
</style>
<hr>
<div class="row">
    <div class="col-lg-4"><b>Teoreetiline osa: </b></div>
    <div class="col-lg-8"><b><?= $ends['theor_test']; ?></b></div>
    <br/>
</div>
<div class="row">
    <div class="col-lg-4"><b>Praktiline osa on hindamisel ja te vastasite: </b></div>
    <div class="col-lg-8"><b><textarea disabled="disabled" rows="20" cols="100"><?= $ends['practical_answ']; ?></textarea></b></div>
    <br/>
</div>

<div class="row">
    <div class="col-lg-5"></div>
        <button class="btn btn-lg btn-primary btn-block" onclick="window.location.href='<?=BASE_URL.'logout'?>'" >LAHKU</button>
    <div class="col-lg-5"></div>
</div>
