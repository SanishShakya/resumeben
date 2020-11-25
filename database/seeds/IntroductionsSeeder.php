<?php

use Illuminate\Database\Seeder;

class IntroductionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('introductions')->insert([
        'id' => '1',
            'fullname' => 'Ben Wilson',
            'dob' => '26 September 1999',
            'email' => 'hello@company.co',
            'detail' => 'Ben Resume HTML Template is brought to you by Tooplate website. You can feel free to edit and use this page for your small site. You are allowed to use this HTML template for any kind of purpose.However, please do not re-distribute the downloadable template ZIP file on any template collection website. This is strongly prohibited. Please contact Tooplate for more information.',
            'heading' => "This is Ben's Resume",
            'expBody1' => 'Sed eu risus tincidunt, finibus dolor non, gravida ex. Donec lacinia mi nec erat tempus, vel consectetur ante scelerisque. Ut blandit, risus in venenatis ultricies, lacus tellus fermentum.',
            'expTitle1' => 'Integer volutpat',
            'expBody2' => 'Cras et nisl vestibulum, accumsan elit sed, pretium enim. Vestibulum in condimentum magna. Maecenas quam magna, iaculis eu turpis et, commodo pulvinar leo.',
            'expTitle2' => 'Mauris semper',
            'expTitle3' => 'Integer id neque',
            'expBody3' => 'Duis at mollis leo, venenatis congue ex. Cras urna dui, gravida euismod lectus et, cursus tempor nulla. Praesent at turpis quis ex tristique gravida quis eget eros.',
            'website' => 'company.co',
            'status' => '1',
            'created_by' => '2',
            'image' => '20201119041026_ben.jpg',
            'created_at' => '2020-11-01 06:03:28',
            'slug' => 'resume_ben',
        ]);
    }
}
