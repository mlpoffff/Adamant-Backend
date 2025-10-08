<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Radio::make('type')
                    ->options([
                        'clinic' => 'Клиника',
                        'works' => 'Работы'
                    ])
                    ->required()
                    ->default('clinic')
                    ->label('Раздел'),
                Select::make('image_id')
                    ->relationship('image', 'title')
                    ->searchable()
                    ->preload()
                    ->label('Изображение')
                    ->createOptionForm([
                        TextInput::make('title')
                            ->string()
                            ->label('Название'),
                        FileUpload::make('src')
                            ->label('Изображение')
                            ->image()
                            ->required()
                    ]),
            ]);
    }
}
