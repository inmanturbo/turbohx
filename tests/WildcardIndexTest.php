<?php

use Laravel\Folio\Folio;

test('there will be none', function () {
    $this->withoutExceptionHandling();
    Folio::route(__DIR__.'/resources/views/pages');

    $response = $this->get('/wildcards');

    $response->assertStatus(200);

    $response->assertSee('0');
});

test('there will be one', function () {
    $this->withoutExceptionHandling();
    Folio::route(__DIR__.'/resources/views/pages');

    $response = $this->get('/wildcards/1');

    $response->assertStatus(200);

    $response->assertSee('1');
});

test('there will be two', function () {
    $this->withoutExceptionHandling();
    Folio::route(__DIR__.'/resources/views/pages');

    $response = $this->get('/wildcards/1/2');

    $response->assertStatus(200);

    $response->assertSee('2');
});