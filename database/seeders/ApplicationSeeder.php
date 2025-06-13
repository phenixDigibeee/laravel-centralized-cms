<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $fixedApplications = [
            [1, 'MOHITMITTAL.CO.IN', 'https://mohitmittal.in', 'ixvjzr33rzh', '2024-12-09 11:33:24.781'],
            [2, 'ANKITADITYAPRADHAN.COM', 'https://ankitadityapradhan.com/', '8dwoxnrl65', '2024-12-09 11:33:49.576'],
            [3, 'VICTORYONECENTRAL.IN', 'https://victoryonecentral.in/', 'er3lpqbu77', '2024-12-09 11:34:15.599'],
            [4, 'SYNERGYADVISORS.IN', 'https://synergyadvisors.in', 'ubu93z442of', '2025-02-25 10:22:38.915'],
            [6, 'VICTORYONE-CENTRAL.COM', 'https://victoryone-central.com', 'mq1k40zqvy', '2025-02-25 10:22:38.915'],
            [7, 'CONSCIENTPARQS.COM', 'https://conscientparqs.com', 'kgyqcbt9cf', '2025-02-25 10:22:38.915'],
            [8, 'ELDECOLAVIDABELLAGRNOIDA.COM', 'https://eldecolavidabellagrnoida.com', 'p1brzw90h4', '2025-02-25 10:22:38.915'],
            [9, 'ACEHANEIGREATERNOIDA.IN', 'https://acehaneigreaternoida.in', 'qp643cd29t', '2025-02-25 10:22:38.915'],
            [10, 'HEROHOMES-GURGAON.COM', 'https://herohomes-gurgaon.com', 'n0wqz4b911', '2025-02-25 10:22:38.915'],
            [11, 'THEDIGIBEE.IN', 'https://thedigibee.in', 'lxktuqjjwpi', '2025-02-25 10:22:38.915'],
            [12, 'CAPITALEDGE.IN', 'https://capitaledge.in', '8svnea1ajk', '2025-02-25 10:22:38.915'],
            [13, 'VICTORYONCENTRAL.COM', 'https://victoryoncentral.com', 'ddq7mc6l5u', '2025-02-25 10:29:21.021'],
            [14, 'SVGTOWNSQUARE.IN', 'https://svgtownsquare.in', '7qxhfuodid', '2025-04-09 10:48:14.327'],
            [15, 'MALLOFNOIDASECTOR98.COM', 'https://mallofnoidasector98.com', 'e6sf0z3pzo', '2025-05-02 05:55:06.748'],
            [16, 'COMERCIALPROPERTYINNOIDA.COM', 'https://comercialpropertyinnoida.com', 'saycb6o8an', '2025-05-08 12:06:39.153'],
            [17, 'MIGSUN-PROPERTIES.COM', 'https://migsun-properties.co', 'ayfpzykjzz', '2025-05-29 12:06:39.153'],
            [18, 'GULSHANONE29.CO.IN', 'https://gulshanone29.co.in', 'kqh7qal5e3', '2025-06-02 05:00:50.025'],
            [19, 'MYZONE.RED', 'https://www.myzone.red', 'dukbbji566', '2025-06-02 07:09:24.901'],
        ];

        foreach ($fixedApplications as [$id, $name, $url, $token, $timestamp]) {
           Application::updateOrInsert(
                ['id' => $id],
                [
                    'application_name' => strtoupper($name),
                    'status' => 'ACTIVE',
                    'url' => $url,
                    'token' => $token,
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]
            );
        }

        // Step 2: Insert new applications (auto token + now)
        $additionalApplications = [
            ['go-red.in', 'https://go-red.in'],
            ['realtyassistantglobal.com', 'https://realtyassistantglobal.com'],
            ['safeearthinfra.com', 'https://safeearthinfra.com'],
            ['satellitecowork.com', 'https://satellitecowork.com'],
            ['thevulcanengineering.com', 'https://thevulcanengineering.com'],
            ['keasis.com', 'https://www.keasis.com'],
            ['pararthya.com', 'https://pararthya.com'],
            ['viraajventures.com', 'https://viraajventures.com'],
            ['proprelief.com', 'https://Proprelief.com'],
            ['adityapradhan.foundation', 'https://adityapradhan.foundation'],
            ['n6consortia.com', 'https://n6consortia.com'],
        ];

        foreach ($additionalApplications as [$name, $url]) {
           Application::updateOrInsert(
                ['application_name' => strtoupper($name)],
                [
                    'status' => 'ACTIVE',
                    'url' => $url,
                    'token' => Str::random(12),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            );
        }
    }
}
