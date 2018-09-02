<?php

class Summernote Extends SummernoteController{

    public function addcontent()
    {
        foreach ($_POST as $name => $value) {
            $$name = $value;
        }

        if ($mode == 'edit') {
            $cid = $contentid;
        } elseif ($mode == 'create') {
            $cid = null;
        } else {
            throw new frameworkError("POST to content method with no mode...");
        }

        if (!$content = new ContentStructure($cid)) {

        }
        $contentdate = date("Y-m-d");
        $con = &$content->recordObject;
        $con->title = $title;
        $con->subtitle = $subtitle;
        $con->category = $category;
        $con->contenttype = $contenttype;
        $con->lessontype = $lessontype;
        $con->contentdate = $contentdate;
        $con->allowchat = $allowchat;
        $con->videotype = $videotype;
        $con->videolink = $videolink;
        $con->description = $description;
        $con->mentordescription = $mentordesc;
        $con->parentcategory = $parentcategory;
        $con->randomnumber = $uniquecontentuploadid;
        $con->randomtwo = $uniquementoruploadid;

        if ($content->store()) {
            if ($mode != 'edit') {
                $cid = $con->cid;
                $orderid = $cid + 1;
                $content = new ContentStructure($cid);
                $con = &$content->recordObject;
                $con->orderid = $orderid;
                $content->store();
            }
        }

    }
}