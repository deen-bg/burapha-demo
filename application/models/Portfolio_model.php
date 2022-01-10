<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_model extends CI_Model {

// 
    public function fetchAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_portfolio');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function create($name)
    {
        date_default_timezone_set("Asia/Bangkok");
        $cur_date = date("Y-m-d H:i:s");
    
        $data = array(
            'name'          => $name,
            'create_date'   => $cur_date,
            'update_date'   => $cur_date,
            'is_active'     => '1' 
        );
        $this->db->insert('tbl_portfolio', $data);
        $last_id = $this->db->insert_id();
        $result =$this->db->affected_rows(); ///1
        if ($result > 0) {
            return $last_id;
           
        } else {
            return FALSE;  //0
        }
    }

   
    

    // public function insertPortfolioImg($dataArr2,$last_pid)
    // {
    //     $i = 1;
    //     date_default_timezone_set("Asia/Bangkok");
    //     $cur_date = date("Y-m-d H:i:s");
        
    //     // foreach($dataArr2 as $val) {
    //         $dataToSave = array(
    //             'portfolio_id'    => $last_pid,
    //             'img_cover'      => $val['image_cover'],
    //             'create_date'   => $cur_date
    //         );
    //        $this->db->insert('tbl_portfolio_image', $dataToSave);
            
    //     //  }
    //     return $this->db->affected_rows() > 0;
    // }


    // public function update_portfolio($arr){
        
    //     date_default_timezone_set("Asia/Bangkok");
    //     $cur_date = date("Y-m-d H:i:s");
        
    //     $data = array(
    //         'name'          => $arr['name'],
    //         'short_dsc'     => $arr['short_dsc'],
    //         'dsc'           => $arr['dsc'],
    //         'price'         => $arr['price'],
    //         'update_date'   => $cur_date
            
    //     );

    //     $this->db->where('id', $arr['portfolio_id']);
    //     $this->db->update('tbl_portfolio', $data);
    //     return $this->db->affected_rows(); 
    // }


    // public function updatefileUpload($dataArr)
    // {
    //     date_default_timezone_set("Asia/Bangkok");
    //     $cur_date = date("Y-m-d H:i:s");
        
    //     $data = array(
    //         'img_cover'     => $dataArr['image_cover'],
    //         'update_date'   => $cur_date
    //     );
    //     $this->db->where('id', $dataArr['pd_id']);
    //     $this->db->update('tbl_portfolio', $data);
    //     return $this->db->affected_rows();
    // }


   


}


?>