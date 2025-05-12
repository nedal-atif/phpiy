<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class EmailRule implements RuleInterface
{
    public function validate(array $data, string $filed, array $prams): bool
    {
        return (bool) filter_var($data[$filed], FILTER_VALIDATE_EMAIL);
    }

    public function getMessage(array $data, string $filed, array $params): string
    {
        return "Invalid Email";
    }
}
