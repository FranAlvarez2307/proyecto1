<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Note;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insercion con query normal...
        DB::insert('insert into notes ( title, text, created_at, updated_at) values (?, ?, ?, ?)', ['nota 1', 'contenido de la nota 1', Carbon::now(), Carbon::now()]);

        DB::table('notes')->insert([
            'title' => 'Nota 2',
            'text' => 'Texto de la nota 2...',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $note = new Note();
        $note->title = 'Nota 3';
        $note->text = 'Texto de la nota 3...';
        $note->created_at = Carbon::now();
        $note->updated_at = Carbon::now();
        $note->save();
    }
}
