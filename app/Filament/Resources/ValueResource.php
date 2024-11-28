<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Value;
use App\Models\Criteria;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Alternative;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ValueResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ValueResource\RelationManagers;

class ValueResource extends Resource
{
    protected static ?string $model = Value::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('alternative_id')
                ->label('Alternative')
                ->options(function () {
                    return Alternative::all()->pluck('name', 'id');
                })
                ->required(),

            Select::make('criterias_id')
                ->label('Criteria')
                ->options(function () {
                    return Criteria::all()->pluck('name', 'id');
                })
                ->required(),

            TextInput::make('value')
                ->label('Value')
                ->numeric()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        $criteria = Criteria::all();  // Mengambil semua kriteria dari database

        // Menyiapkan kolom untuk menampilkan kriteria di header
        $columns = [
            TextColumn::make('alternative.name')
                ->label('Alternative')
                ->sortable()
                ->searchable(),
        ];

        // Menambahkan kolom untuk setiap kriteria
        foreach ($criteria as $criterion) {
            $columns[] = TextColumn::make('value')
                ->label($criterion->name)
                ->sortable()
                ->searchable()
                ->getStateUsing(function (Value $record) use ($criterion) {
                    // Ambil nilai terkait untuk alternatif dan kriteria
                    return $record->where('criterias_id', $criterion->id)->first()->value ?? '-';
                });
        }

        return $table
        ->columns([
            // Kolom Alternatif
            TextColumn::make('alternative.name')
                ->label('Alternative')
                ->sortable()
                ->searchable(),

            // Kolom Kriteria
            TextColumn::make('criterias.name')
                ->label('Criteria')
                ->sortable()
                ->searchable(),

            // Kolom Nilai
            TextColumn::make('value')
                ->label('Value')
                ->sortable(),
        ])
        ->defaultSort('alternative.name')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListValues::route('/'),
            'create' => Pages\CreateValue::route('/create'),
            'edit' => Pages\EditValue::route('/{record}/edit'),
        ];
    }
}
