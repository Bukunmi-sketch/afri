<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Product;
use Illuminate\Auth\Access\HandlesAuthorization;

class Productpolicy
{
    use HandlesAuthorization;

    /**
     * check if the authenticated user can delete the task instance.
     *@param User $user
     *@param Product $product
     * @return bool
     */
    public function destroy(User $user, Product $product){
        return $user->id === $product->user_id;
    }
  
}
