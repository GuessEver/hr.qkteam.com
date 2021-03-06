<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:view,member');
    }

    public function index(\App\Models\Member $member)
    {
        return view('member.item', [
            'member' => $member,
            'logs'   => $member->logs()->latest()->get(),
        ]);
    }
}
