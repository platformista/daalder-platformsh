<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Pionect\Daalder\Models\Payment\Method;
use Pionect\Daalder\Models\Payment\Provider;

class PaymentMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SYSTEM
        $systemProvider = Provider::query()->firstOrCreate([
            'name' => 'system'
        ]);

        $methods = $this->mapMethods(collect(Method::systemPayments), $systemProvider);

        // Store methods
        foreach ($methods as $method) {
            Method::firstOrCreate($method);
        }
    }

    public function mapMethods(Collection $methods, Provider $provider)
    {
        return $methods->map(function ($method) use ($provider) {
            return [
                'provider_id' => $provider->id
            ];
        });
    }
}
