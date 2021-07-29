<?php
class M_user extends CI_Model{
    private $_table = "user";

    public $id_user;
    public $nama;
    public $username;
    public $pengguna_password;
    public $nip;
    public $email;
    public $level;
    public $blokir;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'pengguna_password',
            'label' => 'password',
            'rules' => 'required'],

            ['field' => 'nip',
            'label' => 'nip',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],

            ['field' => 'level',
            'label' => 'level',
            'rules' => 'required'],

            ['field' => 'blokir',
            'label' => 'blokir',
            'rules' => 'required']
        ];
    }

    public function add()
    {
        $post = $this->input->post();

        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->pengguna_password = md5($post["pengguna_password"]);
        $this->nip = $post["nip"];
        $this->email= $post["email"];
        $this->level = $post["level"];
        $this->blokir = $post["blokir"];
     
        return $this->db->insert($this->_table, $this);
    }

    public function save_forum_category()
    {
        $post = $this->input->post();

        $this->nama = $post["nama"];
        $this->status = $post["status"];     
        return $this->db->insert($this->_table, $this);
    }

    public function save_document_category()
    {
        $post = $this->input->post();

        $this->nama = $post["nama"];
        $this->status = $post["status"];     
        return $this->db->insert($this->_table, $this);
    }

    public function save_note_category()
    {
        $post = $this->input->post();

        $this->nama = $post["nama"];
        $this->status = $post["status"];     
        return $this->db->insert($this->_table, $this);
    }

    public function save_lesson_category()
    {
        $post = $this->input->post();

        $this->nama = $post["nama"];
        $this->status = $post["status"];     
        return $this->db->insert($this->_table, $this);
    }

    public function save_event_category()
    {
        $post = $this->input->post();

        $this->nama = $post["nama"];
        $this->status = $post["status"];     
        return $this->db->insert($this->_table, $this);
    }

    function get_all_user(){
		$hsl=$this->db->query("SELECT * from user ");
		return $hsl;

    }
    function delete($kode){
		$hsl=$this->db->query("DELETE from user where id_user='$kode'");
		return $hsl;
	}

    function update($kode,$nip,$nama,$email,$level,$blokir,$pengguna_password){
		$hsl=$this->db->query("UPDATE user set nip='$nip',nama='$nama',email='$email',level='$level',blokir='$blokir', pengguna_password = '$pengguna_password' where id_user='$kode'");
		return $hsl;
	}
	

}
