<?php

namespace App\Http\Controllers\Home;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return redirect()->route('home_page');
    }

    public function get(Request $request)
    {
        $usersWithRoles = User::join('roles', 'roles.id', '=', 'users.role_id')
            ->select()
            ->addSelect('users.name as name')
            ->addSelect('users.id as id')
            ->addSelect('roles.name as role')
            ->orderBy('users.id');

        $this->addWhereUsernameToBuilder($usersWithRoles, $request->name ?? '');

        return view('home.index', [
            'viewUsers' => $usersWithRoles->paginate(5),
        ]);
    }

    private function addWhereUsernameToBuilder(Builder $usersWithRoles, string $usernameString = '')
    {
        $trimmedUsernameString = trim($usernameString);

        if ($this->isNameRequestValid($trimmedUsernameString) === false) {
            return;
        }

        $usersWithRoles->where(function($query) use ($trimmedUsernameString) {
            $query->where('users.name', 'LIKE', "%{$trimmedUsernameString}%");
            $query->orWhere('users.email', '=', "$trimmedUsernameString");
        });
    }

    private function isNameRequestValid(string $name) : bool
    {
        if ($name === '') {
            return false;
        }

        $userInput = [
            'name' => trim($name)
        ];

        $validatorResult = Validator::make($userInput, [
            'name' => 'required|email|exists:App\User,email'
        ]);

        if ($validatorResult->passes()) {
            return true;
        }

        $validatorResult = Validator::make($userInput, [
            'name' => 'required|max:255'
        ]);

        return $validatorResult->passes();
    }

}
