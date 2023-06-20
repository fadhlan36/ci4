<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data=[
            'title'=>'Home'
        ];
        
        return view('pages/home',$data);
    
    }
    public function about()
    {
        $data=[
            'title'=>'About'
        ];
       
        return view('pages/about',$data);
   
        
    }
    public function contact()
    {
        $data=[
            'title'=>'Contact Us'
            
        ];
        
       
        return view('pages/contact',$data);
   
        
    }

    public function faq()
    {
        $data=[
            'title'=>'faq',
            'quest'=>[

                'question'=>'Apa itu CodeIgniter',
                'answer'=>'CodoIgniter adalah framework php'
            ],
            [
                'question'=>'Siapa yang membuat CodeIgniter',
                'answer'=>'CI dibuat oleh Ellislab'

            ],
            [
                'question'=>'CodeIgniter berapakah yang anda gunakan pada latihan ini',
                'answer'=>'CodeIgniter 4'
            ]
        ];
        
       
        return view('pages/faq',$data);
   
        
    }
    
}
