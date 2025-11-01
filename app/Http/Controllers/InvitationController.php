<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index() {
        return view('invitations.fitri_and_dimas.index');
    }
}
