<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Support\Collection;

class Item implements FromCollection, WithHeadings, WithCustomStartCell, ShouldAutoSize {
    protected $data;

    public function __construct($data, $headings)
    {
        $this->data = $data;
        $this->headings = $headings;
    }

    public function collection()
    {
        return new Collection($this->data);
    }

    /**
     * @return array
     */
    public function headings():array
    {
        return $this->headings;
    }

    /**
     * @return string
     */
    public function startCell():string
    {
        return 'A1';
    }
    /**
     * @return string
     */
}
