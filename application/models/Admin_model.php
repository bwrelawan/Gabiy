<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {
    
    //data customer
    public function tampil_data_customer() {
        $hasil = $this->db->query("SELECT * FROM customer");
        return $hasil;
    }
    public function tambah_data_customer($customer_id, $username, $name, $address, $contact_person, $email, $ip_address) {
        $hasil = $this->db->query("INSERT INTO customer (customer_id,username,name,address,contact_person,email,ip_address) VALUES ('$customer_id','$username','$name','$address','$contact_person','$email','$ip_address')");
        return $hasil;
    }
    public function edit_data_customer($customer_id, $username, $name, $address, $contact_person, $email, $ip_address) {
        $hasil = $this->db->query("UPDATE customer SET username='$username',name='$name',address='$address',contact_person='$contact_person',email='$email',ip_address='$ip_address' WHERE customer_id='$customer_id'");
        return $hasil;
    }
    public function hapus_data($customer_id) {
        $hasil = $this->db->query("DELETE FROM customer WHERE customer_id='$customer_id'");
        return $hasil;
    }
    // hapus data user
    public function hapus_data_user($username) {
        /*$hasil=$this->db->query("DELETE FROM users WHERE username='$username'");
         return $hasil;*/
        $this->db->where('username', $username);
        return $this->db->delete('users');
    }
    //data device
    public function tampil_data_device() {
        $hasil = $this->db->query("SELECT * FROM customer_device");
        return $hasil;
    }
    public function tambah_data_device($device_alias, $pin, $description, $keyword, $customer_id, $device_id) {
        $hasil = $this->db->query("INSERT INTO customer_device (device_alias,pin,description,keyword,customer_id,device_id) VALUES ('$device_alias','$pin','$description','$keyword','$customer_id','$device_id')");
        return $hasil;
    }
    public function edit_data_device($id, $device_alias, $pin, $description, $keyword, $customer_id, $device_id) {
        $hasil = $this->db->query("UPDATE customer_device SET device_alias='$device_alias',pin='$pin',description='$description',keyword='$keyword',customer_id='$customer_id',device_id='$device_id' WHERE id='$id'");
        return $hasil;
    }
    public function hapus_data_device($id) {
        $hasil = $this->db->query("DELETE FROM customer_device WHERE id='$id'");
        return $hasil;
    }
    public function tampil_data_users() {
        $hasil = $this->db->query("SELECT * FROM users WHERE level='2' ORDER BY tanggal_daftar DESC");
        return $hasil;
    }
    public function tambah_data_users() {
      $username       = $this->input->post('username');
      $password       = md5($this->input->post('password'));
      $level          = $this->input->post('level');
      $tanggal_daftar = date("Y-m-d H:i:s");
      $token          = $this->input->post('token');
      $data = array(
        "username"       => $username,
        "password"       => $password,
        "level"          => $level,
        "tanggal_daftar" => $password,
        "token"          => $token
      );
      return $this->db->insert('users',$data);

        //$hasil = $this->db->query("INSERT INTO users (username,password,level,tanggal_daftar,token) VALUES ('$username', '$password', '$level', '$tanggal_daftar','$token')");
        //return $hasil;
    }
    public function cek_username($username) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
