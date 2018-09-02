
<div class='row'>

    <div id='cspace'></div>

    <div class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Titel</label></div>
            <div class='col-md-9' style='padding:5px'><input class='form-control' type='text' id='etitle'  value="<?= $data['content']->title ?>"/></div>
            <input class='form-control' type='hidden' id='contentid' name="contentid" value='<?= $data['content']->cid ?>'/>
            <input class='form-control' type='hidden' id='uniquecontentuploadid' name="uniquecontentuploadid" value='<?php echo $data['content']->randomnumber   ?>'/>
            <input class='form-control' type='hidden' id='uniquementoruploadid' name="uniquementoruploadid" value='<?php echo $data['content']->randomtwo   ?>'/>
             <input class='form-control' type='hidden' id='parentcategory' name="parentcategory" value='<?php echo $data['content']->parentcategory   ?>'/>
        </div>

    </div>
    <div class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Untertitel</label></div>
            <div class='col-md-9' style='padding:5px'><input class='form-control' type='text' id='esubtitle'  value="<?= $data['content']->subtitle ?>"/></div>

        </div>

    </div>
    <div class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Kategorie / Unterkategorie</label></div>
            <div class='col-md-9' style='padding:5px'>

                <select class='form-control' id='ecategory'>
                    <option><?= $data['content']->category ?></option>
                    <option>Informieren</option>
                    <option>Erarbeiten</option>
                    <option>Test</option>
                </select>

            </div>

        </div>

    </div>

    <div class='col-md-12'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Art des inhalts</label></div>
            <div class='col-md-9' style='padding:5px'>

                <select class='form-control' id='econtenttype'>
                <?php if($data['content']->contenttype == 'Quiz') { ?>
                <option value='Quiz'>Test</option>
                <?php } else{ ?>
                <option><?= $data['content']->contenttype ?> </option>
                <?php } ?>
                    <option>Aufgabe </option>
                    <option>Lesestoff </option>
                    <option>Video </option>
                    <option value='Quiz'>Test </option>

                </select>

            </div>

        </div>

    </div>


    <div class='col-md-12 afarea'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Aufgabe Type</label></div>
            <div class='col-md-9' style='padding:5px'>

                <select class='form-control' id='eaftype'>

                    <option><?= $data['content']->lessontype ?></option>
                    <option>Lösung hochladen</option>
                    <option>Bearbeitung über Textfeld</option>


                </select>

            </div>

        </div>

    </div>

    <div class='col-md-12 ecvideotype'>
        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Video Type</label></div>
            <div class='col-md-9' style='padding:5px'>

                <select class='form-control' id='ecvideotype'>
                    <option><?= $data['content']->videotype ?></option>
                    <option>File </option>
                    <option>Link</option>

                </select>

            </div>

        </div>

    </div>

    <div class='col-md-12 ecvideolink'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Video Link</label></div>
            <div class='col-md-9' style='padding:5px'>
                <input type='text' class='form-control' id='ecvideolink'
                       value='<?= $data['content']->videolink ?>' />

            </div>

        </div>

    </div>

    <div id='8'></div>

    <div class='col-md-12'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Beschreibung</label></div>
            <div class='col-md-9' style='padding:5px'>
                        <textarea class='form-control' type='text' id='econtentdes'>
                        <?= $data['content']->description ?>
                        </textarea>
            </div>

        </div>
        <div class='col-md-12' >

            <div class='form-group'>

                <div class='col-md-3' style='padding:8px'><label>Mentor Beschreibung</label></div>
                <div class='col-md-1' style='padding:5px'>
                    <input type='checkbox' id='eallowmentor' <?php echo ($data['content']->mentordescription!='')?'checked':''?> />
                </div>
                <div class='col-md-3 eforupload' style='padding:8px'><label>Musterlösung</label></div>
                <div class='col-md-1 eforupload' style='padding:5px'>
                    <input type='checkbox' id='ementorupload'/>
                </div>
                <div class='col-md-2' style='padding-top:5px'><label>Chatten zulassen</label></div>
                <div class='col-md-1' style='padding-top:5px'>
                    <input type='checkbox' id='eallowchat' <?php echo ($data['content']->allowchat==1)?'checked':''?>/>
                </div>

            </div>

        </div>
        <div class='col-md-12 ementorupload' style='display:none' >

            <div class='form-group'>

                <div class='col-md-3' style='padding:8px'><label>Musterlösung</label></div>
                <div class='col-md-9' style='padding:5px'>

                    <input type='file' class='form-control' multiple name='mentorcontentupload[]' id='mentorcontentupload' data-show-preview="false">
                </div>

            </div>

        </div>
        
        <div id='ementorsdescbody'  style="display:<?php if($data['content']->mentordescription=='') echo 'none' ?>" class='col-md-12'>

            <div class='form-group'>

                <div class='col-md-3' style='padding:8px'><label>Mentor Beschreibung</label></div>
                <div class='col-md-9' style='padding:5px'>
                        <textarea class='summernote' style='color:#000' id='ementorsdesc' rows="4">
                        <?= $data['content']->mentordescription ?>
                        </textarea>
                </div>

            </div>

        </div>
      


        <div class='col-md-12'>

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

        </div>


        <div class='col-md-12'>

            <div class='form-group euploadspace'>

                <div class='col-md-3' style='padding:8px'><label>Datei Hochladen</label></div>
                <div class='col-md-9' style='padding:5px'>

                    <input type='file' class='form-control' name='contentupload[]' id='contentupload'
                           data-show-preview="false" multiple />
                </div>

            </div>

        </div>


        <div class='col-md-12'>

            <div class='form-group' >

                <div class='col-md-3' style='padding:8px'><label>&nbsp;</label></div>
                <div class='col-md-9' style='padding:5px'>

                    <button class='btn btn-default btn-block' id='updatecontentbtn'
                            style="">Inhalt aktualisieren</button>
                </div>

            </div>

        </div>




    </div>
 <script>
  var videolink = '<?= $data['content']->videolink ?>';
  var videotype = '<?= $data['content']->videotype ?>';
  var contenttype = '<?= $data['content']->contenttype ?>';
  var lessontype = '<?= $data['content']->contenttype ?>';
  if(lessontype != 'Aufgabe') {$('.afarea').hide();$('.eforupload').hide() }
</script>
 <script src="<?php echo URLROOT ?>/ementoring/pages/js/editcontent.js"></script>