<?php


namespace App\Services;


use App\Entities\Product;
use Exception;
use Goutte\Client as GoutteClient;
use Illuminate\Support\Arr;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;

class ProductService {

    protected $httpClient;

    protected $goutte;

    public function __construct() {
        $this->httpClient = HttpClient::create(["verify_peer" => false]);

        $this->goutte = new GoutteClient($this->httpClient);
    }

    /**
     * @param Product $product
     * @return ProductUpdateResponse
     */
    public function update(Product $product) {

        $updateResponse = new ProductUpdateResponse(false);

        if($product->protocol === Product::PROTOCOL_HTTP) {
            try {
                $crawler = $this->goutte->request("GET", $product->update_url);
                $response = $this->goutte->getInternalResponse();

                if($response->getStatusCode() == 200) {
                    $matchedElements = $crawler->filter($product->selector);
                    if($matchedElements->count() != 0) {
                        if($matchedElements->count() == 1) {
                            $productPriceInfo = $matchedElements->attr("content");
                            if($productPriceInfo != null) {
                                $productPrice = intval($productPriceInfo);
                                if($productPrice != 0) {
                                    $product->price = $productPrice;
                                    if($product->isDirty()) {
                                        $product->save();
                                    } else {
                                        $product->touch();
                                    }
                                    $updateResponse->setSuccess(true);
                                } else {
                                    $updateResponse->setError("The product price info can not be converted to int.");
                                    $updateResponse->setErrorMessage($productPriceInfo);
                                }
                            } else {
                                $updateResponse->setError("The matched element does not have a content attribute.");
                                $updateResponse->setErrorMessage($matchedElements->html());
                            }
                        } else {
                            $nodes = $matchedElements->each(function (Crawler $node) {
                                return $node->html();
                            });

                            $updateResponse->setError("The given selector matched with more than 1 element.");
                            $updateResponse->setErrorMessage(print_r($nodes,true));
                        }
                    } else {
                        $updateResponse->setError("The given selector did not matched with any element.");
                        $updateResponse->setErrorMessage(print_r($crawler->html(),true));
                    }
                } else {
                    $updateResponse->setError("The product update url response has a status code other 200.");
                    $updateResponse->setErrorMessage(print_r(array(
                        "headers" => $response->getHeaders(),
                        "content" => $response->getContent()
                    ),true));
                }
            } catch (Exception $ex) {
                $updateResponse->setError("An unknown error occured.");
                $updateResponse->setErrorMessage(print_r(array(
                    "message" => $ex->getMessage(),
                    "file" => $ex->getFile(),
                    "line" => $ex->getLine(),
                    "trace" => $ex->getTraceAsString()
                ),true));
            }
        }
        if($product->protocol === Product::PROTOCOL_JSON) {
            try {
                $response = $this->httpClient->request("GET", $product->update_url);

                if($response->getStatusCode() == 200) {
                    $productInfo = json_decode($response->getContent(), true);
                    if($productInfo) {
                        $productPriceInfo = Arr::get($productInfo, $product->selector);
                        if($productPriceInfo != null) {
                            if(is_string($productPriceInfo)) {
                                $productPrice = intval($productPriceInfo);
                                if($productPrice != 0) {
                                    $product->price = $productPrice;
                                    if($product->isDirty()) {
                                        $product->save();
                                    } else {
                                        $product->touch();
                                    }
                                    $updateResponse->setSuccess(true);
                                } else {
                                    $updateResponse->setError("The product price info can not be converted to int.");
                                    $updateResponse->setErrorMessage($productPriceInfo);
                                }
                            } else {
                                $updateResponse->setError("The product price property is not a string");
                                $updateResponse->setErrorMessage(print_r($productPriceInfo, true));
                            }
                        } else {
                            $updateResponse->setError("The given property can not be accessed on the product info.");
                            $updateResponse->setErrorMessage(print_r($productInfo, true));
                        }
                    } else {
                        $updateResponse->setError("The response can not be decoded as json string.");
                        $updateResponse->setErrorMessage($response->getContent());
                    }
                } else {
                    $updateResponse->setError("The product update url response has a status code other 200.");
                    $updateResponse->setErrorMessage(print_r($response->getInfo(),true));
                }

            } catch (ExceptionInterface $ex) {
                $updateResponse->setError("An unknown error occured.");
                $updateResponse->setErrorMessage(print_r(array(
                    "message" => $ex->getMessage(),
                    "file" => $ex->getFile(),
                    "line" => $ex->getLine(),
                    "trace" => $ex->getTraceAsString()
                ),true));
            } catch (Exception $ex) {
                $updateResponse->setError("An unknown error occured.");
                $updateResponse->setErrorMessage(print_r(array(
                    "message" => $ex->getMessage(),
                    "file" => $ex->getFile(),
                    "line" => $ex->getLine(),
                    "trace" => $ex->getTraceAsString()
                ),true));
            }
        }

        return $updateResponse;
    }

    protected function nbps_replace($string) {
        $content = preg_replace("/\x{00A0}|\s/u","", $string);
        return $content;
    }
}
