<?php
namespace KiwiCommerce\Testimonials\Block\Adminhtml;

class Items extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'items';
        $this->_headerText = __('Testimonials');
        $this->_addButtonLabel = __('Add New Testimonial');
        parent::_construct();
    }
}
