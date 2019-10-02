<?php


namespace App\Repositories;


use App\User;

class UserBaseRepository extends BaseRepository
{

    public function setModel()
    {
       return User::class;
    }
}
