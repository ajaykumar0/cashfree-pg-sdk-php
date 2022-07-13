<?php
namespace OpenAPI\Client\CFInterface;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;
use OpenAPI\Client\Api;
use OpenAPI\Client\Model;
use GuzzleHttp\Client;
use OpenAPI\Client\Api\OrdersApi;
use Exception;
use OpenAPI\Client\CFHeader\CFHeader;
use OpenAPI\Client\CFConfig\CFEnvironment;
use OpenAPI\Client\CFConfig\CFConfig;
use OpenAPI\Client\Model\CFOrderRequest;
use OpenAPI\Client\Model\CFOrderPayRequest;
use OpenAPI\Client\Model\CFAuthorizationRequest;
use OpenAPI\Client\Api\PaymentsApi;
use OpenAPI\Client\Api\RefundsApi;
use OpenAPI\Client\Model\CFRefundRequest;
use OpenAPI\Client\Api\SettlementsApi;
use OpenAPI\Client\Api\PaymentLinksApi;
use OpenAPI\Client\Model\CFLinkRequest;

class CFPaymentGateway {

    public function __construct() {
    }

    public function createOrder(CFConfig $config, CFHeader $header, CFOrderRequest $cfOrderRequest)
    {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new OrdersApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
        $x_client_id = $config->getClientId(); // string
        $x_client_secret = $config->getClientSecret(); // string
        $x_api_version = $config->getApiVersion(); // string
        $x_idempotency_key = $header->getIdempotencyKey(); // string
        $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->createOrder($x_client_id, $x_client_secret, $x_api_version, false, $x_idempotency_key, $x_request_id, $cfOrderRequest);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getOrder(CFConfig $config, CFHeader $header, string $orderId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new OrdersApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
        $x_client_id = $config->getClientId(); // string
        $x_client_secret = $config->getClientSecret(); // string
        $x_api_version = $config->getApiVersion(); // string
        $x_idempotency_key = $header->getIdempotencyKey(); // string
        $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getOrder($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            print $result->getCFOrder();
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function orderPay(CFConfig $config, CFHeader $header, CFOrderPayRequest $cfOrderPayRequest) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new OrdersApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
        $x_api_version = $config->getApiVersion(); // string
        $x_idempotency_key = $header->getIdempotencyKey(); // string
        $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->orderPay($x_api_version, $x_request_id, $cfOrderPayRequest);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getPaymentsForOrder(CFConfig $config, CFHeader $header, string $orderId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new PaymentsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getPaymentsfororder($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getPaymentsByPaymentId(CFConfig $config, CFHeader $header, string $orderId, int $cfPaymentId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new PaymentsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getPaymentbyId($x_client_id, $x_client_secret, $orderId, $cfPaymentId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function createRefund(CFConfig $config, CFHeader $header, string $orderId, CFRefundRequest $cfRefundRequest) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new RefundsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->createrefund($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id, $cfRefundRequest);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getRefund(CFConfig $config, CFHeader $header, string $orderId, string $refundId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new RefundsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getRefund($x_client_id, $x_client_secret, $orderId, $refundId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getAllRefundsForOrder(CFConfig $config, CFHeader $header, string $orderId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new RefundsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getallrefundsfororder($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getSettlements(CFConfig $config, CFHeader $header, string $orderId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new SettlementsApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getsettlements($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function createPaymentLinks(CFConfig $config, CFHeader $header, CFLinkRequest $cfLinkRequest) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new PaymentLinksApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->createPaymentLink($x_client_id, $x_client_secret, $x_api_version, false, $x_idempotency_key, $x_request_id, $cfLinkRequest);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getPaymentLinkDetails(CFConfig $config, CFHeader $header, string $linkId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new PaymentLinksApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->getPaymentLinkDetails($x_client_id, $x_client_secret, $linkId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function cancelPaymentLink(CFConfig $config, CFHeader $header, string $linkId) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new PaymentLinksApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->cancelPaymentLink($x_client_id, $x_client_secret, $linkId, $x_api_version, false, $x_idempotency_key, $x_request_id);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function preauthorization(CFConfig $config, CFHeader $header, string $orderId, CFAuthorizationRequest $cfAuthorizationRequest) {
        if($config != null) {
            $environment = $config->getEnvironment();
            $hostURL = $this->getURL($environment);
        }
        $apiInstance = new OrdersApi(
            new Client([
                'timeout' => $config->getTimeout(),
                'proxy' => $config->getProxy(),
            ]),
            null,
            null,
            $hostURL
            );
            $x_client_id = $config->getClientId(); // string
            $x_client_secret = $config->getClientSecret(); // string
            $x_api_version = $config->getApiVersion(); // string
            $x_idempotency_key = $header->getIdempotencyKey(); // string
            $x_request_id = $header->getRequestId(); // string
        try {
            $result = $apiInstance->preauthorization($x_client_id, $x_client_secret, $orderId, $x_api_version, false, $x_idempotency_key, $x_request_id, $cfAuthorizationRequest);
            return $result;
        } catch (Exception $e) {
            throw $e;
        }
    }

    private function getURL(CFEnvironment $environment) {
        if($environment == CFEnvironment::SANDBOX) {
            return 0;
        }
        return 1;
    }

}

?>