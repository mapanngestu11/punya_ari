<?php
class M_kategori extends CI_Model{
    private $_table = "kategori";

    public $id_kategori;
    public $nama;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],
            
            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required']
        ];
    }

    public function save_article_category()
    {
        $post = $this->input->post();

        $this->nama = $post["nama"];
        $this->status = $post["status"];     
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

    function get_category_lesson(){
		$hsl=$this->db->query("SELECT * from kategori Where status ='lesson' ");
		return $hsl;
	}

    function get_category_article(){
		$hsl=$this->db->query("SELECT * from kategori Where status ='article' ");
		return $hsl;
	}

    function get_category_forum(){
		$hsl=$this->db->query("SELECT * from kategori Where status ='forum' ");
		return $hsl;
	}
    function get_category_note(){
		$hsl=$this->db->query("SELECT * from kategori Where status ='note' ");
		return $hsl;
	}
    function get_category_document(){
		$hsl=$this->db->query("SELECT * from kategori Where status ='document' ");
		return $hsl;
	}
    function get_category_event(){
		$hsl=$this->db->query("SELECT * from kategori Where status ='event' ");
		return $hsl;
	}
    
    
    function delete($kode){
		$hsl=$this->db->query("DELETE from kategori where id_kategori='$kode'");
		return $hsl;
	}

    function update($kode,$nama,$status){
		$hsl=$this->db->query("UPDATE kategori set nama='$nama', status = '$status' where id_kategori='$kode'");
		return $hsl;
	}
	

}
