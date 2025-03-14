<?php

namespace Jane\JsonSchema\Tests\Expected\Model;

class Test
{
    /**
     * Indicates the ID of the referenced original mail.
     *
     * @var string
     */
    protected $msgref;
    /**
     * Message reference on reply/forward.
     *
     * @var string
     */
    protected $msgRef2;
    /**
     * Indicates the ID of the referenced original mail.
     *
     * @return string|null
     */
    public function getMsgref() : ?string
    {
        return $this->msgref;
    }
    /**
     * Indicates the ID of the referenced original mail.
     *
     * @param string|null $msgref
     *
     * @return self
     */
    public function setMsgref(?string $msgref) : self
    {
        $this->msgref = $msgref;
        return $this;
    }
    /**
     * Message reference on reply/forward.
     *
     * @return string|null
     */
    public function getMsgRef2() : ?string
    {
        return $this->msgRef2;
    }
    /**
     * Message reference on reply/forward.
     *
     * @param string|null $msgRef2
     *
     * @return self
     */
    public function setMsgRef2(?string $msgRef2) : self
    {
        $this->msgRef2 = $msgRef2;
        return $this;
    }
}