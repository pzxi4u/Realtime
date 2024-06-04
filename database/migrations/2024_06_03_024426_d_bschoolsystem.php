<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Admin_table', function (Blueprint $Admin){
            $Admin -> id();
            $Admin -> string('first_name');
            $Admin -> string('last_name');
            $Admin -> string('sex');
            $Admin -> string('age');
            $Admin -> string('password');
            $Admin -> string('email') -> uniqid();
            $Admin -> string('phonenumber');
            $Admin -> timestamps();
        });
        Schema::create('Student_table', function (Blueprint $Student){
            $Student -> id();
            $Student -> string('first_name');
            $Student -> string('last_name');
            $Student -> string('sex');
            $Student -> string('age');
            $Student -> string('Academic_Year');
            $Student -> string('faculty');
            $Student -> string('batch');
            $Student -> string('room');
            $Student -> date('Date_brith');
            $Student -> string('email') -> nullable() -> uniqid();
            $Student -> string('phonenumber');
            $Student -> string('Shift');
            $Student -> integer('Payment');
            $Student -> date('Date_Study');
            $Student -> string('Date_End');
            $Student -> timestamps();
        });
        Schema::create('teacher_table', function (Blueprint $Teacher){
            $Teacher -> id();
            $Teacher -> string('first_name');
            $Teacher -> string('last_name');
            $Teacher -> string('sex');
            $Teacher -> string('age');
            $Teacher -> string('year_teching');
            $Teacher -> string('Phonenumber');
            $Teacher -> string('email')->nullable() -> uniqid();
            $Teacher -> date('Date_of_birth');
            $Teacher -> string('Other') -> nullable();
            $Teacher -> timestamps();
        });
        Schema::create('Faculty', function (Blueprint $Faculty){
            $Faculty -> id();
            $Faculty -> string('faculty_name');
        });

        Schema::create('Major', function(Blueprint $Major){
            $Major -> id();
            $Major -> string('major_name');
        });
        Schema::create('Card_Student', function (Blueprint $Card){
            $Card -> id();
            $Card -> string('first_name');
            $Card -> string('last_name');
            $Card -> string('sex');
            $Card -> string('room');
            $Card -> string('major');
            $Card -> string('faculty');
            $Card -> integer('Academic_year');
            $Card -> date('Shift');
            $Card -> string('Phonenumber');
            $Card -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Admin_table');
        Schema::drop('Faculty_table');
        Schema::drop('Card_Student');
        Schema::drop('Faculty');
        Schema::drop('Major');
        Schema::drop('teacher_table');
    }
};
