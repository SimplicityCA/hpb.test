<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePicture;
use App\SiteText;
use App\Http\Requests\StoreClient;
use App\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\BecomeClient;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function banner()
    {

    	$image = HomePicture::where('location','CLIENTS')->first();
    	
    	return $image;

    }

    public function getNearlocations(Request $request){
        $current_location=$request->center;
        $orig_lat=$current_location['lat'];
        $orig_lon=$current_location['lng'];
        $return=[];       
        $locale = DB::table('local')
        ->select(DB::raw("*,( 3959 * acos( cos( radians($orig_lat) ) * cos( radians( latitude ) ) * 
        cos( radians( longitude ) - radians($orig_lon) ) + sin( radians($orig_lat) ) * 
        sin( radians( latitude ) ) ) ) AS distance"))
        ->orderBy('distance')->where('active',1)->limit(50);
        if(count($request->types)>0){
          foreach($request->types as $type){
            $locale= $locale->where('type_id', $type);
          } 
        }
        $locale=$locale->get();

        foreach($locale as $k => $local){
            $return[$k]['distance'] = $local->distance;
            $return[$k]['position']=['lat'=>$local->latitude,'lng'=>$local->longitude];
            $return[$k]['local']=['website'=>$local->website,'name'=>$local->name,'phone'=>$local->phone, 'cellphone'=>$local->cellphone,'address'=>$local->address];
        }

        return json_encode($return);

    }

    public function description()
    {

    	$image = SiteText::where('location','CLIENTS')->first();
    	
    	return $image;

    }

    public function store(StoreClient $request)
    {

      try{
        $client = new Client();
        $client->ruc = $request->ruc;
        $client->store_name = $request->storeName;
        $client->name = $request->name;
        $client->last_name = $request->lastName;
        $client->city = $request->city;
        $client->address = $request->address;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->message = $request->message;

        if($client->save())
        {
          Mail::to('esteban.davila@importadoradavila.com')->send(new BecomeClient($request));
        }   
      }     
      catch(\Exception $e){
          return $e;
          }
      return $request;

    }
}
