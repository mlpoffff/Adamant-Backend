<?php

namespace App\Filament\Resources\Personals\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PersonalForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('fio')->label('Ф.И.О.')
                    ->required(),
                Textarea::make('description')->label('Информация')
                    ->required(),
                Select::make('image_id')
                    ->relationship('image', 'title')
                    ->searchable()
                    ->preload()
                    ->required()
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
                Select::make('certificates')
                    ->label('Сертификаты')
                    ->multiple()
                    ->relationship('certificates', 'title') // название из Media
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('title')
                            ->label('Название')
                            ->required(),
                        FileUpload::make('src')
                            ->label('Изображение')
                            ->image()
                            ->directory('certificates')
                            ->required(),
                    ])
            ]);
    }
}
