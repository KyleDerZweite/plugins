<?php

namespace Boy132\LegalPages\Filament\App\Pages;

use Boy132\LegalPages\Enums\LegalPageType;

class TermsOfService extends BaseLegalPage
{
    public function getPageType(): LegalPageType
    {
        return LegalPageType::TermsOfService;
    }
}
