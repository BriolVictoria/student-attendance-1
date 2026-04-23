<?php


use App\Models\User;
use App\Models\Course;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertAuthenticated;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

test(
    'an authenticated user sees his courses after he logs in',
    function () {
        $dominique = User::factory()->create();
        $daniel = User::factory()->create();
        $pw = Course::factory()->create([
            'name' => 'Projets Web',
            'code' => 'PW',
            'hours' => 240,
            'user_id' => $dominique->id,
        ]);
        $dcs = Course::factory()->create([
            'name' => 'Développement côté serveur',
            'code' => 'DCS',
            'hours' => 60,
            'user_id' => $dominique->id,
        ]);
        $mmi = Course::factory()->create([
            'name' => 'Multimédia Interactif',
            'code' => 'MMI',
            'hours' => 60,
            'user_id' => $daniel->id,
        ]);

        actingAs($dominique);
        $response = get(route('courses.index'));
        $response->assertStatus(200);
        $response->assertSeeInOrder([$dcs->name, $pw->name]);
        $response->assertDontSee($mmi->name);
    });
