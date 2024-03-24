<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
   public function index()
   {
        $tweets = Tweet::all(); // hier werden alle Tweets zurück gegeben
        return  $tweets;
   }

   public function show($id) // Hier wird nur der einzelne Tweet zurückgegeben.
   {
    return Tweet::find($id);
   }


   // der Store ist dafür da, das man ein neuer Tweet erstellen kann. 
   public function store(Request $request){
      $newTweet = Tweet::create([
          'titel' => $request->titel,
          'tweet_text' => $request->tweet_text,
          
      ]);

   }

   public function distroy($id){
      $tweet = Tweet::findOrFail($id);
      $tweet->delete();
      return response()->json(['message' => 'Tweet erfolgreich gelöscht'], 200);
   }

   public function update(Request $request){

      Tweet::where('id', $request->id)->update([
         'titel' => $request->titel,
         'tweet_text' => $request->tweet_text
      ]);

      return response()->json(['message' => 'Erfolgreich upgedated'], 200);
   
   }
}




