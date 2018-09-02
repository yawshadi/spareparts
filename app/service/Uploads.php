<?php

/**
 * This class is suppose to handle all uploads
 */

class Uploads{


    public $target_dir = APPROOT.'/uploads/';
    public $extension;
    public $filename;
    public $templocation;
    public $type = array('xlsx', 'csv');



    //Gets the extension of the file

    /**
     * @return mixed
     */
    public function fileExtension(){
        $this->extension = explode(".", $this->filename['name']);
        $extension = $this->extension = end($this->extension);
        return $extension;
    }


    //Moves  the file from temporary locatio
    public function moveFiles($filename){
        $this->templocation = $this->filename["tmp_name"];
        move_uploaded_file($this->templocation, $this->target_dir."/".$filename);
        /*
         * this function previously did not return anything,
         * so it should not break anything to have it return the upload path.
         */
        return URLROOT . "/uploads/$filename";
    }

    public function upLoadFile($newfilename = null){
        if($newfilename == null){
            $filename =  uniqid().'.'.$this->fileExtension();
        }else{
            $filename =  $newfilename.'.'.$this->fileExtension();
        }
        $this->moveFiles($filename);
        // added a location to the success array
        return $successarray = array('status'=>'SUCCESS', 'filename'=>$filename,'location'=>URLROOT."/uploads/$filename");
    }

    public function removeFile($filename){
        $filepath = APPROOT.'/uploads/'.$filename;
        unlink($filepath);
    }


}


?>
