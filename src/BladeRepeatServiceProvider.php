<?php

namespace poldixd\BladeRepeat;

use Illuminate\Support\ServiceProvider;
use Blade;

class BladeRepeatServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('repeat', function ($expression = 1) {
            return "<?php for (\$iteration=1; \$iteration <= $expression; \$iteration++): ?>";
        });

        Blade::directive('endrepeat', function () {
            return "<?php endfor; ?>";
        });
    }
}
