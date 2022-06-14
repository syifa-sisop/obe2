<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    function select($data)
    {
        //$item = array('username'=>$data['username'], 'password'=>md5($data['password']));
        $item2 = array('email'=>$data['email'], 'password'=>md5($data['password']));
        $result = $this->db
                        ->where($item2)
                        //->or_where($item2)
                        ->get('user');

        if($result->num_rows()>0){
            $user = $result->result()[0];
            $this->session->set_userdata('email', $user->email);
            if($user->level=="1"){
                $datauser = $this->db->get_where('admin', array('id_user'=>$user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;
                $this->session->set_userdata('sessionuser',$datauser);
            }elseif($user->level=="2")
            {
                $datauser = $this->db->get_where('profil', array('id_user'=>$user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;   
                $this->session->set_userdata('sessionuser',$datauser);
            }elseif($user->level=="3")
            {
                $datauser = $this->db->get_where('dosen', array('id_user'=>$user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;   
                $this->session->set_userdata('sessionuser',$datauser);
            }elseif($user->level=="4")
            {
                $datauser = $this->db->get_where('mahasiswa', array('id_user'=>$user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;   
                $this->session->set_userdata('sessionuser',$datauser);
            }
        }else
            return $result->result();
    } 

    function cek_status($data)   
    {
       // $item = array('username'=>$data['username'], 'password'=>md5($data['password']));
        $item2 = array('email'=>$data['email'], 'password'=>md5($data['password']));
        $result = $this->db
                        ->where($item2)
                        //->or_where($item2)
                        ->get('user');
                        
        if($result->num_rows()>0){
            $user = $result->result()[0];
            $this->session->set_userdata('email', $user->email);
            if($user->status=="Aktif"){
                $datauser['status'] = $user->status;
                return $datauser;
                $this->session->set_userdata('sessionuser',$datauser);
            }elseif($user->status=="Tidak")
            {
                $datauser['status'] = $user->status;
                return $datauser;   
                $this->session->set_userdata('sessionuser',$datauser);
            }
        }else
            return $result->result();
    } 

    //Start: method tambahan untuk reset code  
    public function getUserInfo($id_user)
    {
        $q = $this->db->get_where('user', array('id_user' => $id_user), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        } else {
            error_log('no user found getUserInfo(' . $id_user . ')');
            return false;
        }
    }

    public function getUserInfoByEmail($email)
    {
        $q = $this->db->get_where('user', array('email' => $email), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        }
    }

    public function insertToken($user_id)
    {
        $token = substr(sha1(rand()), 0, 30);
        $date = date('Y-m-d');

        $string = array(
            'token' => $token,
            'user_id' => $user_id,
            'created' => $date
        );
        $query = $this->db->insert_string('tokens', $string);
        $this->db->query($query);
        return $token . $user_id;
    }

    public function isTokenValid($token)
    {
        $tkn = substr($token, 0, 30);
        $uid = substr($token, 30);

        $q = $this->db->get_where('tokens', array(
            'tokens.token' => $tkn,
            'tokens.user_id' => $uid
        ), 1);

        if ($this->db->affected_rows() > 0) {
            $row = $q->row();

            $created = $row->created;
            $createdTS = strtotime($created);
            $today = date('Y-m-d');
            $todayTS = strtotime($today);

            if ($createdTS != $todayTS) {
                return false;
            }

            $user_info = $this->getUserInfo($row->user_id);
            return $user_info;
        } else {
            return false;
        }
    }

    public function updatePassword($post)
    {
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', array('password' => $post['password']));
        return true;
    }
    //End: method tambahan untuk reset code
}