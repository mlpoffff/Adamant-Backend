<?php

namespace App\Filament\Resources\Schedules\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('day')
                    ->label('День недели')
                    ->options([
                        'weekdays' => 'Будни',
                        'weekend' => 'Выходные',
                        'monday' => 'Понедельник',
                        'tuesday' => 'Вторник',
                        'wednesday' => 'Среда',
                        'thursday' => 'Четверг',
                        'friday' => 'Пятница',
                        'saturday' => 'Суббота',
                        'sunday' => 'Воскресенье',
                    ])
                    ->required(),
                TextInput::make('time')->label('Режим работы')
                    ->required(),
            ]);
    }
}
