<?php

namespace App\Enums\Accounting;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum InvoiceStatus: string implements HasColor, HasLabel
{
    case Draft = 'draft';
    case Sent = 'sent';

    case Partial = 'partial';

    case Paid = 'paid';

    case Overdue = 'overdue';

    case Void = 'void';

    public function getLabel(): ?string
    {
        return $this->name;
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Draft, self::Void => 'gray',
            self::Sent => 'primary',
            self::Partial => 'warning',
            self::Paid => 'success',
            self::Overdue => 'danger',
        };
    }
}
