<?php

namespace App\Console\Commands;

use App\Models\MarketData;
use App\Models\ScrappedDataRecord;
use Illuminate\Console\Command;

class ProcessScrappedData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Converts json to database data';

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
     * @return mixed
     */
    public function handle()
    {
        $data = ScrappedDataRecord::all();

        foreach ($data as $record) {
            $decodedScrappedData = json_decode($record->scrapped_data);


            (MarketData::create(
                [
                    'culture_en'               => $decodedScrappedData->culture,
                    'delivery_due_data_en'     => $decodedScrappedData->deliveryDueData,
                    'delivery_terms_en'        => $decodedScrappedData->deliveryTerms,
                    'description_en'           => $decodedScrappedData->description,
                    'location_en'              => $decodedScrappedData->location,
                    'month_of_delivery_en'     => $decodedScrappedData->monthOfDelivery,
                    'offer_type_en'            => $decodedScrappedData->offerType,
                    'price_en'                 => $decodedScrappedData->price,
                    'processing_company_en'    => $decodedScrappedData->processingCompany,
                    'valid_until_en'           => $decodedScrappedData->validUntil,
                    'vat_en'                   => $decodedScrappedData->vat,
                    'volume_en'                => $decodedScrappedData->volume,
                    'company_name_en'          => $decodedScrappedData->companyName,
                    'company_contact_en'       => $decodedScrappedData->companyContact,
                    'company_telephone_en'     => $decodedScrappedData->companyTelephone,
                    'company_website_en'       => $decodedScrappedData->companyWebsite,
                    'company_registered_no_en' => $decodedScrappedData->companyRegisteredNo,
                    'company_director_en'      => $decodedScrappedData->companyDirector,
                    'company_owner_en'         => $decodedScrappedData->companyOwner,
                    'company_type_en'          => $decodedScrappedData->companyType,
                ]
            ))->save();
        }
    }
}
