<?php

use App\Models\Student;
use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\post;

it('allows the creation of a student in the database and redirects to the show page for the newly created student',
    function () {
        // Arrange
        actingAs(User::factory()->create());
        $studentData = [
            'first_name' => 'Toto',
            'last_name' => 'Titi',
            'email' => 'toto@titi.com',
            'matricule' => '1234567890',
        ];

        // Act
        $response = post(
            route('students.store'),
            $studentData,
        );

        // Assert
        $response->assertValid(array_keys($studentData));
        assertDatabaseCount('students', 1);
        $student = Student::first();
        $response->assertStatus(302);
        $response->assertRedirect(
            route(
                'students.show',
                $student,
            )
        );
    });
