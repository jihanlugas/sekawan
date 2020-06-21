<?php

use Illuminate\Database\Seeder;
use App\User;
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
                'birth_dt' => '1946-04-24'
            ],
            [
                'name' => 'Jeffrey Diebold',
                'birth_dt' => '1949-08-11'
            ],
            [
                'name' => 'Rae Tenny',
                'birth_dt' => '1949-09-07'
            ],
            [
                'name' => 'Kathrin Stjean',
                'birth_dt' => '1952-12-17'
            ],

            [
                'name' => 'Tatyana Alonso',
                'birth_dt' => '1956-09-18'
            ],
            [
                'name' => 'Joy Baril',
                'birth_dt' => '1956-10-29'
            ],
            [
                'name' => 'Stephaine Ehrhardt',
                'birth_dt' => '1958-03-19'
            ],
            [
                'name' => 'Christina Bjelland',
                'birth_dt' => '1960-08-19'
            ],

            [
                'name' => 'Kathyrn Moreton',
                'birth_dt' => '1961-09-08'
            ],
            [
                'name' => 'Kera Kremer',
                'birth_dt' => '1964-01-15'
            ],
            [
                'name' => 'Mattie Bornstein',
                'birth_dt' => '1968-01-07'
            ],
            [
                'name' => 'Nathan Bean',
                'birth_dt' => '1968-04-06'
            ],
            [
                'name' => 'Felecia Saladino',
                'birth_dt' => '1973-12-28'
            ],
            [
                'name' => 'Numbers Mijangos',
                'birth_dt' => '1976-05-07'
            ],
            [
                'name' => 'Stacia Buzard',
                'birth_dt' => '1977-03-06'
            ],
            [
                'name' => 'Fausto Wiliams',
                'birth_dt' => '1977-04-05'
            ],
            [
                'name' => 'Renna Kinsman',
                'birth_dt' => '1979-04-10'
            ],
            [
                'name' => 'Nathaniel Zucker',
                'birth_dt' => '1984-05-08'
            ],
            [
                'name' => 'Tabatha Mckeen',
                'birth_dt' => '1986-05-11'
            ],
            [
                'name' => 'Eula Lino',
                'birth_dt' => '1987-03-08'
            ],
            [
                'name' => 'Mellissa Ullman',
                'birth_dt' => '1987-11-09'
            ],
            [
                'name' => 'Milan Keala',
                'birth_dt' => '1988-06-09'
            ],
            [
                'name' => 'Jc Peay',
                'birth_dt' => '1988-09-30'
            ],
            [
                'name' => 'Keturah Amburn',
                'birth_dt' => '1991-06-02'
            ],
            [
                'name' => 'Lloyd Brault',
                'birth_dt' => '1994-04-15'
            ],
            [
                'name' => 'Luciano Mumme',
                'birth_dt' => '1946-05-25'
            ],
            [
                'name' => 'Kip Duclos',
                'birth_dt' => '1947-09-21'
            ],
            [
                'name' => 'Ja Stainback',
                'birth_dt' => '1955-07-04'
            ],
            [
                'name' => 'Daysi Elamin',
                'birth_dt' => '1956-10-04'
            ],
            [
                'name' => 'Carmelia Perret',
                'birth_dt' => '1967-07-22'
            ],
            [
                'name' => 'Laura Heidenreich',
                'birth_dt' => '1968-02-17'
            ],
            [
                'name' => 'Hassan Lahman',
                'birth_dt' => '1968-05-26'
            ],
            [
                'name' => 'Kenya Rohe',
                'birth_dt' => '1968-07-03'
            ],
            [
                'name' => 'Etta Bizzell',
                'birth_dt' => '1969-08-18'
            ],
            [
                'name' => 'Sanford Ingalls',
                'birth_dt' => '1970-10-31'
            ],
            [
                'name' => 'Aiko Valez',
                'birth_dt' => '1971-01-14'
            ],
            [
                'name' => 'Trula Salvetti',
                'birth_dt' => '1971-06-21'
            ],
            [
                'name' => 'Cassaundra Pritts',
                'birth_dt' => '1974-01-07'
            ],
            [
                'name' => 'Luigi Simms',
                'birth_dt' => '1981-09-16'
            ],
            [
                'name' => 'Fleta Sigala',
                'birth_dt' => '1982-07-14'
            ],
            [
                'name' => 'Pia Rangel',
                'birth_dt' => '1983-03-23'
            ],
            [
                'name' => 'Azalee Condit',
                'birth_dt' => '1986-08-08'
            ],
            [
                'name' => 'Almeda Asmussen',
                'birth_dt' => '1987-09-03'
            ],
            [
                'name' => 'Tory Moitoso',
                'birth_dt' => '1993-07-04'
            ],
            [
                'name' => 'Neville Wooster',
                'birth_dt' => '1994-02-24'
            ],
            [
                'name' => 'Jana Crichton',
                'birth_dt' => '1995-09-24'
            ],
            [
                'name' => 'Elsy Low',
                'birth_dt' => '1997-01-17'
            ],
            [
                'name' => 'Corrie Guillotte',
                'birth_dt' => '1997-02-02'
            ],
            [
                'name' => 'Kathlyn Hannah',
                'birth_dt' => '1999-12-28'
            ],
            [
                'name' => 'Bee Huffine',
                'birth_dt' => '2000-08-28'
            ],
        ];

        $mUser = new User();
        $mUser->name = 'Admin';
        $mUser->email = str_replace(' ', '', 'admin' . '@gmail.com');
        $mUser->birth_dt = '1996-07-02';
        $mUser->is_complete = '1';
        $mUser->password = Hash::make('123456');
        $mUser->invitation_cd = Str::random(5);
        $mUser->save();

        $request_by = 0;
        foreach ($aarUsers as $i =>$user){
            if ($i > 20)
                break;

            $mUser = new User();
            $mUser->name = $user['name'];
            $mUser->email = strtolower(str_replace(' ', '', $user['name'] . '@gmail.com'));
            $mUser->birth_dt = $user['birth_dt'];
            $mUser->password = Hash::make('123456');
            $mUser->request_by = $request_by;
            $mUser->invitation_cd = Str::random(5);
            $mUser->save();

            $request_by = $mUser->id;
        }
    }
}
