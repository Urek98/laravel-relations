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

        $listAuthorID = [];

        for($x = 0; $x < 20; $x++) {
            $author = new Author();
            $author->name = $faker->word(1);
            $author->surname = $faker->word(1);
            $author->save();
            $listAuthorID[] = $author->id;
        }

        for($x = 0; $x < 20; $x++) {

            $randAuthorID = array_rand($listAuthorID, 1);
            $authorID = $listAuthorID[$randAuthorID];
            
            $article = new Article();
            $article->title = $faker->word(5, true);
            $article->article_img = $faker->imageUrl(250, 250, 'article', true);
            $article->article_text = $faker->word(2);
            $article->author_id = $authorID;
            $article->save();
        }
    }
}
