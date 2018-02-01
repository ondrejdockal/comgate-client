<?php
declare(strict_types=1);

namespace Comgate\Request;

use Comgate\Response\CreatePaymentResponse;

class Status implements RequestInterface
{

	/** @var string */
	private $endPoint = 'status';

	/** @var string */
	private $transId;

	public function __construct(string $transId)
	{
		$this->transId = $transId;
	}

	/**
	 * @return mixed[]
	 */
	public function getData(): array
	{
		$data = [
			"transId" => $this->getTransId()
		];
		return $data;
	}

	public function isPost(): bool
	{
		return true;
	}

	public function getEndPoint(): string
	{
		return $this->endPoint;
	}

	public function getTransId(): string
	{
		return $this->transId;
	}

	public function setTransId(string $transId): void
	{
		$this->transId = $transId;
	}

	public function getResponseClass(): string
	{
		return CreatePaymentResponse::class;
	}

}