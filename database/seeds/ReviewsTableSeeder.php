<?php

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataSet = [
            [
                'user_id' => '1',
                'program_id' => '2',
                'ratings' => '4',
                'body' => 'いつも聞いています。面白いです。',
            ],
            [
                'user_id' => '1',
                'program_id' => '3',
                'ratings' => '2',
                'body' => 'ながら聞きしています。',
            ],
            [
                'user_id' => '2',
                'program_id' => '4',
                'ratings' => '5',
                'body' => 'いつも最高です',
            ],
        ];
        foreach($dataSet as $data){
            Review::create($data);
        }
    }

}
