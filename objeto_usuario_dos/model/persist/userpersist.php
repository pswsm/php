<?php
require_once 'model/persist/usuario.php';
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
 * read all user for files 
 * @return array an array of all users reads from files or ???
 * 
 */
    public function readAllUser():array{
// to do
        return array();
    }

    /**
 * add user for files 
 * @return array an array of all users reads from files or ???
 * 
 */
    public function addUser(User $user):bool{
        $filepath = "files/users.txt";
        if($filepath == false){
            return false;
        }else{
            // to do
            $out = \fopen($filepath,"a");
            $write_user = \fprintf($user);
            $cerrar = \fclose($out);

            return true;}
    }
}