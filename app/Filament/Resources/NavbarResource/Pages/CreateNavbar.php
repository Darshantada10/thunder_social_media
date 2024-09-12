<?php

namespace App\Filament\Resources\NavbarResource\Pages;

use Filament\Actions;
use Illuminate\Support\Str;
use App\Filament\Resources\NavbarResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNavbar extends CreateRecord
{
    protected static string $resource = NavbarResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // dd($data);
        $data['url'] = Str::slug($data['title']);

        foreach($data['sub_menu'] as $key => $value)
        {
            // dd($key,$value);
            $data['sub_menu'][$key]['url'] = Str::slug($value['title']);

        }
        // dd($data);        
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
