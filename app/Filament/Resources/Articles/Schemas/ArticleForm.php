<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->label('Заголовок')
                    ->required()
                    ->columnSpan('full'),
                Textarea::make('preview')->label('Краткое описание')
                    ->required()
                    ->columnSpan('full'),
                RichEditor::make('content')->label('Статья')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
