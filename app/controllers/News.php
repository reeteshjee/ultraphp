<?php

class News {
    
    public function index() {
        $data['list'] = array(
            array(
                'id' => 1,
                'title' => 'Easy Signature Generator using CSS and jQuery'
            ),
            array(
                'id' => 2,
                'title' => 'Build a Simple Password Manager App Using jQuery'
            ),
            array(
                'id' => 3,
                'title' => 'Sending Free Emails Using Google Apps Script'
            )
        );
        json($data,200);
    }

    public function show($params){
        $data['details'] = array(
            'id' => $params[0],
            'title' => 'Easy Signature Generator using CSS and jQuery',
            'url' => 'https://youthsforum.com/2025/01/easy-signature-generator-using-css-and-jquery/',
            'image' => 'https://youthsforum.com/wp-content/uploads/2025/01/signature-generator-tool.png',
            'date' => 'January 23, 2025',
            'summary' => 'In today’s digital era, personalization is king. Whether you’re signing off an email, designing a virtual business card, or simply adding a unique touch to your content, a signature can go a long way. This article introduces a Signature Generator, a creative tool that helps you transform your name into a visually appealing signature.'
        );
        json($data,200);
    }

    public function store($params){
        json(['success'=>true,'message'=>'Stored']);
    }

}
