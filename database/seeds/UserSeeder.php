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
                'name' => 'Lawanna Kelm',
            ],
            [
                'name' => 'Jeffrey Diebold',
            ],
            [
                'name' => 'Rae Tenny',
            ],
            [
                'name' => 'Kathrin Stjean',
            ],
            [
                'name' => 'Tatyana Alonso',
            ],
            [
                'name' => 'Joy Baril',
            ],
            [
                'name' => 'Stephaine Ehrhardt',
            ],
            [
                'name' => 'Christina Bjelland',
            ],
            [
                'name' => 'Kathyrn Moreton',
            ],
            [
                'name' => 'Kera Kremer',
            ],
            [
                'name' => 'Mattie Bornstein',
            ],
            [
                'name' => 'Nathan Bean',
            ],
            [
                'name' => 'Felecia Saladino',
            ],
            [
                'name' => 'Numbers Mijangos',
            ],
            [
                'name' => 'Stacia Buzard',
            ],
            [
                'name' => 'Fausto Wiliams',
            ],
            [
                'name' => 'Renna Kinsman',
            ],
            [
                'name' => 'Nathaniel Zucker',
            ],
            [
                'name' => 'Tabatha Mckeen',
            ],
            [
                'name' => 'Eula Lino',
            ],
            [
                'name' => 'Mellissa Ullman',
            ],
            [
                'name' => 'Milan Keala',
            ],
            [
                'name' => 'Jc Peay',
            ],
            [
                'name' => 'Keturah Amburn',
            ],
            [
                'name' => 'Lloyd Brault',
            ],
            [
                'name' => 'Luciano Mumme',
            ],
            [
                'name' => 'Kip Duclos',
            ],
            [
                'name' => 'Ja Stainback',
            ],
            [
                'name' => 'Daysi Elamin',
            ],
            [
                'name' => 'Carmelia Perret',
            ],
            [
                'name' => 'Laura Heidenreich',
            ],
            [
                'name' => 'Hassan Lahman',
            ],
            [
                'name' => 'Kenya Rohe',
            ],
            [
                'name' => 'Etta Bizzell',
            ],
            [
                'name' => 'Sanford Ingalls',
            ],
            [
                'name' => 'Aiko Valez',
            ],
            [
                'name' => 'Trula Salvetti',
            ],
            [
                'name' => 'Cassaundra Pritts',
            ],
            [
                'name' => 'Luigi Simms',
            ],
            [
                'name' => 'Fleta Sigala',
            ],
            [
                'name' => 'Pia Rangel',
            ],
            [
                'name' => 'Azalee Condit',
            ],
            [
                'name' => 'Almeda Asmussen',
            ],
            [
                'name' => 'Tory Moitoso',
            ],
            [
                'name' => 'Neville Wooster',
            ],
            [
                'name' => 'Jana Crichton',
            ],
            [
                'name' => 'Elsy Low',
            ],
            [
                'name' => 'Corrie Guillotte',
            ],
            [
                'name' => 'Kathlyn Hannah',
            ],
            [
                'name' => 'Bee Huffine',
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
            if ($i > 10)
                break;

            $mUser = new User();
            $mUser->name = $user['name'];
            $mUser->email = strtolower(str_replace(' ', '', $user['name'] . '@gmail.com'));
            $mUser->is_complete = '1';
            $mUser->password = Hash::make('123456');
            $mUser->request_by = $request_by;
            $mUser->invitation_cd = Str::random(5);
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
