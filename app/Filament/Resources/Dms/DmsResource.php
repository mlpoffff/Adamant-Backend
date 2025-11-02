<?php

namespace App\Filament\Resources\Dms;

use App\Filament\Resources\Dms\Pages\CreateDms;
use App\Filament\Resources\Dms\Pages\EditDms;
use App\Filament\Resources\Dms\Pages\ListDms;
use App\Filament\Resources\Dms\Schemas\DmsForm;
use App\Filament\Resources\Dms\Tables\DmsTable;
use App\Models\Dms;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DmsResource extends Resource
{
    protected static ?string $model = Dms::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ShieldCheck;
    protected static ?string $navigationLabel = 'Страховые';
    protected static ?string $modelLabel = 'Страховую';
    protected static ?string $pluralModelLabel = 'Страховые';
    protected static ?string $recordTitleAttribute = 'Dms';

    public static function form(Schema $schema): Schema
    {
        return DmsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DmsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDms::route('/'),
            'create' => CreateDms::route('/create'),
            'edit' => EditDms::route('/{record}/edit'),
        ];
    }
}
