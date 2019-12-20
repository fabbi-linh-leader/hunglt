 <?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;

class User1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Product[]|\Illuminate\Database\Eloquent\Collection
     */
     public function index()
    {
        $user = User::all();
    
        return UserResource::collection($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Product|\Illuminate\Database\Eloquent\Model
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return new user($user);
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Product
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Product $product
     * @return bool
     */
    public function update(Request $request, User $user)
    {
        return $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}