<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
   protected $fillable = [
      'title',
      'content',
      'author',
      'date',
      'slug'
   ];

   static public function genSlug($string)
   {
      $baseSlug = Str::slug($string, '-');
      $slug = $baseSlug;
      $i = 1;

      while(self::where('slug', $slug)->first()){
         $slug = $baseSlug . "-" . $i;
         $i++;
      }

      return $slug;
   }

   public function getRouteKeyName()
   {
      return 'slug';
   }
}
