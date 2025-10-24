<?php

namespace Boy132\LegalPages\Enums;

use Filament\Support\Contracts\HasLabel;

enum LegalPageType: string implements HasLabel
{
    case Imprint = 'imprint';
    case TermsOfService = 'terms_of_service';

    public function getLabel(): string
    {
        return trans('legal-pages::strings.' . $this->value);
    }
}
