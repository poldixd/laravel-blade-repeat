<?php

use Illuminate\Support\Facades\Blade;

it('can render string 3 times', function () {
    $html = <<<BLADE
    @repeat(3)
        Test
    @endrepeat
    BLADE;

    expect(Blade::render($html))->toMatchSnapshot();
});

it('can render string 2 times with iteration', function () {
    $html = <<<BLADE
    @repeat(2)
        Test #{{ \$iteration }}
    @endrepeat
    BLADE;

    expect(Blade::render($html))->toMatchSnapshot();
});