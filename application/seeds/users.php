<?php // file: /application/seeds/users.php

class Seed_Users extends \S2\Seed {

    public function grow()
    {
        $user = new User;
        $user->username = 'test';
        $user->first_name = 'Test';
        $user->last_name = 'Test';
        $user->email = 'test@gmail.com';
        $user->active = '1';
        $user->hash = Hash::make('test');
        $user->password = Hash::make('123456');
        $user->about = "I'm only dreaming";
        $user->dob = '1974-11-16';
        $user->save();
    }

    // This is optional. It lets you specify the order each seed is grown.
    // Seeds with a lower number are grown first.
    public function order()
    {
        return 100;
    }

}