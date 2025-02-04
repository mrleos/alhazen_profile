<?php

namespace App\Filament\Resources\WhyAlhazenResource\Pages;

use App\Filament\Resources\WhyAlhazenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhyAlhazens extends ListRecords
{
    protected static string $resource = WhyAlhazenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
