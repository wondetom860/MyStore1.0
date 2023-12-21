<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostsController extends Controller
{
    public $contacts = [
        [
            "name"=> "Wonde",
            "propic" => 'profile-picture.jpeg',
            'date_of_birth' => 18987676,
            'company' => 'ETDU',
            'role'=> 'Programmer',
        ],
        [
            "name"=> "Belete",
            "propic" => 'pr1.jpg',
            'date_of_birth' => 19675463,
            'company' => 'ETDU',
            'role'=> 'Junior Programmer',
        ],
        [
            "name"=> "Ahmed",
            "propic" => 'team-image-2.jpeg',
            'date_of_birth' => 17895478,
            'company' => 'ETDU',
            'role'=> 'Data Analyst',
        ]
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("posts.index",['contacts'=>$this->contacts]);
        // return "This is text frpm posts index page";
    }

    public function about($name){
        return view('posts.about',['profileData'=>$this->getProfileData($name)]);
    }

    private function getProfileData($name){
        $profileData = NULL;
        foreach($this->contacts as $contact){
            if(isset($contact['name']) && $contact['name'] == $name){
                $profileData = $contact;
            }
        }
        return $profileData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)// create equivalent
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//view equivalent
    {
        return "Showing post with ID:{$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//update equivalent
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//delete equivalent
    {
        //
    }
}
