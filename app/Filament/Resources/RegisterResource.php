<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegisterResource\Pages;
use App\Filament\Resources\RegisterResource\RelationManagers;
use App\Models\Register;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegisterResource extends Resource
{
    protected static ?string $model = Register::class;
    protected static ?string $navigationLabel = 'Info PPDB';

    protected static ?string $navigationIcon = 'heroicon-c-megaphone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Poster')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->deleteUploadedFileUsing(function ($file, $record) {
                        if ($record && $record->image) {
                            Storage::disk('public')->delete($record->image);
                        }
                    })
                    ->required(),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Repeater::make('persyaratan')
                    ->schema([
                        Forms\Components\TextInput::make('persyaratan')->required()
                    ])
                    ->addActionLabel('Tambah Persyaratan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->limit(30),
                Tables\Columns\TextColumn::make('persyaratan')
                    ->limit(20),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
        // ->bulkActions([
        //     Tables\Actions\BulkActionGroup::make([
        //         Tables\Actions\DeleteBulkAction::make(),
        //     ]),
        // ]);
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
            'index' => Pages\ListRegisters::route('/'),
            // 'create' => Pages\CreateRegister::route('/create'),
            'edit' => Pages\EditRegister::route('/{record}/edit'),
        ];
    }
}
