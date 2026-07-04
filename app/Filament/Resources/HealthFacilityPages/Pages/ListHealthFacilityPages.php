<?php

namespace App\Filament\Resources\HealthFacilityPages\Pages;

use App\Filament\Resources\HealthFacilityPages\HealthFacilityPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHealthFacilityPages extends ListRecords
{
    protected static string $resource = HealthFacilityPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
