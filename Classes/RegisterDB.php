<?php
class RegisterDB extends Classes
{
    public function _construct()
    {
        parent::_construct();
    }
    public function check_user($username,$password)
    {
        $this->db->select("SELECT * FROM  `user` WHERE username = ' ".$username." ' OR password ' ".$password." ' ");
        $count= count($result);
        return $count;
    }
    public function insert_user($data)
    {
 $this->db->insert('register', $data);
}
}
?>
