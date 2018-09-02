

<script type='text/javascript'>

    var lessontype = '';
    var mentorsdesc = '';

    if(lessontype != 'Aufgabe') {$('.afarea').hide() }
    if(mentorsdesc != '') {$('#ementorsdescbody').show() }


    var hash = window.location.hash;
    function sendFile(file, editor, welEditable) {
        data = new FormData();
        data.append("file", file);
        $.ajax({
            data: data,
            type: "POST",
            url: "ajaxscripts/summer.php",
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){
                $("#8").block({
                    css: {  border: 'none',
                        padding: '15px',
                        backgroundColor: '#000',
                        '-webkit-border-radius': '10px',
                        '-moz-border-radius': '10px',
                        opacity: .5,
                        color: '#fff'},
                    message: '<h4><i class="fa fa-cog"></i>uploading..</h4>'
                });
            },
            success: function(url) {
                editor.insertImage(welEditable, url);
            },
            complete: function(){
                setTimeout($("#8").unblock(), 15000);
            }
        });
    }
    $('#econtentdes').summernote({
        'height':200,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture']]
        ],
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0], editor, welEditable);
        }
    });
    $('#ementorsdesc').summernote({
        'height':100,
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture']]
        ],
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0], editor, welEditable);
        }
    });
    $('.note-editable').css('font-size','14px');
    $("#eallowmentor").click(function(){
        if($("#eallowmentor").is(':checked')){
            $("#ementorsdescbody").show(1000);
        }else{
            $("#ementorsdescbody").hide(1000);
        }})


    $('#econtentupload').uploadifive({
        'buttonText'  : 'BROWSE FILES TO UPLOAD',
        'auto'        : true,
        'method'      : 'post',
        'multi'       : true,
        'width'       : 560,
        'formData'    : {'randno' : ''},
        'uploadScript': 'ajaxscripts/uploadcontent.php',
    })


    $('.fileinput-upload-button').click(function(){
        $('.file-caption-name').hide();
    })


    function content(){

        $('#titlearea').hide();

        $.ajax({
            type: "POST",
            url: "ajaxscripts/content.php",
            data:{},
            dataType: "html",
            beforeSend: function(){
                $.blockUI();
            },
            success: function(text) {
                $('.contentarea').html(text)
            },
            complete: function(){
                $.unblockUI();
            },
            error:function (xhr, ajaxOptions, thrownError){
                alert(xhr.status + " " + thrownError);
            }
        });

    }

    $('#updatecontentbtn').click(function(){
        var d= window.location.hash;
        var id= d.substr(1);
        var title = $('#etitle').val();
        var subtitle = $('#esubtitle').val();
        var category = $('#ecategory').val();
        var contenttype = $('#econtenttype').val();
        var contentdes = $('#econtentdes').code();

        var cvideotype = $('#ecvideotype').val();
        var cvideolink  =  $('#ecvideolink').val();

        var randomnumber = '';
        var parent = '';
        var cid = '';
        var aftype = $('#eaftype').val();
        if($("#eallowchat").is(':checked')){
            var chat = 1;
        }else{
            var chat = 0;
        }
        if($("#eallowmentor").is(':checked')){
            var mentorsdesc =$("#ementorsdesc").code();
        }else{
            var mentorsdesc ='';
        }
        var error = '';

        if(title == '') { error = 'Title required \n'}
        if(category == '') { error += 'Sub category required  \n'}
        if(contenttype == '') { error += 'Content type required \n'}
        if(contenttype == 'Video' && cvideotype == '') { error += 'Video type required \n'}

        if(cvideotype == 'Link' && cvideolink == '') { error += 'Video Link required \n'}

        if(error != ''){$("#cspace").notify(error, "error" ); return false;  }




        $.ajax({
            type: "POST",
            url: "ajaxscripts/updatecontent.php",
            data:{title:title, category:category, contenttype:contenttype,
                contentdes:contentdes, randomnumber:randomnumber, cid:cid, cvideotype:cvideotype,
                cvideolink:cvideolink,parent:parent, aftype:aftype,chat:chat,mentorsdesc:mentorsdesc,subtitle:subtitle},
            dataType: "html",
            beforeSend: function(){
                $.blockUI();
            },
            success: function(text) {

                $('#econtentmodal').modal('hide');
                $.ajax({
                    type: "POST",
                    url: "ajaxscripts/contentbody.php",
                    data: {id:id},
                    dataType: "html",
                    beforeSend: function () {
                        $.blockUI();
                    },
                    success: function (text) {
                        $('#replace').html(text);
                    },
                    complete: function () {
                        $.unblockUI();
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + " " + thrownError);

                    }
                });
            },
            complete: function(){
                // $.unblockUI();
            },
            error:function (xhr, ajaxOptions, thrownError){
                alert(xhr.status + " " + thrownError);
            }
        });


    })



    var videolink = '';
    var videotype = '';
    var cont = '';

    if(cont != 'Video'){
        $('.cvideolink').hide();
        $('.cvideotype').hide();
    }

    else{
        $('.cvideolink').show();
        $('.cvideotype').show();
    }

    if(videotype == 'Link'){
        $('.euploadspace').hide();
    }
    else{
        $('.euploadspace').show();
        $('.cvideolink').hide();
    }


    $('#econtenttype').change(function(){

        var x = $(this).val();

        if(x == 'Aufgabe'){

            $('.afarea').show();


        }

        else{
            $('.afarea').hide();
            $('.aftype').val('');

        }

        if(x == 'Video'){

            $('.cvideotype').show();
            $('.euploadspace').hide();

        }

        else{
            $('.cvideotype').hide();
            $('.euploadspace').show();
            $('.cvideolink').hide();
            $('#ecvideolink').val('');
            $('#ecvideotype').val('');
        }
    })



    $('#ecvideotype').change(function(){

        var x = $(this).val();

        if(x == 'Link'){

            $('.cvideolink').show();
            $('.euploadspace').hide();

        }

        else{

            $('.cvideolink').hide();
            $('.cvideolink').val('');
            $('.euploadspace').show();

        }
    })

    /*$('#econtentmodal').on('hidden.bs.modal', function () {
        $.ajax({
                            type: "POST",
                            url: "ajaxscripts/content.php",
                            data:{},
                            dataType: "html",
                            beforeSend: function(){
                            $.blockUI();
                            },
                            success: function(text) {
                            $('.contentarea').html(text);
                            //var hash = window.location.hash;
                        $('#exTab1 a[href="' + hash + '"]').tab('show');
                            },
                            complete: function(){
                             $.unblockUI();
                            },
                            error:function (xhr, ajaxOptions, thrownError){
                                alert(xhr.status + " " + thrownError);
                            }
                 });
    })*/



    $('.deldoc').on('click', function(){

        var did = $(this).attr('dc_index');
        var randno = '';

        var x = confirm('Do you want to delete this document ?');

        if(x == true){

            $.ajax({
                type: "POST",
                url: "ajaxscripts/deletedocument.php",
                data:{did:did, randno:randno},
                dataType: "html",
                beforeSend: function(){
                    $.blockUI();
                },
                success: function(text) {
                    $('#docarea').html(text)
                },
                complete: function(){
                    $.unblockUI();
                },
                error:function (xhr, ajaxOptions, thrownError){
                    alert(xhr.status + " " + thrownError);
                }
            });

        }



    })

    $("#restorebtn").click(function(){
        var cid="";
        var d= window.location.hash;
        var id= d.substr(1);
        var x = confirm('Do you want to Restore this content ?');

        if(x == true){

            $.ajax({
                type: "POST",
                url: "ajaxscripts/restorecontent.php",
                data:{cid:cid},
                dataType: "html",
                beforeSend: function(){
                    $.blockUI();
                },
                success: function(text) {
                    $('#econtentmodal').modal('hide');
                    $.ajax({
                        type: "POST",
                        url: "ajaxscripts/deletedbody.php",
                        data: {id:id},
                        dataType: "html",
                        beforeSend: function () {
                            $.blockUI();
                        },
                        success: function (text) {
                            $('#replace').html(text);
                        },
                        complete: function () {
                            $.unblockUI();
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + " " + thrownError);

                        }
                    });
                },
                complete: function(){
                    $.unblockUI();
                },
                error:function (xhr, ajaxOptions, thrownError){
                    alert(xhr.status + " " + thrownError);
                }
            });

        }
    })
