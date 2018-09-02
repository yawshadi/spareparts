<script type='text/javascript'>
const urlroot = leherehead.urlroot;
 // This Function will handle all ajax post request
 function AjaxPostRequest(ajaxurl, postdata) {
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: postdata,
            beforeSend: function() {},
            success: function(text) {
                console.log(text);
            },
            complete: function() {},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });
    }

 function AjaxGetRequestWithContainer(ajaxurl, getdata, containerid) {
        $.ajax({
            type: "GET",
            url: ajaxurl,
            data: getdata,
            beforeSend: function() {},
            success: function(text) {
                $('.' + containerid + '').html(text);
            },
            complete: function() {},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });
    }

 function AjaxPostRequestWithContainer(ajaxurl, postdata, containerclass) {
        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: postdata,
            beforeSend: function() {},
            success: function(text) {
                $('.' + containerclass + '').html(text);
            },
            complete: function() {},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + " " + thrownError);
            }
        });
    }


$('.deldoc').on('click', function(){
 
 var did = $(this).attr('did');
 var randomnumber = '<?= $data['randomnumber'] ?>';
 var tablename="<?=$data['tablename'] ?>";
 var x = confirm('Wollen Sie dieses Dokument löschen?');

 if(x == true){
console.log("randomnumber",randomnumber);
console.log("did",did);
console.log("tablename",tablename);
        var ajaxurl = urlroot + "/ementoring/data/deletedocument/";
        var containerclass = 'docarea';
        postdata = {did:did,randomnumber:randomnumber,tablename:tablename};
            AjaxPostRequestWithContainer(ajaxurl, postdata, containerclass);
        return false;
}

return false;

})

</script>

 <table class='table table-condensed table-bordered'>
         <?php
             foreach($data['documents'] as $doc):
                   ?>
                   <tr>
                   <td><?=$doc->name  ?></td>
                   <td align="center"><a  did='<?= $doc->did ?>' class='deldoc' style='color:red'><i class='fa fa-times'></i></a></td>
                   </tr>
            <?php
              endforeach
            ?>
                        
   </table>



