<?php

namespace Learning\CustomModule\Block\Adminhtml\Grid;
use Magento\Backend\Block\Widget\Grid\Extended;
use Magento\Backend\Block\Template\Context;
use Magento\Backend\Helper\Data;
use Learning\CustomModule\Model\ResourceModel\CustomModule\CollectionFactory;


class Grid extends Extended
{
    /**
     * @var \Learning\Test\Model\ResourceModel\Info\CollectionFactory
     */
    protected $_collectionFactory;

    /**
     * @param Context $context
     * @param Data $backendHelper
     * @param CollectionFactory $collectionFactory
     * @param array $data
     */
    public function __construct(Context $context, Data $backendHelper, CollectionFactory $collectionFactory, array $data = []
    ) 
    {
        $this->_collectionFactory = $collectionFactory;
        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('learningGrid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('ASC');
    }

    /**
     * Prepare grid collection object
     *
     * @return $this
     */
    protected function _prepareCollection()
    {
        $collection = $this->_collectionFactory->create();
        $this->setCollection($collection);

        return parent::_prepareCollection();
    }
    
    // protected function _prepareCollection()
    // {
    //     if ($this->getCollection()) 
    //     {
    //         foreach ($this->getDefaultFilter() as $field => $value)
    //         {
    //             $this->getCollection()->addFieldToFilter($field, $value);
    //         }
    //     }
    //     return parent::_prepareCollection();
    // }   

    /**
    * Prepare default grid column
    *
    * @return $this
    */
    protected function _prepareColumns()
    {
        
        $this->addColumn(
            'test_id',
            [
                'header' => __('Entity Id'),
                'type' => 'number',
                'index' => 'test_id',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id',
            ]
        );
        
        $this->addColumn(
            'title',
            [
                'header' => __('Title'),
                'type' => 'text',
                'index' => 'title',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id',
            ]
        );
        $this->addColumn(
            'author',
            [
                'header' => __('Author'),
                'type' => 'text',
                'index' => 'author',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id',
            ]
        );
        $this->addColumn(
            'content',
            [
                'header' => __('Content'),
                'type' => 'text',
                'index' => 'content',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id',
            ]
        );
        $this->addColumn(
            'price',
            [
                'header' => __('Price'),
                'type' => 'float',
                'index' => 'price',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id',
            ]
        );
        $this->addColumn(
            'created_at',
            [
                'header' => __('Created At'),
                'index' => 'created_at',
                'type' => 'datetime',
            ]
        );
        // $this->addColumn(
        //     'action',
        //     [
        //         'header' => __('Action'),
        //         'width' => '100px',
        //         'type'  => 'action',
        //         'getter' => 'getId',
        //         'actions' => [
        //             [
        //                 'caption' => __('Action Name'),
        //                 'url' => ['base' => 'routeName/controller/actionName'], 
        //                 'field' => 'id' // pass id as parameter
        //                 ]
        //             ],
        //             'filter' => false,
        //         'sortable' => false,
        //         'index' => 'id',
        //         'is_system' => true
        //     ]
        // );
        return parent::_prepareColumns();
    }

    public function getGridUrl()
    {
        return $this->getUrl('*/*/actionName', ['_current' => true]);
    }
}

?>