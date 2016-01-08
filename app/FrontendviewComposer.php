<?php

/*
|------------------------------------------------------------------------------
| View composer for create product layout
|------------------------------------------------------------------------------
 */
\View::composer(
    'template',
    function ($view) {
        \View::share([ 'Categories' => TemplateController::nav() ]);
    }
);

?>