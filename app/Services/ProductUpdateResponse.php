<?php


namespace App\Services;


class ProductUpdateResponse {

    /**
     * @var bool
     */
    protected $success;

    /**
     * @var string Short description of the error.
     */
    protected $error;

    /**
     * @var string Any additional message about the error.
     */
    protected $errorMessage;

    /**
     * ProductUpdateResponse constructor.
     * @param bool $success
     */
    public function __construct($success = false) {
        $this->success = $success;
        $this->error = "";
        $this->errorMessage = "";
    }

    /**
     * @return bool
     */
    public function isSuccess() : bool {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(bool $success) : void {
        $this->success = $success;
    }

    /**
     * @return string
     */
    public function getError() : string {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError(string $error) : void {
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getErrorMessage() : string {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     */
    public function setErrorMessage(string $errorMessage) : void {
        $this->errorMessage = $errorMessage;
    }
}
