<?php

namespace App\Filament\Resources\Announces;

use App\Filament\Resources\Announces\Pages\CreateAnnounce;
use App\Filament\Resources\Announces\Pages\EditAnnounce;
use App\Filament\Resources\Announces\Pages\ListAnnounces;
use App\Filament\Resources\Announces\Schemas\AnnounceForm;
use App\Filament\Resources\Announces\Tables\AnnouncesTable;
use App\Models\Announce;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AnnounceResource extends Resource
{
    protected static ?string $model = Announce::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::InformationCircle;
    protected static string | UnitEnum | null $navigationGroup = 'Контактная и общая информация';
    protected static ?string $navigationLabel = 'Анонсы';
    protected static ?string $modelLabel = 'Анонс';
    protected static ?string $pluralModelLabel = 'Анонсы';

    protected static ?string $recordTitleAttribute = 'announce';

    public static function form(Schema $schema): Schema
    {
        return AnnounceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnnouncesTable::configure($table);
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
            'index' => ListAnnounces::route('/'),
            'create' => CreateAnnounce::route('/create'),
            'edit' => EditAnnounce::route('/{record}/edit'),
        ];
    }
}
