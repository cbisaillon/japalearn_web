<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KanjiTableSeeder::class);
        $this->call(DictionarySeeder::class);
        $this->call(EntryFrequencySeeder::class);
        $this->call(EntryRelevenceSeeder::class);
    }
}
