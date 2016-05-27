<?php
namespace Begirama\Line;

use Loula\HttpRequest;

class Response
{
    private $to = null;
    private $toChannel = null;
    private $eventType = null;
    private $content = null;

    /**
     * @return null
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param null $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return null
     */
    public function getToChannel()
    {
        return $this->toChannel;
    }

    /**
     * @param null $toChannel
     */
    public function setToChannel($toChannel)
    {
        $this->toChannel = $toChannel;
    }

    /**
     * @return null
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param null $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param null $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    const BASE_URL = '';

    public function toArray()
    {
        return array(
            'to' => $this->to,
            'toChannel' => $this->toChannel,
            'eventType' => $this->eventType,
            'content' => $this->content->toArray(),
        );
    }

    public function toHttpRequest($channelId, $channelSecret, $mid)
    {
        return new HttpRequest('POST', self::BASE_URL . '/v1/event', json_encode($this->toArray()), null, array(
            "Content-Type: application/octet-stream",
            "X-Line-ChannelID: $channelId",
            "X-Line-ChannelSecret: $channelSecret",
            "X-Line-Trusted-User-With-ACL: $mid",
        ));
    }
}