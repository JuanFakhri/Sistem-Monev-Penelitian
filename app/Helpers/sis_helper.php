<?php 


use App\Models\AuthModel;

function allow($akses){
    $session = \Config\Services::session();
    $user = $session->get('username');
    $table = 'user';
    $model= new AuthModel();
    $row = $model ->get_data_login($user,$table);
    if($row != null){
        if($row->akses == $akses){
            return true;
        }else{
            return false;
        }
        
    }
}
