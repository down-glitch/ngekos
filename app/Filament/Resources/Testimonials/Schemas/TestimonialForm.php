<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use App\Models\BoardingHouse;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('photo')
                    ->image()
                    ->directory('testimonials')
                    ->columnSpan(2)
                    ->required(),
                Select::make('boarding_house_id') 
                    ->relationship('boardingHouse', 'name')
                    ->columnSpan(2)
                    ->required(),   
                TextInput::make('name')
                    ->required(),
                Textarea::make('content')
                    ->required(),
                TextInput::make('rating')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->required(),
                
            ]);
    }
}
