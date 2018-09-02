
<div class="col-xl-10 align-self-center my-modal-calendar" id="" data-toggle="modal">
    <i style='margin:10px;cursor:pointer;color:#fff' data-dismiss="modal" class='fa fa-close pull-right'></i>
    <p style="background: #294c98; color: #fff; text-align: center;
	font-size: 20px; padding-bottom: 7px; margin-bottom: -1px;">
        Wann und mit wem möchtest du sprechen?</p>
</div>
<div class="col-xl-10 pull-right" style="background: #ffffff; color: #294c98;">

    <div class="col-lg-12">
        <fieldset class="form-group">
            <label class="form-label semibold" for="exampleInput">Datum</label>

            <input type="text" class="form-control" style='background:white' readonly id="eventdate">
        </fieldset>
        <fieldset class="form-group">
            <label class="form-label semibold" for="exampleInput">Worüber möchtest du sprechen?</label>
            <input type="text" class="form-control" id="topic">

        </fieldset>
        <fieldset class="form-group">
            <label for="exampleSelect" class="form-label semibold">Mit wem möchtest du sprechen</label>
            <select class='form-control mentor'  style='width:340px' multiple id='mentor'>

                    <option value=""> </option>
                    <option value=""></option>

                    <option value=""> </option>
                    <option value=""></option>

                    <option value=""> </option>
                    <option value=""> </option>



            </select>
        </fieldset>
        <fieldset class="form-group">
            <label class="form-label semibold" for="exampleInput">Wie lang dauert es?<span id='er' style='color:red;display:none'>erforderlich</span></label>
            <label class="radio-inline col-sm-4 pull-left"><input id='duration1' type="radio" name="optradio">
                <small id='1'class="text-muted" style="margin-left: -12px;">15 Min.</small></label>
            <label class="radio-inline col-sm-4"><input id='duration2' type="radio" name="optradio">
                <small id='2'class="text-muted" style="margin-left: -12px;">30 Min.</small></label>
            <label class="radio-inline col-sm-4 pull-right"><input id='duration3' type="radio" name="optradio">
                <small id='3'class="text-muted" style="margin-left: -12px;">60 Min.</small></label>
        </fieldset>

        <div class="form-group">
            <label class="form-label semibold" for="exampleInput">Welche zeit passt am besten?</label>

            <input class='form-control time' placeholder='Zeit' type='text' id='eventime' />
        </div>

        <button class='btn btn-block btn-default ' id='bookevent'
                style="background:#294c98; color:#fff">Bestätigen</button>

    </div>
    <br/>

</div>

