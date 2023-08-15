<?php

namespace Database\Seeders;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'name'          => 'Fawwaz Hudzalfah Saputra',
            'birthday'      => Carbon::parse('2002-05-29'),
            'address'       => 'Haji Dimun 3 Street, Depok City, West Java, Indonesian',
            'age'           => '20 Years Old',
            'degree'        => 'Vocational High School',
            'major'         => 'Software Engineering',
            'email'         => 'manusiacoding29@gmail.com',
            'status'        => 'Single',
            'description'   => 'IT Professional with 6 years of experience in software development and in creating innovative solutions to system issues. I am a team player with strong programming experience to build and operate secure systems. Able to explain complex software problems in easy-to-reach terms.',
            'image'         => 'storage/about/2022-12-09 22:50:02_profile.jpg',
        ]);
    }
}
