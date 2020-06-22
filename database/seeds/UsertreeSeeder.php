<?php


use Illuminate\Database\Seeder;
use App\User;
use App\Http\Traits\UsertreeTrait;

class UsertreeSeeder extends Seeder
{


    use UsertreeTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mUsers = User::where('request_by', '!=', '1')
            ->where('request_by', '!=', 'NULL')
            ->get();


        foreach ($mUsers as $i => $mUser){
            $this->generateUsertree($mUser->id);
        }
    }
}
