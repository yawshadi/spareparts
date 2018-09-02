                                <div class="panel panel-primary">
                                    <div id='erspace'></div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" method="" name="formdata"  action="" enctype="multipart/form-data">
                                                <input class='form-control' type='hidden' id='uniquetestuploadid' name="uniquetestuploadid" value='<?= $data['uniquetestuploadid'] ?>'/>

                                                <div class='form-group'>

                                                    <div><label>Themenblock</label></div>
                                                    <div>
                                                        <select class="form-control select" id='parentmod' name="category">
                                                            <option><?= $data['parent'] ?></option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class='form-group'>

                                                    <div><label>Test Type</label></div>
                                                    <div>
                                                        <select class="form-control select" id='testtype' name="testtype">
                                                            <option></option>
                                                            <option>Free Form</option>
                                                            <option>Multi-Choice</option>

                                                        </select>

                                                    </div>

                                                </div>

                                                <div class='form-group'>

                                                    <div><label>Frage</label></div>
                                                    <div>
                                                    <textarea class="form-control" rows="5" id='question' name="preamble" style="border-radius: 0.35rem;"></textarea>
                                                    </div>

                                                </div>

                                                <div class='form-group multispace'>

                                                    <div><label>Multi-Choice Options</label></div>
                                                    <div><input class='form-control' type='text' id='choice' name="choice"
                                                                placeholder="Options must be comma separated. eg (yes, no)"/></div>

                                                </div>

                                                <div class='form-group multispace'>

                                                    <div><label>Answer</label></div>
                                                    <div><input class='form-control' type='text' id='answer' name="answer"
                                                                placeholder="Answer to question"/></div>
                                                    <br/>

                                                    <div><label>Answer Type :</label>&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <label>one</label>
                                                        <input type='radio' name='ans' id='one'/>
                                                        &nbsp;&nbsp;&nbsp;
                                                        <label>Multiple</label>
                                                        <input type='radio' name='ans' id='many'/></div>

                                                </div>
                                                <div class='form-group'>

                                                    <div><label>Musterlösung</label>
                                                        <input type='checkbox' id='mentorreview' name="mentorreview"/>
                                                    </div>

                                                </div>

                                                <div class='form-group mentorspace' style='display:none'>

                                                    <div align='center' class='col-md-12' style='padding:5px'>
                                         <textarea class="form-control" rows="3" id='mentorsdesc' name="mentordesc"
                                         style="border-radius: 0.35rem;margin-bottom:3px"></textarea>
                                                        <input type='file' class='form-control' name='contentupload[]' id='testupload'
                                                               data-show-preview="false" multiple/>
                                                    </div>

                                                </div>
                                                <div class='form-group'>

                                                    <div><button type="button" class='btn btn-default pull-right' id='savetest'>Bestätigen </button></div>


                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    </div>


<script src="<?php echo URLROOT ?>/ementoring/pages/js/addtest.js"></script>
