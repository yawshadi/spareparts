

<div class="col-md-12">
<div id='erspace'></div>
    <div class="col-md-12">

        <div class="panel panel-primary">
        <input type="hidden" id="testid" value="<?=$data['test']->testid?>">
        <input class='form-control' type='hidden' id='euniquetestuploadid' name="euniquetestuploadid" value='<?php echo $data['test']->randomnumber ?>'/>

            <div class="panel-body">

                <div class='form-group'>

                    <div><label>Themenblock</label></div>
                    <div>
                        <select class="form-control select" id='uparentmod'>
                            <option><?=$data['test']->category?></option>
                            <option>Arbeitsmethoden </option>
                            <option>Medienbildung</option>
                            <option>Persönlichkeitsbildung </option>
                            <option>Berufsorientierung </option>
                            <option>Ökonomische Grundbildung
                            </option>
                        </select>
                    </div>

                </div>

                <div class='form-group'>

                    <div><label>Test Type</label></div>
                    <div>
                        <select class="form-control select" id='utesttype'>
                            <option> <?=$data['test']->testtype?></option>
                            <option>Free Form</option>
                            <option>Multi-Choice</option>

                        </select>

                    </div>

                </div>

                <div class='form-group'>

                    <div><label>Question / Preamble</label></div>
                    <div>
                            <textarea class="form-control" rows="5" id='uquestion'
                                      style="border-radius: 0.35rem;"><?=$data['test']->preamble?></textarea>

                    </div>

                </div>

                <div class='form-group umultispace'>

                    <div><label>Multi-Choice Options</label></div>
                    <div><input class='form-control' type='text' id='uchoice' value='<?=$data['test']->choices?>'
                                placeholder="Options must be comma separated. eg (yes, no)" /></div>

                </div>

                <div class='form-group umultispace'>

                    <div><label>Answer</label></div>
                    <div><input class='form-control' type='text' id='uanswer' value='<?=$data['test']->answer?>'
                                placeholder="Options must be comma separated. eg (yes, no)" /></div>
                    <br/>
                    <div><label>Answer Type :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>one</label>
                        <input type='radio' name='ans' id='one'<?=($data['test']->answertype == 0) ? 'checked' : ''?> />
                        &nbsp;&nbsp;&nbsp;
                        <label>Multiple</label>
                        <input type='radio' name='ans' id='many' <?=($data['test']->answertype == 1) ? 'checked' : ''?> /></div>
                </div>
                <div class='form-group'>

                    <div  style='padding:8px'><label>Musterlösung</label>
                        <input type='checkbox' id='ementorreview' <?=($data['test']->mentordescription != '') ? 'checked' : ''?> /></div>
                </div>

                <div class='form-group ementorspace' style="display:<?php if ($data['test']->mentordescription == '') {
    echo 'none';
}
?>">

                         <textarea class="form-control" rows="3" id='ementorsdesc'
                                   style="border-radius: 0.35rem;margin-bottom:3px"><?=$data['test']->mentordescription?></textarea>
                    <input type='file' class='form-control' name='econtentupload[]' id='utestupload'
                           data-show-preview="false" multiple />


                </div>
                <?php if (sizeof($data['documents']) > 0) {?>
                    <div class='form-group euploadspace'>

                        <div  style='padding:8px'><label>Documents</label></div>
                        <div style='padding:5px'>
                            <div class='docarea'>
                                <table class='table table-condensed table-bordered'>
                                        <?php foreach ($data['documents'] as $doc): ?>
                                        <tr>
                                            <td><?=$doc->name?></td>
                                            <td align="center"><a did="<?=$doc->did?>" class='deldoc' style='color:red'><i class='fa fa-times'></i></a></td>
                                        </tr>
                                        <?php endforeach?>

                                </table>
                            </div>
                        </div>

                    </div>
                <?php }?>
                <div class='col-md-12'>
                    <div class='form-group'>

                        <div><button class='btn btn-default pull-right' id='updatetest'>Bestätigen </button></div>

                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo URLROOT ?>/ementoring/pages/js/edittest.js"></script>