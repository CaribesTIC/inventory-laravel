<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Mark;
use Modules\Product\Http\Services\Mark\IndexMarkService;
use Modules\Product\Http\Resources\MarkResource;


class MarkController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        //if (Auth::user()->isAdmin()) {
            return IndexMarkService::execute($request);            
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Modules\Product\Http\Resources\MarkResource | \Illuminate\Http\Response
     */
    public function show(Mark $mark): MarkResource | Response
    {
        //if (Auth::user()->isAdmin()) {
          return new MarkResource($mark);
        //}
        //return  response()->json(["message" => "Forbidden"], 403);
    }
    
 /*   public function index()
    {
        $marks = Mark::get((object)['type'=>'list']);
        return view('mark.index', compact('marks'));
    }
    
    public function get(Request $request)
    {
        return Mark::get($request);
    }

    public function create()
    {        
        $select = (object)['display' => true]; 
        return view('mark.create', compact('select'));
    }
     
    public function show(Request $request, $id)
    {
        $request->type = 'regist';
        $request->value = $id;                  
        $mark = json_decode(Mark::get($request));              
        return view('mark.show', compact('mark'));
    }

    public function edit(Request $request, $id)
    {        
        $request->type = 'regist';
        $request->value = $id;                  
        $mark = json_decode(Mark::get($request));              
        return view('mark.edit', compact('mark'));
    }   

    public function regist(Request $request)
    {
        $request->id          = $request->id          ? $request->id          : 0;
        $request->producer_id = $request->producer_id ? $request->producer_id : 1;        
        $response = Mark::regist($request);        
        if ($response[0]=='t')
            $msgType = 'success';
        elseif ($response[0]=='f')
            $msgType = 'error';     
        return redirect()->route('mark.index')->with($msgType, $response[1]);        
    }

    public function destroy($id)
    {
        $response = Mark::remove($id);
        if ($response[0]=='t')
            $msgType = 'success';
        elseif ($response[0]=='f')
            $msgType = 'error';       
        return redirect()->route('mark.index')->with($msgType, $response[1]);
    }*/
}
