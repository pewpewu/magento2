<?php

namespace Signifyd\Connect\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * ORM model declaration for case data
 */
class Casedata extends AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Signifyd\Connect\Model\Resource\Casedata');
    }
}