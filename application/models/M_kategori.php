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

    function get_category_article(){
		$hsl=$this->db->query("SELECT * from kategori Where status ='article' ");
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
