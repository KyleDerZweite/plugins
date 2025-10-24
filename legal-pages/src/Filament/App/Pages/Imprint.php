<?php

namespace Boy132\LegalPages\Filament\App\Pages;

use Boy132\LegalPages\Enums\LegalPageType;

class Imprint extends BaseLegalPage
{
    public function getPageType(): LegalPageType
    {
        return LegalPageType::Imprint;
    }
}
