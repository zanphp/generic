<?php
/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 * THIS IS MODIFIED FOR YOUZAN, ANY PROBLEM PLS CONTACT lanhu(zhangyuanhao@qima-inc.com)
 * qingjiao(qingjiao@qima-inc.com) & xiao'er(shiyu@qima-inc.com)
 * @generated
 */

namespace Com\Youzan\Test\Service;

use Kdt\Iron\Nova\Foundation\Protocol\TStruct;
use Thrift\Type\TType;


class GenericRequest extends TStruct {
  /**
   * @var string
   */
  public $serviceName = null;
  /**
   * @var string
   */
  public $methodName = null;
  /**
   * @var string
   */
  public $methodParams = null;

  protected $structSpec = [
    1 => [
      'var' => 'serviceName',
      'type' => TType::STRING,
      ],
    2 => [
      'var' => 'methodName',
      'type' => TType::STRING,
      ],
    3 => [
      'var' => 'methodParams',
      'type' => TType::STRING,
      ],
    ];

}

