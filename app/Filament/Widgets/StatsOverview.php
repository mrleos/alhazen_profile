<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Course;
use App\Models\Tutor;
use App\Models\Article;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $courseCount = Course::count();
        $tutorCount= Tutor::count();
        $artikelCount= Article::count();
        return [
            Stat::make('Jumlah Kelas', $courseCount),
            Stat::make('Jumlah Tutor', $tutorCount),
            Stat::make('Jumlah Artikel', $artikelCount),
        ];
    }
}
