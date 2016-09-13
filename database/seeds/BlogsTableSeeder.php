<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->delete();

        $faker = Faker::create('zh_CN');
        $userIds = App\User::lists('id')->all();

        foreach(range(1,10) as $index) {
        	$blog = App\Blog::create([
        		'user_id'=>$faker->randomElement($userIds),
        		'active'=>$faker->numberBetween(0,1),
        		'title'=>$faker->sentence,
        		'body'=>$faker->paragraph(40),
        		'published_at'=>$faker->dateTimeThisYear(),
        		'created_at'=>$faker->dateTimeThisYear(),
        		'updated_at'=>$faker->dateTimeThisYear(),

        		]);
        }
    }
}
