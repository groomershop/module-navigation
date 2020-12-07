<?php

namespace Groomershop\Navigation\Block;

class Navigation extends \MageSuite\Navigation\Block\Navigation
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Http\Context $httpContext,
        \Groomershop\Navigation\Service\Navigation\Builder $navigationBuilder,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Serialize\SerializerInterface $serializer,
        \Magento\Customer\Model\Session $session,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $httpContext,
            $navigationBuilder,
            $storeManager,
            $serializer,
            $session,
            $data
        );
    }

    /**
     * @return string
     */
    public function getNavigationType()
    {
        if (empty($this->getType())) {
            return \MageSuite\Navigation\Service\Navigation\Builder::TYPE_DESKTOP;
        }
        return $this->getType();
    }
}
