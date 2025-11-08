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
                    ->required()
                    ->columnSpan('full'),
                Textarea::make('description')->label('Информация')
                    ->required()
                    ->columnSpan('full'),
                Select::make('image_id')
                    ->relationship('image', 'src')
                    ->getOptionLabelFromRecordUsing(function (\App\Models\Media $record) {
                        $title = $record->title ?: 'Без названия';
                        return "id: {$record->id} - {$title}";
                    })
                    ->searchable()
                    ->preload()
                    ->required()
                    ->label('Изображение')
                    ->createOptionForm([
                        TextInput::make('title')
                            ->string()
                            ->label('Название'),
                        FileUpload::make('src')
                            ->label('Изображение карточки')
                            ->image()
                            ->required()
                    ]),
                Select::make('certificates')
                    ->label('Сертификаты')
                    ->multiple()
                    ->relationship('certificates', 'src')
                    ->getOptionLabelFromRecordUsing(function (\App\Models\Media $record) {
                        $title = $record->title ?: 'Без названия';
                        return "id: {$record->id} - {$title}";
                    })
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('title')
                            ->label('Название'),
                        FileUpload::make('src')
                            ->label('Изображение')
                            ->image()
                            ->required(),
                    ])
            ]);
    }
}
