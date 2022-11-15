<?php
require_once 'model/persist/usuario.php';
class UserFilePersist {
    private ?string $filename;
    private ?string $delimiter;

    public function __construct(?string $filename=null,?string $delimiter=null){
        $this->filename=$filename;
        $this->delimiter=$delimiter;
    }

    public function getfilename(){
        return $this->$filename;
    }

    public function setfilename($filename) {
        $this->filename = $filename;
    }

    public function getdelimiter(){
        return $this->$delimiter;
    }

    public function setdelimiter($delimiter) {
        $this->delimiter = $delimiter;
    }



    /**
 * read all user for files 
 * @return array an array of all users reads from files or ???
 * 
 */
    public function readAllUser():array{
// to do
        $result = array();
        if (\file_exists($this->filename) && \is_readable($this->filename)) {
            $handle = \fopen($this->filename, 'r');  //returns false on error.
            if ($handle!=false) {
                while (!\feof($handle)) {
                    $line = trim(\fgets($handle)); // trim elimina los saltos y espacios
                    if ($line) {
                        list($key, $value) = \explode($delimiter, $line);
                        $data["$key"] = (int) $value;
                    }
                }
                \fclose($handle);     
            }else{
                $result = array();
            }
        }
        return $result;
    }

    /**
 * add user for files 
 * @return array an array of all users reads from files or ???
 * 
 */
    public function addUser(User $user):bool{
        $result = false;
        if (\file_exists($this->filename) && \is_writeable($this->filename)) {
            $handle = \fopen($this->filename, 'a');
            if($handle!=false){
                \fprintf($handle,"%s%s%s\n",$user->getusername(),$this->delimiter,$user->getpassword());
                $result = true;
                \fclose($handle);
            }
        }

        return $result;
        
    }
}