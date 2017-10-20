<?php

namespace phpUnitTutorial;

class Statistics 
{
    public function printGuessStatistics($candidate, $count) {
        if ($count == 0 || $count=='') {
            $number = "no";
            $verb = "are";
            $pluralModifier = "s";
        } elseif ($count == 1) {
            $number = "1";
            $verb = "is";
            $pluralModifier = "";
        } else {
            $number = $count;
            $verb = "are";
            $pluralModifier = "s";
        }
        $sentdata=array('result'=>"There ".$verb." ". $number." ". $candidate."".$pluralModifier);
        return $sentdata;
    }
    public  function getData(Request $request){
        $val=\Validator::make($request->all(),['str'=>'required','number'=>'required']);
        if($val->fails()){return redirect()->back();}
        $candidate=$request['str'];
        $count=$request['number'];
        return redirect('/phptest/'.$candidate.'/'.$count);
    }

}
