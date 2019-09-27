<?php

namespace Huangdijia\Youdu\Messages;

class Text extends Message
{
    protected $content;

    /**
     * 文本消息
     *
     * @param string $content 消息内容，支持表情，最长不超过600个字符，超出部分将自动截取
     */
    public function __construct(string $content = '')
    {
        $this->content = $content;
    }

    public function toArray()
    {
        return [
            "toUser"  => $this->toUser,
            "toDept"  => $this->toDept,
            "msgType" => "text", // 消息类型，这里固定为：text
            "text"    => [
                "content" => $this->content,
            ],
        ];
    }
}
