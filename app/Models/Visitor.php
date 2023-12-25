<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Visitor extends Model
{
    use HasFactory;
    private static $visitor, $imageName, $image, $directory, $imageUrl;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/visitor-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;


    }

    public static function newVisitor($request)
    {
        self::$visitor = new Visitor();
        self::$visitor->name = $request->name;
        self::$visitor->email = $request->email;
        self::$visitor->password = bcrypt($request->password);
        self::$visitor->save();
        return self::$visitor;
    }

    public static function updateVisitorProfile($request, $id)
    {


        self::$visitor = Visitor::find($id);



        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'uploads/visitor-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$visitor->image = self::$directory.self::$imageName;


        self::$visitor->name =  $request->name;
        self::$visitor->email = $request->email;
        self::$visitor->password = $request->password;
        self::$visitor->mobile = $request->mobile;
        self::$visitor->nid = $request->nid;
        self::$visitor->date_of_birth = $request->date_of_birth;
        self::$visitor->save();

    }
}
