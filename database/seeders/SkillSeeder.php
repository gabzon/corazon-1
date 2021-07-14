<?php

namespace Database\Seeders;

use App\Models\Skill;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Skill::create([
            'name'          => 'Rythym',
            'slug'          => Str::slug('Rythym', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Frame',
            'slug'          => Str::slug('Frame', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Balance',
            'slug'          => Str::slug('Balance', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Flow',
            'slug'          => Str::slug('Flow', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Espace',
            'slug'          => Str::slug('Espace', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Distance',
            'slug'          => Str::slug('Distance', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Surrounding',
            'slug'          => Str::slug('Surrounding', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);
        
        Skill::create([
            'name'          => 'Musicality',
            'slug'          => Str::slug('Musicality', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Flexibility',
            'slug'          => Str::slug('Flexibility', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Coordination',
            'slug'          => Str::slug('Coordination', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Timing',
            'slug'          => Str::slug('Timing', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Strengh',
            'slug'          => Str::slug('Strengh', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Weight',
            'slug'          => Str::slug('Weight', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Reflexes',
            'slug'          => Str::slug('Reflexes', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Style',
            'slug'          => Str::slug('Style', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Posture',
            'slug'          => Str::slug('Posture', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Precision',
            'slug'          => Str::slug('Precision', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Preasure',
            'slug'          => Str::slug('Preasure', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Tension',
            'slug'          => Str::slug('Tension', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Technique',
            'slug'          => Str::slug('Technique', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Guidance',
            'slug'          => Str::slug('Guidance', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Speed',
            'slug'          => Str::slug('Speed', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Connection',
            'slug'          => Str::slug('Connection', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Combinations',
            'slug'          => Str::slug('Combinations', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Attitude',
            'slug'          => Str::slug('Attitude', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Memory',
            'slug'          => Str::slug('Memory', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Groove',
            'slug'          => Str::slug('Groove', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);

        Skill::create([
            'name'          => 'Synchronization',
            'slug'          => Str::slug('Synchronization', '-'),
            'icon'          => null,
            'difficulty'    => $faker->randomElement(['easy','moderate','difficult']),
            'description'   => $faker->text,
            'thumbnail'     => $faker->imageUrl(640,640),
            'video'         => null,
            'user_id'       => 1,
        ]);
    }
}