<?php

namespace Modules\User\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    public function disable($userId)
    {
        $user = User::findOrFail($userId);
        $user->update(['is_enabled' => false]);
        return response()->json($user);
    }

    public function enable($userId)
    {
        $user = User::findOrFail($userId);
        $user->update(['is_enabled' => true]);
        return response()->json($user);
    }
}
