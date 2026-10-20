<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'title' => 'Fusion',
                'category' => 'Musik',
                'ticket_price' => '130000',
                'description' => 'Konser Musik With HiVi, Perunggu, DJ Mail',
                'image' => 'null',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'title' => 'Alseace',
                'category' => 'Festival',
                'ticket_price' => '260000',
                'description' => 'Konser Musik With Sheila On 7, Bernadya, LastChild',
                'image' => 'null',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'title' => 'Codein',
                'category' => 'Seminar',
                'ticket_price' => '150000',
                'description' => 'Seminar coding gratis',
                'image' => 'null',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'title' => 'WeekMeUp',
                'category' => 'Festival',
                'ticket_price' => '250000',
                'description' => 'Konser Musik With Padi, Ghea Indriwari, Reality Club',
                'image' => 'null',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'title' => 'Genius Math',
                'category' => 'Seminar',
                'ticket_price' => '150000',
                'description' => 'Seminar matematika jago dalam 5 menit',
                'image' => 'null',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}