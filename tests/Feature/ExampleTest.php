<?php

test('the application returns a successful response when one tries to visit the home page',
    function () {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('accueil');
    });
