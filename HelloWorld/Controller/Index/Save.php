<?php
namespace VarnitS\HelloWorld\Controller\Index;
 
// use Magento\Framework\App\Filesystem\DirectoryList;
 
class Save extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_postFactory;
     // protected $_filesystem;
 
     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \VarnitS\HelloWorld\Model\BlogFactory $postFactory,
          // \Magento\Framework\Filesystem $filesystem
          )
     {
          $this->_pageFactory = $pageFactory;
          $this->_postFactory = $postFactory;
          // $this->_filesystem = $filesystem;
          return parent::__construct($context);
     }
 
     public function execute()
     {
          if ($this->getRequest()->isPost()) {
               $input = $this->getRequest()->getPostValue();
               $post = $this->_postFactory->create();
 
          if(isset($input['editRecordId'])){
                    $post->load($input['editRecordId']);
                    $post->addData($input);
                    // $post->setId($input['editRecordId']);
                    $post->save();
          }else{
               $post->setData($input)->save();
          }
          // $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/delocaldata.log');
          // $logger = new \Zend_Log();
          // $logger->addWriter($writer);
          // $logger->info(print_r($input,true));
              return $this->_redirect('crud/index/index');
          }
     }
}
?>