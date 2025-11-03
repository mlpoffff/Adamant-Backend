<?php

namespace App\Filament\Resources\MainInfos;

use App\Filament\Resources\MainInfos\Pages\CreateContactInfo;
use App\Filament\Resources\MainInfos\Pages\EditContactInfo;
use App\Filament\Resources\MainInfos\Pages\ListContactInfos;
use App\Filament\Resources\MainInfos\Schemas\MainInfoForm;
use App\Filament\Resources\MainInfos\Tables\MainInfosTable;
use App\Models\MainInfo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MainInfoResource extends Resource
{
    protected static ?string $model = MainInfo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::QuestionMarkCircle;
    protected static string | UnitEnum | null $navigationGroup = 'Контактная и общая информация';
    protected static ?string $navigationLabel = 'Общая информация';
    protected static ?string $modelLabel = 'Запись';
    protected static ?string $pluralModelLabel = 'Общая информация';

    protected static ?string $recordTitleAttribute = 'contactinfo';

    public static function form(Schema $schema): Schema
    {
        return MainInfoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MainInfosTable::configure($table);
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
            'index' => ListContactInfos::route('/'),
            'create' => CreateContactInfo::route('/create'),
            'edit' => EditContactInfo::route('/{record}/edit'),
        ];
    }
}
