


<div class='row'>

    <div id='cspace'></div>

    <form  class="form-horizontal" method="POST" name="formdata"  action="" enctype="multipart/form-data">
        <input class='form-control' type='hidden' id='parentcategory' name="parentcategory" value='<?php echo $data['parentcategory'];   ?>'/>
        <input class='form-control' type='hidden' id='uniquecontentuploadid' name="uniquecontentuploadid" value='<?php echo $data['uniquecontentuploadid'];   ?>'/>
        <input class='form-control' type='hidden' id='uniquementoruploadid' name="uniquementoruploadid" value='<?php echo $data['uniquementoruploadid'];   ?>'/>
        <input class='form-control' type='hidden' id='contentid' name="contentid" value=''/>

    <div class='col-md-12'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Titel</label></div>
            <div class='col-md-9' style='padding:5px'><input class='form-control' type='text' id='title' name="title"/></div>

        </div>

    </div>
    <div class='col-md-12'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Untertitel</label></div>
            <div class='col-md-9' style='padding:5px'><input class='form-control' type='text' id='subtitle' name="subtitle"/></div>

        </div>

    </div>
    <div class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Kategorie / Unterkategorie</label></div>
            <div class='col-md-9' style='padding:5px'>

                <select class='form-control' id='category' name="category">
                        <option><?=$data['categoryname'] ?> </option>
                </select>

            </div>

        </div>

    </div>

    <div class='col-md-12'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Art des inhalts</label></div>
            <div class='col-md-9' style='padding:5px'>

                <select class='form-control' id='contenttype' name=""contenttype>
                    <option value="">Select Content Type </option>
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

                <select class='form-control' id='aftype' name="lessontype">

                    <option value="">Select Type</option>
                    <option>Lösung hochladen</option>
                    <option>Bearbeitung über Textfeld</option>


                </select>

            </div>

        </div>

    </div>


    <div class='col-md-12 cvideotype'>
        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Video Type</label></div>
            <div class='col-md-9' style='padding:5px'>

                <select class='form-control' id='cvideotype' name="cvideotype">
                    <option value=''>Select Video Type </option>
                    <option>File </option>
                    <option>Link</option>

                </select>

            </div>

        </div>

    </div>

    <div class='col-md-12 cvideolink'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Video Link</label></div>
            <div class='col-md-9' style='padding:5px'>
                <input type='text' class='form-control' id='cvideolink' name="cvideolink" />

            </div>

        </div>

    </div>

    <div id='8'></div>

    <div class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Beschreibung</label></div>
            <div class='col-md-9' style='padding:5px'>
                        <textarea class='summernote' id='contentdes' rows="6">
                        </textarea>
            </div>

        </div>

    </div>
    <div class='col-md-12' >

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Mentor Beschreibung</label></div>
            <div class='col-md-1' style='padding:5px'>
                <input type='checkbox' id='allowmentor'/>
            </div>
            <div class='col-md-3 forupload' style='padding:8px'><label>Musterlösung</label></div>
            <div class='col-md-1 forupload' style='padding:5px'>
                <input type='checkbox' id='mentorupload'/>
            </div>
            <div class='col-md-2' style='padding-top:5px'><label>Chatten zulassen</label></div>
            <div class='col-md-1' style='padding-top:5px'>
                <input type='checkbox' id='allowchat' name="allowchat"/>
            </div>

        </div>

    </div>
    <div class='col-md-12 mentorupload' style='display:none' >

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Musterlösung</label></div>
            <div class='col-md-9' style='padding:5px'>

                <input type='file' class='form-control' multiple name='mentorcontentupload[]' id='mentorcontentupload' data-show-preview="false">
            </div>

        </div>

    </div>
    <div id='mentorsdescbody' style='display:none' class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Mentor Beschreibung</label></div>
            <div class='col-md-9' style='padding:5px'>
                        <textarea class='summernote'  style='color:#000' id='mentorsdesc' rows="4" name="mentordesc">
                        </textarea>
            </div>

        </div>

    </div>
    <div class='col-md-12 cuploadspace' >

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Datei Hochladen</label></div>
            <div class='col-md-9' style='padding:5px'>

                <input type='file' class='form-control' multiple name='contentupload[]' id='contentupload' data-show-preview="false">
            </div>

        </div>

    </div>


    <div class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>&nbsp;</label></div>
            <div class='col-md-9' style='padding:5px'>

                <button type="submit" class='btn btn-default btn-block' id='addcontentbtn' name="savecontent"
                >Bestätigen</button>
            </div>

        </div>

    </div>

    </form>

</div>
 <script src="<?php echo URLROOT ?>/ementoring/pages/js/addcontent.js"></script>

