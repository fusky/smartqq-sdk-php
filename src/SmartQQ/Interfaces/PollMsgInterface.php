<?php
/**
 * Created by kilingzhang
 * User: kilingzhang.com
 * Date: 18-1-7
 * Time: 下午8:09
 */

namespace kilingzhang\SmartQQ\Interfaces;


use kilingzhang\SmartQQ\Entity\ClientToken;
use kilingzhang\SmartQQ\Entity\ResponseMessage;

interface PollMsgInterface
{
    public function FreindMessage(ResponseMessage $message);
    public function GroupMessage(ResponseMessage $message);
    public function DiscussMessage(ResponseMessage $message);
    public function ErrorRetcode($retcode,ClientToken $clientToken);
}