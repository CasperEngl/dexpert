<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Morten',
            ]),
            resource_path('img/staff/morten-og-jesper.jpg'),
            'profile',
        );

        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Jesper',
            ]),
            resource_path('img/staff/morten-og-jesper.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Signe',
            ]),
            resource_path('img/staff/signe-og-vilhelm.jpg'),
            'profile',
        );

        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Vilhelm',
            ]),
            resource_path('img/staff/signe-og-vilhelm.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Niels',
            ]),
            resource_path('img/staff/niels.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Elizabeth',
            ]),
            resource_path('img/staff/elizabeth-og-jack.jpg'),
            'profile',
        );

        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Jack',
            ]),
            resource_path('img/staff/elizabeth-og-jack.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Esther',
            ]),
            resource_path('img/staff/esther-og-richard.jpg'),
            'profile',
        );

        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Richard',
            ]),
            resource_path('img/staff/esther-og-richard.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Jacob',
            ]),
            resource_path('img/staff/jacob.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Jens',
            ]),
            resource_path('img/staff/jens-og-peter.jpg'),
            'profile',
        );

        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Peter',
            ]),
            resource_path('img/staff/jens-og-peter.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Lena',
            ]),
            resource_path('img/staff/lena.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Anette',
            ]),
            resource_path('img/staff/anette.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Bent',
            ]),
            resource_path('img/staff/bent.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Charlotte',
            ]),
            resource_path('img/staff/charlotte-og-hans.jpg'),
            'profile',
        );

        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Hans',
            ]),
            resource_path('img/staff/charlotte-og-hans.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Christian',
            ]),
            resource_path('img/staff/christian.jpg'),
            'profile',
        );
        
        (new App\Actions\EmployeeActions)->addImage(
            factory(App\Employee::class)->create([
                'name' => 'Christina',
            ]),
            resource_path('img/staff/christina.jpg'),
            'profile',
        );
    }
}
