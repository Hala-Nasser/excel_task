<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ExportUser implements FromCollection, ShouldAutoSize,
 WithHeadings, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
        public function collection()
        {
            return User::select('id','name','email')->get();
        }

        public function headings(): array{
            return[
                '#',
                'name',
                'email',
            ];
        }
    
        public function registerEvents():array{
            return [
                AfterSheet::class => function(AfterSheet $event){
                    $event->sheet->getStyle('A1:C1')->applyFromArray([
                        'font' => [
                            'bold' => true,
                        ],
                        'borders' => [
                            'outline' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                'color' => ['argb' => 'FFFF0000'],
                            ],
                        ]
                    ]);
                }
            ];
        }
    
}
