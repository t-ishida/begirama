<?php
namespace Begirama\Line;
class Request
{
    private $from = null;
    private $fromChannel = null;
    private $to = null;
    private $toChannel = null;
    private $eventType = null;
    private $id = null;
    private $content = null;
    public function __construct($message)
    {
        $this->from = $message->from;
        $this->fromChannel = $message->fromChannel;
        $this->to = $message->to;
        $this->toChannel = $message->toChannel;
        $this->eventType = $message->eventType;
        $this->id = $message->id;
        $this->content = new Content($message->content);
    }

    /**
     * @return null
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return null
     */
    public function getFromChannel()
    {
        return $this->fromChannel;
    }

    /**
     * @return null
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @return null
     */
    public function getToChannel()
    {
        return $this->toChannel;
    }

    /**
     * @return null
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param Content $content
     * @return Response
     */
    public function buildReplyResponse(Content $content)
    {
        $response = new Response();
        $response->setTo($this->getContent()->getFrom());
        $response->setContent($content);
        $response->setEventType('138311608800106203');
        $response->setToChannel("1383378250");
        return $response;
    }

    /**
     * @param $jsonString
     * @return Request[]
     */
    public static function create($jsonString)
    {
        $json = json_decode($jsonString);
        $result = array();
        foreach ($json->result as $message) {
           $result[] = new static($message);
        }
        return $result;
    }
}