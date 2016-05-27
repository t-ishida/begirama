<?php
/**
 * Created by PhpStorm.
 * User: ishidatakeshi
 * Date: 2016/05/26
 * Time: 16:07
 */

namespace Begirama\Line;


class Content
{
    private $location = null;
    private $id = null;
    private $contentType = null;
    private $from = null;
    private $createdTime = null;
    private $to = null;
    private $toType = null;
    private $contentMetadata = null;
    private $text = null;

    public function __construct($content)
    {
        $this->location = $content->location;
        $this->id = $content->id;
        $this->contentType = $content->contentType;
        $this->from = $content->from;
        $this->createdTime = $content->createdTime;
        $this->to = $content->to;
        $this->toType = $content->toType;
        $this->contentMetadata = $content->contentMetadata;
        $this->text = $content->text;
    }

    /**
     * @return null
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null
     */
    public function getContentType()
    {
        return $this->contentType;
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
    public function getCreatedTime()
    {
        return $this->createdTime;
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
    public function getToType()
    {
        return $this->toType;
    }

    /**
     * @return null
     */
    public function getContentMetadata()
    {
        return $this->contentMetadata;
    }

    /**
     * @return null
     */
    public function getText()
    {
        return $this->text;
    }

    public function toArray()
    {
        return array(
            'location' => $this->location,
            'id' => $this->id,
            'contentType' => $this->contentType,
            'from' => $this->from,
            'createdTime' => $this->createdTime,
            'to' => $this->to,
            'toType' => $this->toType,
            'contentMetadata' => $this->contentMetadata,
            'text' => $this->text,
        );
    }
}