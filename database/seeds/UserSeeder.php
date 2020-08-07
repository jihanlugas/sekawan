<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Userdetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aarUsers = [
            [
                'name' => 'Madina Milatil Arta',
                'invitation_cd' => 'madina',
            ],
            [
                'name' => 'Lita Desrita',
                'invitation_cd' => 'litad',
            ],
            [
                'name' => 'Dewi',
                'invitation_cd' => 'dewif',
            ],
            [
                'name' => 'Jihan Lugas',
                'invitation_cd' => 'jihan',
            ],
        ];

        $mUser = new User();
        $mUser->name = 'Admin';
        $mUser->email = str_replace(' ', '', 'admin' . '@gmail.com');
        $mUser->is_complete = '1';
        $mUser->password = Hash::make('123456');
        $mUser->invitation_cd = Str::random(5);
        $mUser->save();

        $request_by = 0;
        foreach ($aarUsers as $i => $user) {
            if ($i > 5)
                break;

            $mUser = new User();
            $mUser->name = $user['name'];
            $mUser->email = strtolower(str_replace(' ', '', $user['name'] . '@gmail.com'));
            $mUser->is_complete = '1';
            $mUser->password = Hash::make('123456');
            $mUser->request_by = $request_by;
//            $mUser->invitation_cd = Str::random(5);
            $mUser->invitation_cd = strtolower($user['invitation_cd']);
            $mUser->save();

            $request_by = $mUser->id;
        }

        $mUsers = User::all();
        foreach ($mUsers as $mUser) {
            $mUserdetail = new Userdetail();
            $mUserdetail->user_id = $mUser->id;
            $mUserdetail->bank_id = rand(1, 10);
            $mUserdetail->bank_account_number = rand(1000000000, 9999999999);
            $mUserdetail->bank_account_name = $mUser->name;
            $mUserdetail->birth_dt = '1996-07-02';
            $mUserdetail->save();
        }
    }
}
