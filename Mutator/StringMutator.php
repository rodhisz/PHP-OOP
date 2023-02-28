<?php

// namespace Mutator;

// class StringMutator
// {
//     public static function bold(string $word)
//     {
//         return sprintf('<b>%s</b>', $word);
//     }
//     public static function underline(string $word)
//     {
//         return sprintf('<u>%s</u>', $word);
//     }
//     public static function italic(string $word)
//     {
//         return sprintf('<i>%s</i>', $word);
//     }
//     public static function strike(string $word)
//     {
//         return sprintf('<strike>%s</strike>', $word);
//     }
// }

// dengan return
// namespace Mutator;

// class StringMutator
// {
//     public static function bold(string $word): string
//     {
//         return sprintf('<b>%s</b>', $word);
//     }
//     public static function underline(string $word): string
//     {
//         return sprintf('<u>%s</u>', $word);
//     }
//     public static function italic(string $word): string
//     {
//         return sprintf('<i>%s</i>', $word);
//     }
//     public static function strike(string $word): string
//     {
//         return sprintf('<strike>%s</strike>', $word);
//     }
// }

// dengan late static
class StringMutator
{
    public static function bold(string $word): string
    {
        return sprintf('<b>%s</b>', $word);
    }
    public static function italic(string $word): string
    {
        return sprintf('<i>%s</i>', $word);
    }
    public static function boldItalic(string $word): string
    {
        return self::italic(self::bold($word));
    }
}
class ChildStringMutator extends StringMutator
{
    public static function bold(string $word): string
    {
        return '<b>STATIC LATE BINDINGS</b>';
    }
}
echo ChildStringMutator::boldItalic(
    'Muhamad Surya Iksanudin'
);

// dengan late static
// class StringMutator
// {
//     public static function bold(string $word): string
//     {
//         return sprintf('<b>%s</b>', $word);
//     }
//     public static function italic(string $word): string
//     {
//         return sprintf('<i>%s</i>', $word);
//     }
//     public static function boldItalic(string $word): string
//     {
//         return static::italic(static::bold($word));
//     }
// }
// class ChildStringMutator extends StringMutator
// {
//     public static function bold(string $word): string
//     {
//         return '<b>STATIC LATE BINDINGS</b>';
//     }
// }
// echo ChildStringMutator::boldItalic(
//     'Muhamad Surya Iksanudin'
// );
