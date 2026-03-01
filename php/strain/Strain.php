<?php

declare(strict_types=1);

class Strain
{
    public function keep(array $list, callable $predicate): array
    {
        $result = [];
        foreach ($list as $elem) {
            if ($predicate($elem) === true) {
                $result[] = $elem;
            }
        }
        return $result;
    }

    public function discard(array $list, callable $predicate): array
    {
        $result = [];
        foreach ($list as $elem) {
            if ($predicate($elem) === false) {
                $result[] = $elem;
            }
        }
        return $result;
    }
}
