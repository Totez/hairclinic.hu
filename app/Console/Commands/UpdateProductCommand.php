<?php

namespace App\Console\Commands;

use App\Entities\Product;
use App\Services\ProductService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Formatter\OutputFormatter;

class UpdateProductCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "product:update";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var ProductService
     */
    protected $productService;

    /**
     * UpdateProductCommand constructor.
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService) {
        parent::__construct();
        $this->productService = $productService;
    }


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {

        $output = $this->getOutput();

        $products = Product::query()->get();

        foreach ($products as $product) {

            $response = $this->productService->update($product);

            if($response->isSuccess()) {
                $output->success($product->name . " frissítése sikeres volt.");
            } else {
                $output->error($product->name . " frissítése sikertelen volt és a következő hibaüzenettel tért vissza:");
                $output->error($response->getError());
                $logger = Log::channel("product");
                $logger->error("There was an error updating product " . $product->name);
                $logger->error($response->getError());
                $logger->error($response->getErrorMessage());
            }
        }

        return 0;
    }
}
