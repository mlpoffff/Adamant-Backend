<?php

namespace App\Filament\Resources\Schedules\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SchedulesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('day')
                    ->label('День недели')
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        return match ($state) {
                            'weekdays' => 'Будни',
                            'weekend' => 'Выходные',
                            'monday' => 'Понедельник',
                            'tuesday' => 'Вторник',
                            'wednesday' => 'Среда',
                            'thursday' => 'Четверг',
                            'friday' => 'Пятница',
                            'saturday' => 'Суббота',
                            'sunday' => 'Воскресенье',
                            default => $state,
                        };
                    }),
                TextColumn::make('time')->label('Режим работы')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
