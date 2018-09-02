
<script type='text/javascript'>

    $('.closebtn').on('click', function(){

        var counter = '';
        var userid = '';

        $.ajax({
            type: "POST",
            url: "ajaxscripts/counter.php",
            data:{counter:counter, userid:userid},
            dataType: "html",

            success: function(text) {

                $('#test').html(text);
                window.location = '../<?php echo URLROOT ?>/Ementoring/pages/menteedashboard?vcounter=update';
            },

            error:function (xhr, ajaxOptions, thrownError){
                alert(xhr.status + " " + thrownError);
            }
        });



    })


</script>
<head>
    <link href="http://vjs.zencdn.net/6.2.7/video-js.css" rel="stylesheet">

    <!-- If you'd like to support IE8 -->
    <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>

<body>
<video id="my-video" class="video-js" autoplay="true" controls preload="auto" width="650" height="420"
       data-setup="{}">
    <source src="video1.mp4" type='video/mp4'>
    <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a web browser that
        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
</video>

<div style="background: #fff; width:650px; padding:15px">
    <div>
        Kategorie geht es vor allem um DICH und um alles was dich als Person besonders macht. Jeder Mensch ist anders, kann bestimmte Dinge besonders gut und andere gar nicht. Welche Talente, St�rken, Schw�chen und Macken du hast werden wir uns in dieser Kategorie genauer mit dir ansehen und dies reflektieren. Viel Spa�!
    </div>

    <div style="padding-top:15px" ><button class='btn btn-primary btn-sm closebtn'>Close</button></div>


</div>


<script src="http://vjs.zencdn.net/6.2.7/video.js"></script>
</body>