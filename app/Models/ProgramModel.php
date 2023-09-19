<?php

namespace App\Models;


class ProgramModel
{
    private static $spm = [
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'Januari',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'februari',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'maret',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'april',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'mei',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'juni',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'juli',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'agustus',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'september',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'oktober',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'november',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
        [
            'id' => '1',
            'id_program' => '3',
            'program_name' => 'spm',
            'indicator' => 'Pelayanan ibu hamil',
            'percentage_year_target' => 100,
            'year_target' => 340,
            'month' => 'desember',
            "target" => 53,
            "absolute" => 44,
            "competitive" => 34,
            "percentage" => 90
        ],
    ];


    public static function all()
    {
    return self::$spm;
    }

    public static function find($slug){
        // $post = static::all();
        // return $post->firstWhere('Year_terbit', $slug);
        $data = static::all();
        $new_post = [];
        foreach( $data as $item){
            if($item['Year_terbit'] === $slug) {
                $new_post = $item;
            }
        }
        return $new_post;
    }
}
