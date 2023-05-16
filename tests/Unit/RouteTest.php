<?php

it('has when macro', function () {
    $this->assertTrue(Route::hasMacro('when'));
});

it('registers routes if condition is true', function () {
    Route::when(true, function () {
        Route::get('test', fn () => null)->name('test');
    });

    expect(Route::getRoutes())->not->toBeEmpty();
    expect(Route::getRoutes()->getRoutes()[0]->getName())->toBe('test');
});

it('does not register routes if condition is false', function () {
    Route::when(false, function () {
        Route::get('test', fn () => null)->name('test');
    });

    expect(Route::getRoutes())->toBeEmpty();
});