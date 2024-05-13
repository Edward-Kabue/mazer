<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(ActivitySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(DealSeeder::class);
        $this->call(DealStageSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(QuoteSeeder::class);
        $this->call(UserSeeder::class);
    }
}
