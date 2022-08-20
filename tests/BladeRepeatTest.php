<?php

use Illuminate\Support\Facades\Blade;
use function Spatie\Snapshots\assertMatchesHtmlSnapshot;

it('can render string 3 times', function () {
    $html = <<<BLADE
    @repeat(3)
        Test
    @endrepeat
    BLADE;

    assertMatchesHtmlSnapshot(Blade::render($html));
});

it('can render string 2 times with iteration', function () {
    $html = <<<BLADE
    @repeat(2)
        Test #{{ \$iteration }}
    @endrepeat
    BLADE;

    assertMatchesHtmlSnapshot(Blade::render($html));
});