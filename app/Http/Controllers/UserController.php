<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Transformers\UserTransformer;
use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class UserController extends Controller
{
    /**
     * @var Manager
     */
    private $fractal;

    /**
     * @var UserTransformer
     */
    private $userTransformer;

    function __construct(Manager $fractal, UserTransformer $userTransformer)
    {
        $this->fractal = $fractal;
        $this->userTransformer = $userTransformer;
    }

    public function index(Request $request)
    {
        $users = User::all(); // Get users from DB
        $users = new Collection($users, $this->userTransformer); // Create a resource collection transformer
        $users = $this->fractal->createData($users); // Transform data
        return $users->toArray(); // Get transformed array of data
    }

//    public function findById($id){
//        $user = User::find($id);
//        $user = new Item($user, $this->userTransformer);
//        $user = $this->fractal->createData($user); // Transform data
//        return $user;
//    }

    public function show($id)
    {
        $user = User::find($id);
        return (new UserTransformer())->transformWithoutAddress($user);
    }
    public function showAdress($id)
    {
        $user = User::find($id);
        return (new UserTransformer())->transformWithAddress($user);
    }
}
