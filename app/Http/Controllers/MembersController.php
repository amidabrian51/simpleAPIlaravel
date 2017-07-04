<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;



class MembersController extends Controller
{
  public function index()
  {
    //1. We are returning all members!
    //2. No easy way to attach meta data.
    //3. They are seeing the database structure. Not great.
    //4. What happens if we change the fields.
    //5. No way to signal headers/response codes
    $member = Member::all();//not a great idea.
    return response()->json([
      'data'=> $member->toArray(),
    ], 200);
  }

  public function show($id)
  {
    $member = Member::find($id);

    if (! $member) {
      return response()->json([
        'error' => ['Member does not exist']
      ], 404);
    }
    return response()->json([
      'data'=> $member->toArray(),
    ], 200);
  }
}
