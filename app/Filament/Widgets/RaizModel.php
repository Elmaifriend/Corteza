<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Quote;

class RaizModel extends ChartWidget
{
    protected static ?string $heading = 'Modelo Raiz';

    protected function getData(): array
    {
        $data = Trend::query(Quote::where('model', '=', 'Raiz'))
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();


        return [
            'datasets' => [
                [
                    'label' => 'Cotizaciones',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
