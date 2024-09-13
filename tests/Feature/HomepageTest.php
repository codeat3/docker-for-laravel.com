<?php

use App\Models\DockerResource;

test('when no data is available', function () {
    config()->set('dfl.data_json', app_path() . '/../tests/database/data/no-data.json');
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('No resources.');
});

test('when author is missing', function () {
    config()->set('dfl.data_json', app_path() . '/../tests/database/data/author-missing.json');
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('fideloper');
});

test('when social is missing', function () {
    config()->set('dfl.data_json', app_path() . '/../tests/database/data/social-missing.json');
    $response = $this->get('/');
    $response->assertStatus(200);
    $response->assertSee('data:image/png;base64');
});

test('when title is missing', function () {
    config()->set('dfl.data_json', app_path() . '/../tests/database/data/title-missing.json');
    $response = $this->get('/');
    $response->assertStatus(200);
    // $response->assertSee('data:image/png;base64');
})->skip();

test('when link is missing', function () {
    config()->set('dfl.data_json', app_path() . '/../tests/database/data/link-missing.json');
    $response = $this->get('/');
    $response->assertStatus(200);
    // $response->assertSee('data:image/png;base64');
})->skip();
