<?php

return [
    "target_php_version" => 8.1,
    "directory_list" => [
        "src",
        "vendor/symfony/dom-crawler",
        "vendor/guzzlehttp/guzzle",
        "vendor/psr/http-message",
    ],
    "exclude_analysis_directory_list" => ["vendor/"],
    "plugins" => [
        "AlwaysReturnPlugin",
        "DollarDollarPlugin",
        "DuplicateArrayKeyPlugin",
        "DuplicateExpressionPlugin",
        "PregRegexCheckerPlugin",
        "PrintfCheckerPlugin",
        "SleepCheckerPlugin",
        // Checks for syntactically unreachable statements in
        // the global scope or function bodies.
        "UnreachableCodePlugin",
        "UseReturnValuePlugin",
        "EmptyStatementListPlugin",
        "LoopVariableReusePlugin",
    ],
];