<script>
    var person="";
    if(person=='Mentee'){
        var place="ajaxscripts/booking.php";
        var yourid="";
        var forsee="";
        if(forsee==0){

            toastr.error('Ihr Mentor hat sich noch nicht angemeldet, trotzdem einen Termin buchen?', '', {
                "positionClass": "toast-bottom-right",
                "closeButton": true, "showDuration": "0",
                "hideDuration": "0",
                "timeOut": "0",
                "extendedTimeOut": "0"
            });
            toastr.options.closeButton = true;
        }

    }if(person=='Mentor'){
        var place="ajaxscripts/bookingmentor.php";
        var yourid="";
        var forsee="";
        if(forsee==0){
            toastr.error('Ihr Mentee hat sich noch nicht angemeldet, trotzdem einen Termin buchen?', '', {
                "positionClass": "toast-bottom-right",
                "closeButton": true, "showDuration": "0",
                "hideDuration": "0",
                "timeOut": "0",
                "extendedTimeOut": "0"
            });
            toastr.options.closeButton = true;
        }

    }if(person=='Mfc'){
        var place="ajaxscripts/bookingmfc.php";
        var yourid="";
    }


    $("#eventdate").datepicker({
        dateFormat: 'dd.mm.yy',
        minDate: 0,
        monthNames: ['Januar','Februar','März','April','Mai','Juni',
            'Juli','August','September','Oktober','November','Dezember'],
        monthNamesShort: ['Jan','Feb','Mär','Apr','Mai','Jun',
            'Jul','Aug','Sep','Okt','Nov','Dez'],
        dayNames: ['Sonntag','Montag','Dienstag','Mittwoch','Donnerstag','Freitag','Samstag'],
        dayNamesShort: ['So','Mo','Di','Mi','Do','Fr','Sa'],
        dayNamesMin: ['So','Mo','Di','Mi','Do','Fr','Sa']
    });

    moment().format();
    $('#eventime').timepicker({
        'timeFormat': 'H:i',
        'minTime': '07:00',
        'maxTime': '22:00'
    });

    $(".mentor").SumoSelect();
    $('#bookevent').click(function(){
        var code="";
        var url = 'https://e-mentoring.getinnotized.com'; //window.location.hostname;
        var socket = io.connect(url+':8085');
        var topic = $("#topic").val();
        var mentor = $(".mentor").val();
        var time = $("#eventime").val();
        var eventdate = $("#eventdate").val();
        var menteeid ="";
        var mentorid ="";
        var mfcid ="";
        var fullname = "";
        var type="";
        var error='';
        var duration='';
        if($('#duration1').is(":checked")){
            var duration ='15 min';
            $("#er").css("display","none");
        }
        if($('#duration2').is(":checked")){
            var duration ='30 min';
            $("#er").css("display","none");
        }
        if($('#duration3').is(":checked")){
            var duration ='60 min';
            $("#er").css("display","none");
        }
        $("#topic").keyup(function(){
            $(this).css("border", " 1px solid green");
        })
        $(".mentor").change(function(){
            $(this).css("border", " 1px solid green");
        })

        $("#eventime").change(function(){
            $(this).css("border", " 1px solid green");
        })

        if(topic==''){
            error='required';
            $("#topic").css('border','thin solid red');
        }
        if(mentor=='Select'){
            error+='required';
            $(".mentor").css('border','thin solid red');
        }
        if(time==''){
            error+='required';
            $("#eventime").css('border','thin solid red');
        }
        if(duration==''){
            error+='required';
            $("#er").show();
        }
        if(error==''){
            $.ajax({
                type: "POST",
                url: "ajaxscripts/bookevent.php",
                data:{topic:topic,mentor:mentor,time:time,duration:duration,eventdate:eventdate,mentorid:mentorid,menteeid:menteeid,type:type,mfcid:mfcid},
                dataType: "html",

                success: function(text) {
                    var returnid=text;
                    var obj = [],
                        items = '';
                    $('.mentor option:selected').each(function(i) {
                        obj.push($(this).val());
                        $('.mentor')[0].sumo.unSelectItem(i);
                    });
                    for(var i=0;i<obj.length;i++) {items += '' + obj[i]};
                    var number=obj.length;
                    if(number==1){
                        var uuid=items;

                    }else{
                        var uuid='';
                    }
                    $.ajax({
                        type: "POST",
                        url: "ajaxscripts/trycalendar.php",
                        data:{menteeid:"",mentorid:"",mfcid:"",fullname:"",mentorname:"",mfcname:"",menteename:"",person:""},
                        dataType: "html",
                        beforeSend: function(){

                        },
                        success: function(text) {

                            $('#calendarhere').html(text);
                        },
                        complete: function(){

                        },
                        error:function (xhr, ajaxOptions, thrownError){
                            alert(xhr.status + " " + thrownError);
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: place,
                        data:{menteeid:"",mentorid:"",mfcid:"",fullname:"",mentorname:"",mfcname:"",menteename:"",person:""},
                        dataType: "html",

                        success: function(text) {
                            $('#review').html(text)

                            var  messages= fullname+' möchte mit dir das Thema '+topic+' besprechen. Gib <a class="showappointment" ' +
                                'calid="'+returnid+'" menteeid="" mentorid="" mfcid="" fullname="" mentorname="" mfcname="" menteename="" person="">hier</a> Rückmeldung zu deiner Verfügbarkeit.';
                            if(uuid==''){
                                var payload = {
                                    text: fullname+' möchte mit dir das Thema '+topic+' besprechen. Gib <a class="showappointment" ' +
                                    'singlechat="no" calid="'+returnid+'" menteeid="" mentorid="" mfcid="" fullname="" mentorname="" mfcname="" menteename="" ' +
                                    'person="">hier</a> Rückmeldung zu deiner Verfügbarkeit.',
                                    sender: fullname,
                                    senderid: yourid,
                                    type: '',
                                    filename: '',
                                    msgid:'',
                                    channel: 'Individuelle',
                                    code:code,
                                    channelid:'',
                                };
                                console.log(payload);
                                socket.emit('channel', payload);

                                ws = new WebSocket('wss://' + window.location.hostname + ':3080');
                                ws.onopen = function () {
                                    ws.send(JSON.stringify({ 'message':messages,'fullname':fullname, 'uid': yourid,'senderid':yourid,'msgid':'','channel':'Individuelle Arbeitsgruppe','channelid':'' }));
                                }
                            }else{
                                if(uuid==menteeid){ var uuids=""}
                                if(uuid==mentorid){var uuids= ""}
                                if(uuid==mfcid){var uuids=""}
                                console.log(uuids);

                                var  messages= fullname+' möchte mit dir das Thema '+topic+' besprechen. Gib <a class="showappointment" singlechat="yes" peeruid="'+uuids+'" ' +
                                    'calid="'+returnid+'" menteeid="" mentorid="" mfcid="" fullname="" mentorname="" mfcname="" menteename="" person="">hier</a> Rückmeldung zu deiner Verfügbarkeit.';

                                ws = new WebSocket('wss://' + window.location.hostname + ':3080');
                                ws.onopen = function () {
                                    var info ={'msg':messages,'fullname':fullname,'singlechat':'true','uuid':yourid,'msgid':'','peeruuid':uuids};
                                    console.log(info);
                                    ws.send(JSON.stringify(info));
                                }
                                var singlechat = {
                                    msg: fullname+' möchte mit dir das Thema '+topic+' besprechen. Gib <a class="showappointment" singlechat="yes" ' +
                                    'peeruid="'+uuids+'" calid="'+returnid+'" menteeid="" mentorid="" mfcid="" fullname="" mentorname="" mfcname="" menteename="" person="">hier</a> Rückmeldung zu deiner Verfügbarkeit.',
                                    sender: fullname,
                                    uuid: yourid,
                                    peeruuid: uuids,
                                    code:code,
                                    msgid:'',
                                    type: 'singlechat'

                                };
                                console.log(singlechat);
                                socket.emit('singlechat', singlechat);
                            }
                        },


                        error:function (xhr, ajaxOptions, thrownError){
                            alert(xhr.status + " " + thrownError);
                        }
                    });
                    $("#myCanlendarModal").modal('hide');

                },

                error:function (xhr, ajaxOptions, thrownError){
                    alert(xhr.status + " " + thrownError);
                }
            });
        }
    })

</script>