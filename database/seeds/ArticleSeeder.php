<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Author;
use App\Tag;
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

        $tagList = [
            'turismo',
            'politica',
            'attualità',
            'ambiente',
            'sport',
            'cultura'
        ];

        $listTagID = [];  

        foreach($tagList as $tag) {
            $tagObject = new Tag();
            $tagObject->name = $tag;
            $tagObject->save();
            $listTagID[] = $tagObject->id;
        }

        $listAuthorID = [];

        for($x = 0; $x < 10; $x++) {
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
            $article->article_text = $faker->paragraph(2);
            $article->author_id = $authorID;

            $randomTagKeys = array_rand($tagList, 2);
            $tag_1 = $listTagID[$randomTagKeys[0]]; 
            $tag_2 = $listTagID[$randomTagKeys[1]]; 

            $article->save();

            $article->tag()->attach($tag_1);  
            $article->tag()->attach($tag_2);  


        }
    }
}
