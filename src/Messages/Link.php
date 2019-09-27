<?php

namespace Huangdijia\Youdu\Messages;

class Link extends Message
{
    protected $link;

    /**
     * 隐式链接
     *
     * @param string $title 标题。最多允许64个字符
     * @param string $url 链接
     * @param int $action 链接打开方式。0：直接打开url；1：url后面带上有度客户端userName和token，可做单点登录
     */
    public function __construct(string $title = '', string $url = '', int $action = 0)
    {
        $this->link   = [
            "title"  => $title,
            "url"    => $url,
            "action" => $action,
        ];
    }

    public function toArray()
    {
        return [
            "toUser"  => $this->toUser,
            "toDept"  => $this->toDept,
            "msgType" => "link", // 消息类型，这里固定为：link
            "link"    => $this->link,
        ];
    }
}
