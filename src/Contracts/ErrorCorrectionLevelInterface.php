<?php

/*
 * This file is part of the 2amigos/yii2-qrcode-component project.
 *
 * (c) 2amigOS! <http://2amigos.us/>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Da\QrCode\Contracts;

interface ErrorCorrectionLevelInterface
{
    const LOW = 'low';
    const MEDIUM = 'medium';
    const QUARTILE = 'quartile';
    const HIGH = 'high';
}
