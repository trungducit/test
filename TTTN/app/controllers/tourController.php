<?php

class toursController extends BaseController{

    public function  TimSanpham(){
        $data=  Input::all();
        if(Input::get('text-search')==1 ){
            $searchtour = DB::table("tbl_tour")
                ->Where("tentour", "like", "%{$data['text-search']}%")
                ->get();
            return View::make("searchtour")->with("tour", $searchtour);

        }
    }
}



