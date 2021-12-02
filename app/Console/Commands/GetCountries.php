<?php

namespace App\Console\Commands;

use App\GraphQLExecutors\Countries;
use Illuminate\Console\Command;

class GetCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-countries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get countries list from Hasura 3rd party remote schema';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Test execute countries codegen
        // Try to edit hasura/graphql/countries.graphql
        // When you want to regenerate executor from graphql query spec just run: `php artisan hasura:sailor:codegen`
        $countries = Countries::execute()->assertErrorFree()->data->countries;

        $this->table(
            ['Name', 'Capital', 'Currency'],
            array_map(
                fn(Countries\Countries\Countries $item) => [
                    $item->name,
                    $item->capital,
                    $item->currency
                ],
                $countries
            )
        );

        return Command::SUCCESS;
    }
}
