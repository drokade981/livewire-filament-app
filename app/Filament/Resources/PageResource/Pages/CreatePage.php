<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;

class CreatePage extends CreateRecord
{
    protected static string $resource = PageResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification 
    {
        return Notification::make()
            ->success()
            ->title('FAQ created')
            ->body('The FAQ has been created successfully.');
    }
}
