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
        ->count(22)
        ->hasInvoices(11)
        ->create();

         Customer::factory()
        ->count(12)
        ->hasInvoices(1)
        ->create();

         Customer::factory()
        ->count(33)
        ->hasInvoices(22)
        ->create();

         Customer::factory()
        ->count(41)
        ->hasInvoices(9)
        ->create();
    }
}
