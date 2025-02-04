<?php

namespace App\Filament\Resources\WhyAlhazenResource\Pages;

use App\Filament\Resources\WhyAlhazenResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWhyAlhazen extends EditRecord
{
    protected static string $resource = WhyAlhazenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
