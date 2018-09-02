<script src="<?php echo URLROOT ?>/ementoring/pages/js/editmodule.js"></script>

<div  style='height:330px'>
<div id="erspace"></div>
    <div class='form-group'>
        <div><label>Modul</label></div>
        <div><input class='form-control' type='text' id='modulename' value='<?=$data->name ?>' /></div>
        <input type='hidden' class='form-control' id='mid' value='<?=$data->mid ?>' />

    </div>

    <div class='form-group'>

        <div><label>Themenblock</label></div>
        <div>
            <select class='form-control' id='parent'>
                <option><?=$data->parent ?></option>
                <option>Persönlichkeitsbildung </option>
                <option>Berufsorientierung </option>
                <option>Arbeitsmethoden </option>
                <option>Medienbildung</option>
                <option>Ökonomische Grundbildung</option>
            </select>
        </div>

    </div>
    <div class='form-group'>
        <label class="form-label">Farbe</label>
        <div class='input-group col-xs-12'>
            <input class='form-control' type='text' id='color' name='edcolor'
                   style="border-radius: 0.35rem;width:89%" readonly
                   data-palette='["#b7d0e9","#fddee1","#faf9d8","#f6f8fa"]' value='<?=$data->color ?>' />
        </div>

    </div>
    <div class='form-group'>

        <div><label>Modulbeschreibung</label></div>
        <div>
            <textarea class='form-control' id='moduledescription'><?=$data->description ?></textarea></div>

    </div>
        <?php if($data->name=='Einführung') {?>
        <div class='form-group'>

            <div class='col-md-4' style='padding:8px'><label>Mentor Beschreibung</label></div>
            <div class='col-md-8' style='padding:5px'>
                <input type='checkbox' id='allowmentor' <?= ($data->mentordescription !='')?'checked':'' ?>/>
            </div>
        </div>

        <div id='mentorsdescbody' style='display:none' class='form-group'>
            <div>
                <textarea class='form-control' id='mentorsdesc'><?=$data->mentordescription ?></textarea></div>

        </div>
        <?php } ?>
    <div class='form-group'>

        <div><button class='btn btn-default pull-right' id='updatemodule'>Aktualisieren</button></div>

    </div>

</div>

