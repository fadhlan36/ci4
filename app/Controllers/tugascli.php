<?php

namespace App\Controllers;

class tugascli extends BaseController
{
    public function index()
    {
        $modelMember= new \App\Models\modelMember();
        $login= $this->request->getPost('login');
        if($login){
            $member_username=$this->request->getPost('member_username');
            $member_password=$this->request->getPost('member_password');

            if($member_username=='' or $member_password==''){
                $err="Silahkan login dengan benar bang";
            }

            if(empty($err)){
                $dataMember=$modelMember->where("member_username", $member_username)->first();
                if($dataMember['member_password'] != $member_password){
                    $err="Password salah";
                }

            }

            if(empty($err)){
                $dataSesi=[
                    'member_id'=> $dataMember['member_id'],
                    'member_username' => $dataMember['member_username'],
                    'member_password' => $dataMember['member_password'],
                ];
                session()->set($dataSesi);
                return redirect()->to("dashboard");

            }
            if($err){
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");

            }
        }
         return view('tugasCLI\login');
        
    }
    
    
}
