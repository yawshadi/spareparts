

<ul style='padding-left:0px' class="tab-pane sortable active" id="<?=$data['hash'] ?>">
                                    <?php foreach ($data['listofcontent'] as $content):

                                    $category = $content->name; 
                                    $parentcategory = $content->parent; 
                                    $mid = $content->mid; 
                                    $color = $content->color; 
                                    if($color=='#f6f8fa'){
                                        $body='#f2f2f2';
                                        $font='#595959';
                                    }elseif($color=='#b7d0e9'){
                                        $body='#cde4fa';
                                        $font='#25517e';
                                    } elseif($color=='#fddee1'){
                                        $body='#f9f0f0';
                                        $font='#a1565f';
                                    }else{
                                        $body='#fefee9';
                                        $font='#919236';
                                    }

                                    if($category=='Einführung'){
                                        
                                    }else{    

                                    ?>
                                    <li class='not' style="width: 100%; height: 35px; background:<?= $color?>; padding: 5px;
                                    font-size: 18px; font-weight: 700; padding-left: 30px;margin-bottom:0px">
                                    <span style='color:<?=$font?>'><?= $category  ?></span> 
                                    <span class='pull-right' ><a style='color:<?=$font ?>; padding-right: 20px' href='' mid="<?= $mid ?>" class='addsubcat' 
                                    categoryname='<?= $category ?>'>
                                    <!--<i class='fa fa-plus'></i>-->
                                    </a></span></li>
                                     <?php
                                    }

                                    $allcontent = ContentStructure::getalldeletedcontent($category,$parentcategory);

                                
                                    foreach($allcontent as $thiscontent):

                                        $cid=$thiscontent->cid;
                                        $contenttype=$thiscontent->contenttype;
                                        if($contenttype=='Video') $img='fa fa-youtube-play';
                                        if($contenttype=='Aufgabe') $img='fa fa-list';
                                        if($contenttype=='Lesestoff') $img='fa fa-book';
                                        if($contenttype=='Quiz') $img='fa fa-file-text-o';
                                        if($contenttype=='') $img='fa fa-book';
                                    ?>

                                <li id="<?= $cid ?>" style='color:black'>
                                    <table class="table table-striped table-hover condatatable borderless" style='margin-bottom:0px' width="100%">
                                     <tbody>
                                     <tr id="<?= $cid ?>">
                                        <td style='background:<?= $body ?>' width="5%"><a><i style="color:<?= $font ?>; font-weight: 900; font-size: 30px"class="<?= $img ?>"> </i></a></td>
                                        <td style='background:<?= $body ?>' width="25%"><?=$thiscontent->title?></td>
                                        <td style='background:<?= $body ?>' width="60%"><p style="font-size:20px;color: rgb(107, 165, 74);font-weight:bold;text-align:center">
                                            <?=$thiscontent->subtitle?></p><br>
                                        <div class='chan'> <?=$thiscontent->description?></div>
                                        </td>
                                       
                                        <td style='background:<?= $body ?>' width="2%" align="center"><a href='' cid='<?= $cid ?>'color:<?php echo $font ?> class='btn btn-default btn-rounded btn-condensed btn-sm restorecontent'><i class="fa fa-repeat"></i></a></td>
                                       

                                     </tr>
                                    </tbody>
                                   </table>
                                </li>
                                <?php
                                endforeach;
                                 ?>

                               <?php
                                endforeach;
                                ?>
                                    </ul>

<script src="<?php echo URLROOT ?>/ementoring/pages/js/contentstructure.js"></script>                                    