</script>

<div class='row'>

    <div id='cspace'></div>

    <div class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Titel</label></div>
            <div class='col-md-9' style='padding:5px'><input class='form-control' type='text' id='etitle'  value=""/></div>

        </div>

    </div>
    <div class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Untertitel</label></div>
            <div class='col-md-9' style='padding:5px'><input class='form-control' type='text' id='esubtitle'  value=""/></div>

        </div>

    </div>
    <div class='col-md-12'>

        <div class='form-group'>

            <div class='col-md-3' style='padding:8px'><label>Kategorie / Unterkategorie</label></div>
            <div class='col-md-9' style='padding:5px'>

                <select class='form-control' id='ecategory'>
                    <option></option>

                </select>

            </div>

        </div>

    </div>

    <div class='col-md-12'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Art des inhalts</label></div>
            <div class='col-md-9' style='padding:5px'>

                <select class='form-control' id='econtenttype'>

                        <option value='Quiz'>Test</option>

                        <option> </option>

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

                    <option></option>
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

                <select class='form-control' id='ecvideotype'>
                    <option></option>
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
                <input type='text' class='form-control' id='ecvideolink'
                       value='' />

            </div>

        </div>

    </div>

    <div id='8'></div>

    <div class='col-md-12'>

        <div class='form-group' >

            <div class='col-md-3' style='padding:8px'><label>Beschreibung</label></div>
            <div class='col-md-9' style='padding:5px'>
                        <textarea class='form-control' type='text' id='econtentdes'>

                        </textarea>
            </div>

        </div>
        <div class='col-md-12' >

            <div class='form-group'>

                <div class='col-md-3' style='padding:8px'><label>Mentor Beschreibung</label></div>
                <div class='col-md-1' style='padding:5px'>
                    <input type='checkbox' id='eallowmentor' />
                </div>

                <div class='col-md-2' style='padding-top:5px'><label>Chatten zulassen</label></div>
                <div class='col-md-1' style='padding-top:5px'>
                    <input type='checkbox' id='eallowchat' />
                </div>

            </div>

        </div>
        <div id='ementorsdescbody' style='display:none' class='col-md-12'>

            <div class='form-group'>

                <div class='col-md-3' style='padding:8px'><label>Mentor Beschreibung</label></div>
                <div class='col-md-9' style='padding:5px'>
                        <textarea class='summernote' style='color:#000' id='ementorsdesc' rows="4">

                        </textarea>
                </div>

            </div>

        </div>



            <div class='col-md-12'>

                <div class='form-group euploadspace'>

                    <div class='col-md-3' style='padding:8px'><label>Unterlagen</label></div>
                    <div class='col-md-9' style='padding:5px'>
                        <div id='docarea'>
                            <table class='table table-condensed table-bordered'>

                                    <tr>
                                        <td></td>
                                        <td align="center"><a href='#' dc_index='' class='deldoc' style='color:red'><i class='fa fa-times'></i></a></td>
                                    </tr>


                            </table>
                        </div>
                    </div>

                </div>

            </div>



        <!--<div class='col-md-12'>

             <div class='form-group euploadspace'>

                 <div class='col-md-3' style='padding:8px'><label>Datei Hochladen</label></div>
                 <div class='col-md-9' style='padding:5px'>

                 <input type='file' class='form-control' name='econtentupload[]' id='econtentupload'
                 data-show-preview="false" multiple />
                 </div>

             </div>

     </div>-->


        <div class='col-md-12'>

            <div class='form-group' >

                <div class='col-md-3' style='padding:8px'><label>&nbsp;</label></div>
                <div class='col-md-9' style='padding:5px'>

                    <button class='btn btn-success btn-block' id='restorebtn'
                            style="">Inhalt wiederherstellen</button>
                </div>

            </div>

        </div>




    </div>

