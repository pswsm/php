<?php
class UserFilePersist {
    private ?string $filename;

    public function __construct(?string $filename=null){
        $this->filename=$filename;
    }

    public function getfilename(){
        return $this->$filename;
    }

    public function setfilename($filename) {
        $this->filename = $filename;
    }

}