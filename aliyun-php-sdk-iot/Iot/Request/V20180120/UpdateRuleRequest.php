<?php

namespace Iot\Request\V20180120;

/**
 * Request of UpdateRule
 *
 * @method string getSelect()
 * @method string getRuleDesc()
 * @method string getName()
 * @method string getWhere()
 * @method string getRuleId()
 * @method string getProductKey()
 * @method string getTopicType()
 * @method string getShortTopic()
 */
class UpdateRuleRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Iot',
            '2018-01-20',
            'UpdateRule'
        );
    }

    /**
     * @param string $select
     *
     * @return $this
     */
    public function setSelect($select)
    {
        $this->requestParameters['Select'] = $select;
        $this->queryParameters['Select'] = $select;

        return $this;
    }

    /**
     * @param string $ruleDesc
     *
     * @return $this
     */
    public function setRuleDesc($ruleDesc)
    {
        $this->requestParameters['RuleDesc'] = $ruleDesc;
        $this->queryParameters['RuleDesc'] = $ruleDesc;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $where
     *
     * @return $this
     */
    public function setWhere($where)
    {
        $this->requestParameters['Where'] = $where;
        $this->queryParameters['Where'] = $where;

        return $this;
    }

    /**
     * @param string $ruleId
     *
     * @return $this
     */
    public function setRuleId($ruleId)
    {
        $this->requestParameters['RuleId'] = $ruleId;
        $this->queryParameters['RuleId'] = $ruleId;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function setProductKey($productKey)
    {
        $this->requestParameters['ProductKey'] = $productKey;
        $this->queryParameters['ProductKey'] = $productKey;

        return $this;
    }

    /**
     * @param string $topicType
     *
     * @return $this
     */
    public function setTopicType($topicType)
    {
        $this->requestParameters['TopicType'] = $topicType;
        $this->queryParameters['TopicType'] = $topicType;

        return $this;
    }

    /**
     * @param string $shortTopic
     *
     * @return $this
     */
    public function setShortTopic($shortTopic)
    {
        $this->requestParameters['ShortTopic'] = $shortTopic;
        $this->queryParameters['ShortTopic'] = $shortTopic;

        return $this;
    }
}
