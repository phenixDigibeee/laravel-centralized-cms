<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            [1, 'Residential Apartments', 'ACTIVE', 'index', '2025-03-10 09:59:20.273', 3, '2025-04-09 04:38:35.466', 'residential-apartments'],
            [2, 'Leadership', 'ACTIVE', 'index', '2025-03-10 10:01:16.945', 2, '2025-04-09 04:38:35.472', 'leadership'],
            [4, 'Businessman', 'ACTIVE', 'index', '2025-03-10 10:04:28.178', 2, '2025-04-09 04:38:35.476', 'businessman'],
            [9, 'Real Estate', 'ACTIVE', 'index', '2025-03-17 07:45:33.413', 8, '2025-04-09 04:38:35.479', 'real-estate'],
            [10, 'Real Estate', 'ACTIVE', 'index', '2025-03-17 09:11:21.221', 9, '2025-04-09 04:38:35.481', 'real-estate'],
            [11, 'Residential Property', 'ACTIVE', 'index', '2025-03-17 10:18:23.588', 10, '2025-04-09 04:38:35.483', 'residential-property'],
            [14, 'Residential Property', 'ACTIVE', 'index', '2025-03-17 10:36:07.065', 6, '2025-04-09 04:38:35.486', 'residential-property'],
            [15, 'Residential Property', 'ACTIVE', 'index', '2025-03-19 11:26:41.101', 13, '2025-04-09 04:38:35.488', 'residential-property'],
            [16, 'Businessman', 'ACTIVE', 'index', '2025-03-28 10:19:49.806', 1, '2025-04-09 04:38:35.49', 'businessman'],
            [17, 'Residential', 'ACTIVE', 'index', '2025-03-28 10:36:10.788', 7, '2025-04-09 04:38:35.492', 'residential'],
            [18, 'Entrepreneur', 'ACTIVE', 'index', '2025-03-28 10:50:33.109', 1, '2025-04-09 04:38:35.495', 'entrepreneur'],
            [19, 'Leadership', 'ACTIVE', 'index', '2025-03-28 10:50:53.967', 1, '2025-04-09 04:38:35.496', 'leadership'],
            [20, 'Social Activist', 'ACTIVE', 'index', '2025-03-28 10:51:23.4', 1, '2025-04-09 04:38:35.498', 'social-activist'],
            [21, 'Philanthropist', 'ACTIVE', 'index', '2025-03-28 10:52:01.578', 1, '2025-04-09 04:38:35.501', 'philanthropist'],
            [23, 'Commercial Property', 'ACTIVE', 'index', '2025-04-09 12:11:34.649', 14, '2025-04-09 12:11:34.649', 'commercial-property'],
            [24, 'Commercial Property', 'ACTIVE', 'index', '2025-05-02 07:16:26.396', 15, '2025-05-02 07:16:26.396', 'commercial-property'],
            [25, 'Residential Property', 'ACTIVE', 'index', '2025-05-29 12:41:18.164', 17, '2025-05-29 12:41:18.164', 'residential-property'],
            [26, 'Entrepreneurship', 'ACTIVE', 'index', '2025-05-30 12:31:27.803', 1, '2025-05-30 12:31:27.803', 'entrepreneurship'],
            [27, 'Commercial Property', 'ACTIVE', 'index', '2025-06-02 05:20:46.259', 18, '2025-06-02 05:20:46.259', 'commercial-property'],
            [28, 'Test', 'ACTIVE', 'index', '2025-06-10 12:41:44.641', 19, '2025-06-10 12:41:44.641', 'test'],
        ];

        foreach ($categories as [$id, $name, $status, $indexing, $created, $appId, $updated, $slug]) {
            BlogCategory::updateOrInsert(
                ['id' => $id],
                [
                    'name' => $name,
                    'status' => $status,
                    'indexing' => $indexing,
                    'application_id' => $appId,
                    'slug' => $slug,
                    'created_at' => $created,
                    'updated_at' =>  $updated,
                ]
            );
        }
    }
}
