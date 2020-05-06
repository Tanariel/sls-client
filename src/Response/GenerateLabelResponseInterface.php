<?php

/**
 * This file is part of the opportus/sls-client package.
 *
 * Copyright (c) 2019-2020 Clément Cazaud <clement.cazaud@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Opportus\SlsClient\Response;

/**
 * The generateLabel response interface.
 *
 * @package Opportus\SlsClient\Response
 * @author Clément Cazaud <clement.cazaud@gmail.com>
 * @license https://github.com/opportus/sls-client/blob/master/LICENSE MIT
 */
interface GenerateLabelResponseInterface extends ResponseInterface
{
    /**
     * Gets the message ID.
     *
     * @return string
     */
    public function getMessageId(): string;

    /**
     * Gets the label.
     *
     * @return null|string
     */
    public function getLabel(): ?string;

    /**
     * Gets the parcel number.
     *
     * @return null|string
     */
    public function getParcelNumber(): ?string;

    /**
     * Is the response an error ?
     *
     * @return bool
     */
    public function isError(): ?bool;

    /**
     * Get the error message
     *
     * @return null|string
     */
    public function getErrorMessage(): ?string;

    /**
     * Get the error code
     *
     * @return null|string
     */
    public function getErrorCode(): ?string;
}

