<?php

use Illuminate\Database\Seeder;

/**
 * Class AuthTableSeeder.
 */
class AuthTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        $this->truncateMultiple([
            config('permission.table_names.model_has_permissions'),
            config('permission.table_names.model_has_roles'),
            config('permission.table_names.role_has_permissions'),
            config('permission.table_names.permissions'),
            config('permission.table_names.roles'),
            'users',

        ]);

        $this->call(UserTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(CountyTableSeeder::class);
        $this->call(ConstituencyTableSeeder::class);
        $this->call(WardTableSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(OrganisationTableSeeder::class);
        // $this->call(OrganisationEmployeeTableSeeder::class);
        $this->enableForeignKeys();
    }
}
