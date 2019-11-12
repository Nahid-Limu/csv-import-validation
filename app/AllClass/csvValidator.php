<?php

namespace App\AllClass;

use DB;
use Auth;
use Illuminate\Support\Facades\Validator;


Class csvValidator{ 

    public static function validate($request)
    {
      // dd($request);
    
    $rules = [];
    $rules['first_name'] = ['required','max:4', new specialCharValidation];
    $rules['last_name'] = ['nullable','max:4', new specialCharValidation];
    $rules['email'] = ['required','max:20', new specialCharValidation];
    // $rules['yobi1'] = ['nullable',new specialCharValidation,'numeric','bail','digits_between:0,9'];

    $message=[];    
    $message['required']=':attribute is required';
    $message['max']=':attribute must be less than :max digits';
    
    // $message['name.max']=':attributeは変更できません。';
    // $message['code.max']=':attributeは自動採番のため入力出来ません。';
    // $message['numeric']=':attributeの入力形式が間違っています。';
    // $message['digits_between']=':attributeは9桁以下で入力してください。';
    
//    $attributes=[];        
//  if ($name == '印刷種') {
//      $attributes = [
//     'name' => '種別',    
//     'code' => '印刷種コード',
//     'yobi2' => '印刷種名',
//    ];
//  }
    
//   if ($name == '箔仕様') {
//      $attributes = [
//     'code' => '箔仕様コード',
//     'name' => '種別',
//     'yobi1' => '目標見積利益率',
//     'yobi2' => '箔仕様名',
//    ];
//  }  

//  if ($name == '版種') {
//      $attributes = [
//     'code' => '版種コード',
//     'name' => '種別',
//     'yobi2' => '版種名',
//    ];
//  }  
  
//   if ($name == '工程名') {
//      $attributes = [
//     'code' => '工程コード',
//     'name' => '種別',
//     'yobi2' => '工程名',
//    ];
//  }  

//  if ($name == '機種') {
//      $attributes = [
//     'code' => '機種コード',
//     'name' => '種別',
//     'yobi2' => '機種名',
//    ];
//  }

//  if ($name == 'ステータス') {
//      $attributes = [
//     'code' => 'ステータスコード',
//     'name' => '種別',
//     'yobi2' => 'ステータス名',
//    ];
//  }
  
    $validate=$request;
    // $request['name']=$name;
    // $request['code']=$code;

    // session()->put('M7EditData',$request);
    // session()->put('M7CreateData',$validate);          

    $validator = Validator::make($validate,$rules,$message);    
    return $validator;    
    }
}