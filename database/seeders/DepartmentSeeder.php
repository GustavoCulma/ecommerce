<?php

namespace Database\Seeders;
use App\Models\Department;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['name'=>'Antioquia']);
        Department::create(['name'=>'Atlantico']);
        Department::create(['name'=>'BogotáD.C']);
        Department::create(['name'=>'Bolivar']);
        Department::create(['name'=>'Boyaca']);
        Department::create(['name'=>'Caldas']);
        Department::create(['name'=>'Caqueta']);
        Department::create(['name'=>'Cauca']);
        Department::create(['name'=>'Cesar']);
        Department::create(['name'=>'Cordova']);
        Department::create(['name'=>'Cundinamarca']);
        Department::create(['name'=>'Choco']);
        Department::create(['name'=>'Huila']);
        Department::create(['name'=>'LaGuajira']);
        Department::create(['name'=>'Magdalena']);
        Department::create(['name'=>'Meta']);
        Department::create(['name'=>'Nariño']);
        Department::create(['name'=>'NortedeSantander']);
        Department::create(['name'=>'Quindio']);
        Department::create(['name'=>'Risaralda']);
        Department::create(['name'=>'Santander']);
        Department::create(['name'=>'Sucre']);
        Department::create(['name'=>'Tolima']);
        Department::create(['name'=>'Valle']);
        Department::create(['name'=>'Arauca']);
        Department::create(['name'=>'Casanare']);
        Department::create(['name'=>'Putumayo']);
        Department::create(['name'=>'SanAndres']);
        Department::create(['name'=>'Amazonas']);
        Department::create(['name'=>'Guainia']);
        Department::create(['name'=>'Guaviare']);
        Department::create(['name'=>'Vaupes']);
        Department::create(['name'=>'Vichada']);
    }
}
