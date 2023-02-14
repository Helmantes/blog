<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
            ->count(25)
            ->hasInvoices(10)
            ->create();

        Customer::factory()
            ->count(50)
            ->hasInvoices(50)
            ->create();

        Customer::factory()
            ->count(100)
            ->hasInvoices(20)
            ->create();

        Customer::factory()
            ->count(300)
            ->hasInvoices(2)
            ->create();
    }
}
