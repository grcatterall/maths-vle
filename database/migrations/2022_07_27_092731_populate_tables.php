<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\Schools\School;
use App\Models\Users\Teachers;
use App\Models\Topics\Topics;
use App\Models\Schools\SchoolAddress;
use App\Models\Users\Admin;

class PopulateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $admin = Admin::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123!'),
            'role' => 'admin'
        ]);

        $schoolAddress = SchoolAddress::create([
            'Address1' => '123 New House',
            'Address2' =>  'Test Street',
            'Postcode' =>  'TE51 RD',
            'County' =>  'Yorkshire',
            'Country' =>  'UK',
        ]);

        $school = School::create([
            'Name' => 'Royal Academy',
            'Contact_Number' =>'01247812',
            'Address_id' => $schoolAddress->id,
            'Email' => 'test@royalacademy.co.uk',
            'Logo' =>'null',
            'Pending' => false,
            'Approved_By' => $admin->id
        ]);

        Teachers::create([
            'name' => 'Tom Jones',
            'username' => 'tjones',
            'assigned_school' => $school->id,
            'role' => 'teacher',
            'assigned_groups' => ',',
            'password' => Hash::make('tjones111'),
        ]);

        Topics::create(
            [
                'title' => 'Algebra',
            ]
        );

        Topics::create(
            [
                'title' => 'Probability',
            ]
        );

        Topics::create(
            [
                'title' => 'Statistics',
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();

        foreach ($tableNames as $name) {
            //if you don't want to truncate migrations
            if ($name == 'migrations') {
                continue;
            }
            DB::table($name)->truncate();
        }
    }
}
