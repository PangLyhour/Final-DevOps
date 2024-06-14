<?php

namespace Tests\Feature;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_student()
    {
        $student = Student::create([
            'name' => 'Pang lyhour',
            'email' => 'e20200299@itc.edu.kh',
            'phone' => '071 8169163',
            'dob' => '2001-2-01',
            'device_id' => '74be16979710d4c4e7c6647856088456',
        ]);

        $this->assertTrue($student->exists());
    }
}
