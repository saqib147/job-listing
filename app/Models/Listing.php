<?php

namespace App\Models;

class Listing{
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing 1',
                'description' => 'Description for listing 1',
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'Description for listing 2',
            ],
            [
                'id' => 3,
                'title' => 'Listing 3',
                'description' => 'Description for listing 3',
            ],
        ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
        return null;
    }
}