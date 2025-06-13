<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            ['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => 'Password'],
            ['name' => 'ANKITADITYAPRADHAN.COM', 'email' => 'admin@ankitadityapradhan.com', 'password' => 'Ankit@VV#2025'],
            ['name' => 'MOHITMITTAL.CO.IN', 'email' => 'admin@mohitmittal.co.in', 'password' => 'Mohit@VV#2025'],
            ['name' => 'VICTORYONECENTRAL.IN', 'email' => 'admin@victoryonecentral.in', 'password' => 'Victory@VV#2025'],
            ['name' => 'VICTORYONE-CENTRAL.COM', 'email' => 'admin@victoryone-central.com', 'password' => 'Victory@VV#2025'],
            ['name' => 'CONSCIENTPARQS.COM', 'email' => 'admin@conscientparqs.com', 'password' => 'Conscient@VV#2025'],
            ['name' => 'ELDECOLAVIDABELLAGRNOIDA.COM', 'email' => 'admin@eldecolavidabellagrnoida.com', 'password' => 'Eldeco@VV#2025'],
            ['name' => 'ACEHANEIGREATERNOIDA.IN', 'email' => 'admin@acehaneigreaternoida.in', 'password' => 'Acehanei@VV#2025'],
            ['name' => 'HEROHOMES-GURGAON.COM', 'email' => 'admin@herohomes-gurgaon.com', 'password' => 'Herohomes@VV#2025'],
            ['name' => 'THEDIGIBEE.IN', 'email' => 'admin@thedigibee.in', 'password' => 'Thedigibee@VV#2025'],
            ['name' => 'CAPITALEDGE.IN', 'email' => 'admin@capitaledge.in', 'password' => 'Capitaledge@VV#2025'],
            ['name' => 'VICTORYONCENTRAL.COM', 'email' => 'admin@victoryoncentral.com', 'password' => 'Victory@VV#2025'],
            ['name' => 'SYNERGYADVISORS.IN', 'email' => 'admin@synergyadvisors.in', 'password' => 'Synergy@VV#2025'],
            ['name' => 'SVGTOWNSQUARE.IN', 'email' => 'admin@svgtownsquare.in', 'password' => 'Svgtown@VV#2025'],
            ['name' => 'MALLOFNOIDASECTOR98.COM', 'email' => 'admin@mallofnoidasector98.com', 'password' => 'Mallofnoida@VV#2025'],
            ['name' => 'comercialpropertyinnoida.com', 'email' => 'admin@comercialpropertyinnoida.com', 'password' => 'Comercial@VV#2025'],
            ['name' => 'migsun-properties.com', 'email' => 'admin@migsun-properties.com', 'password' => 'Migsun@VV#2025'],
            ['name' => 'gulshanone29.co.in', 'email' => 'admin@gulshanone29.co.in', 'password' => 'Gulshanone29@VV#2025'],
            ['name' => 'myzone.red', 'email' => 'admin@myzone.red', 'password' => 'Myzone@VV#2025'],
            ['name' => 'go-red.in', 'email' => 'admin@go-red.in', 'password' => 'Gored@VV#2025'],
            ['name' => 'realtyassistantglobal.com', 'email' => 'admin@realtyassistantglobal.com', 'password' => 'Realty@VV#2025'],
            ['name' => 'safeearthinfra.com', 'email' => 'admin@safeearthinfra.com', 'password' => 'Safeearth@VV#2025'],
            ['name' => 'satellitecowork.com', 'email' => 'admin@satellitecowork.com', 'password' => 'Satellite@VV#2025'],
            ['name' => 'thevulcanengineering.com', 'email' => 'admin@thevulcanengineering.com', 'password' => 'Thevulcan@VV#2025'],
            ['name' => 'keasis.com', 'email' => 'admin@www.keasis.com', 'password' => 'Keasis@VV#2025'],
            ['name' => 'pararthya.com', 'email' => 'admin@pararthya.com', 'password' => 'Pararthya@VV#2025'],
            ['name' => 'viraajventures.com', 'email' => 'admin@viraajventures.com', 'password' => 'Viraaj@VV#2025'],
            ['name' => 'proprelief.com', 'email' => 'admin@proprelief.com', 'password' => 'Proprelief@VV#2025'],
            ['name' => 'adityapradhan.foundation', 'email' => 'admin@adityapradhan.foundation', 'password' => 'Aditya@VV#2025'],
            ['name' => 'n6consortia.com', 'email' => 'admin@n6consortia.com', 'password' => 'N6consortia@VV#2025'],
        ];


        foreach ($users as $user) {
            User::updateOrInsert(
                ['email' => $user['email']],
                [
                    'name' => ucwords(strtolower($user['name'])),
                    'email' => $user['email'],
                    'password' => Hash::make($user['password']), // uses Laravel's hashing system
                    'email_verified_at' => now(),
                    'remember_token' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
