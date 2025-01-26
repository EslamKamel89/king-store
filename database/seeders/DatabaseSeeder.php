<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 */
	public function run(): void {
		// User::factory(10)->create();

		User::factory()->create( [ 
			'name' => 'User ' . fake()->name(),
			'email' => 'user@gmail.com',
			'role' => 2,
		] );
		User::factory()->create( [ 
			'name' => 'Admin ' . fake()->name(),
			'email' => 'admin@gmail.com',
			'role' => 0,
		] );
		User::factory()->create( [ 
			'name' => 'Vendor ' . fake()->name(),
			'email' => 'vendor@gmail.com',
			'role' => 1,
		] );
	}
}
