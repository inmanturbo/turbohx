<?php

use Laravel\Folio\Folio;

it('can get', function () {
    Folio::route(__DIR__.'/resources/views/pages');

    $response = $this->get('/methods');

    $response->assertStatus(200);

    $response->assertSee('get');
});

it('can post', function () {
    Folio::route(__DIR__.'/resources/views/pages');

    $response = $this->post('/methods');

    $response->assertStatus(200);

    $response->assertSee('post');
});

it('can put', function () {
    Folio::route(__DIR__.'/resources/views/pages');

    $response = $this->put('/methods');

    $response->assertStatus(200);

    $response->assertSee('put');
});

it('can patch', function () {
    Folio::route(__DIR__.'/resources/views/pages');

    $response = $this->patch('/methods');

    $response->assertStatus(200);

    $response->assertSee('patch');
});

it('can delete', function () {
    Folio::route(__DIR__.'/resources/views/pages');

    $response = $this->delete('/methods');

    $response->assertStatus(200);

    $response->assertSee('delete');
});