<?php


namespace App\Transformers;

use App\Models\User;
use League\Fractal\TransformerAbstract;


class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'name' => $user->name,
            'email' => $user->email
        ];
    }

    // lấy name và email ko lấy address
    public function transformWithoutAddress(User $user)
    {
        return [
            'name' => $user->name,
            'email' => $user->email,
        ];
    }

    //lấy name email và cả address
    public function transformWithAddress(User $user)
    {
        $data = ['address' => $user->address];
        return array_merge($data, $this->transformWithoutAddress($user));
    }
}
