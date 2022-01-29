<?php

use Illuminate\Database\Seeder;
use App\Covid;

class Covid_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $covid = [
            [
                "regione" => "Lombardia",
                "positivi" => "120000",
                "TI" => "120",
                "ospedalizzati" => "1200"
            ],
            [
                "regione" => "Veneto",
                "positivi" => "100000",
                "TI" => "100",
                "ospedalizzati" => "1000"
            ],
            [
                "regione" => "Piemente",
                "positivi" => "90000",
                "TI" => "90",
                "ospedalizzati" => "900"
            ],
            [
                "regione" => "Emilia",
                "positivi" => "110000",
                "TI" => "110",
                "ospedalizzati" => "1100"
            ],

        ];
        foreach ($covids as $covid) {
            $newCar = new Car();
            $newCar->regione = $car['regione'];
            $newCar->positivi = $car['positivi'];
            $newCar->TI = $car['TI'];
            $newCar->ospedalizzati = $car['ospedalizzati'];
            $newCar->save();
        }
    }
}
