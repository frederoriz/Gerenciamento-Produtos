<?php

namespace App\Enum;

enum StatusEnum: int
{
    case ACTIVE = 1;
    case INACTIVE = 0;

    /**
     * Retorna o label do status
     *
     * @return string
     */
    public function label(): string
    {
        return match($this) {
            self::ACTIVE => 'Ativo',
            self::INACTIVE => 'Inativo',
        };
    }

    /**
     * Retorna um array com os valores e labels
     *
     * @return array
     */
    public static function options(): array
    {
        return [
            self::ACTIVE->value => self::ACTIVE->label(),
            self::INACTIVE->value => self::INACTIVE->label(),
        ];
    }
}