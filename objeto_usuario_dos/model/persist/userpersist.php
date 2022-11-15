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

/**
 * reada all user for files 
 * @return array an array of all users reads from files or ???
 * 
 */
    public function readAllUser():array{
        
    }
}