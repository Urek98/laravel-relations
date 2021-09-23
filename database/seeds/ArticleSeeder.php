<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Author;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        
        $listOfAuthorID = [];  


        for ($i = 0; $i < 10; $i++){

            $authorObject = new Author();
            $authorObject->name = $faker->word(1);  
            $authorObject->surname = $faker->word(1);     
            $authorObject->save();
            $listOfAuthorID[] = $authorObject->id;


        }

        for ($i = 0; $i < 20; $i++){

            $articleObject = new Article();
            $articleObject->title = $faker->word(3);  
            $articleObject->article_img = $faker->imageUrl(480, 360, 'article', true);
            $articleObject->article_text = $faker->paragraph(2);
            $articleObject->save();

            $randAuthorKey = array_rand($listOfAuthorID, 1);
            $authorID = $listOfAuthorID[$randAuthorKey];
            $articleObject->author_id = $authorID;
            $articleObject->save();
        }
    }
}
