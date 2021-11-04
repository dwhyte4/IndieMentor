<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Template;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    }

    private function createDummyTemplates()
    {
        for($i=0; $i < 200; $i++)
            Movie::create([
                'name' => Str::random(20),
                'image' => 'https://picsum.photos/600/400?random=1',
                'description' => Str::random(500)
            ]);
    }

    private function createFavouriteMovies()
    {
        $names = [
            'The Matrix', 
            'Batman: The Dark Knight',
            'Back to Future',
            'Twin Town',
            'In Bruges'
        ];

        foreach($names as $name)
            Movie::create([
                'name' => $name,
                'image' => 'https://picsum.photos/600/400?random=1',
                'description' => Str::random(500)
            ]);
    }
}
